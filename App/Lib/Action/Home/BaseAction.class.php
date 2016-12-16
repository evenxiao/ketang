<?php
// 本类由系统自动生成，仅供测试用途
class BaseAction extends Action {
    public function _initialize(){
        header('content-type:text/html;charset=utf-8;');

        $bang['bang_video'] = D('Content')->field('id,title')->where(array('title'=>array('neq', ''), 'status'=>1, 'type'=>1))->order('click_num desc, create_time desc')->limit(10)->select();
        $bang['bang_news'] = D('Content')->field('id,title')->where(array('title'=>array('neq', ''), 'status'=>1, 'type'=>2))->order('click_num desc, create_time desc')->limit(10)->select();

        $tag['list'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->limit(15)->select();

        $this->assign('web_name', C('WEB_NAME'));
        $this->assign('bang', $bang);
        $this->assign('tag', $tag);

    }
    public function setScore(){
        $id = intval(I('param.id',0));
        $score = intval(I('param.score',0));

        if($id && $score){
			$result = array();
            $ip = get_client_ip();

            $time = time();

            if($_COOKIE['person'] == $ip && (($time-$_COOKIE['raty_time']) < 60)){
                $result['status'] =  0;
                $result['message'] = '您已经评过分了';
            }else{
                $info = D('Content')->find($id);
                $status = D('Content')->where(array('id'=>$id))->save(array('score'=>$info['score']+$score, 'score_times'=>$info['score_times']+1, 'update_time'=>date('Y-m-d H:i:s')));

                $result['status'] = $status ? 1 : 0;
                $result['message'] = $result['status'] ? '评分成功' : '评分失败';
                cookie('person', $ip);
                cookie('raty_time', time());

            }


        }
        $this->ajaxReturn($result);
    }

    public function sendComment(){
        $id = intval(I('param.id',0));
        $content = trim(I('param.content',''));

        if($id && $content){
            $result = array();
            $ip = get_client_ip();

            $time = time();

            if($_COOKIE['person'] == $ip && (($time-$_COOKIE['comment_time']) < 60)){
                $result['status'] =  0;
                $result['message'] = '您刚刚发表过评论了，请稍候再评论！';
            }else{
                $info = D('Content')->find($id);
                $comment_data = array(
                    'content_id' => $id,
                    'nick_name' => '游客' . rand(100, 10000),
                    'content' => $content,
                    'create_time'=>date('Y-m-d H:i:s')
                );
                if(D('Comment')->add($comment_data)){
                    $status = D('Content')->where(array('id'=>$id))->save(array('comment_num'=>$info['comment_num']+1, 'update_time'=>date('Y-m-d H:i:s')));
                }else{
                    $status = 0;
                }

                $result['status'] = $status ? 1 : 0;
                $result['message'] = $result['status'] ? '评论成功' : '评论失败';
                cookie('person', $ip);
                cookie('comment_time', time());
                $this->ajaxReturn($result);
            }


        }
        $this->ajaxReturn($result);
    }

}