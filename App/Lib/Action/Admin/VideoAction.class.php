<?php
// 本类由系统自动生成，仅供测试用途
class VideoAction extends BaseAction {
    public $contentModel;
    public function _initialize(){
        parent::_initialize();
        $this->contentModel = D('Content');
    }
    public function videoList(){
        $param = array();
        if(trim(I('post.keyword'))){
            $param['title'] = array('like', '%' . trim(I('post.keyword')) . '%');
        }
        $data['data'] = D('Content')->getVideoList(true, $param);
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 修改视频
     */
    public function update(){
        $id = I('post.id', 0);
        $pwd = trim(I('post.new_pwd', ''));
        if($id && $pwd){
            $data = array(
                'password'=>$pwd,
                'update_time'=>date('Y-m-d H:i:s'),
            );
            $status = D('Admin')->where("id = {$id}")->save($data);
            if($status){
                $result = array('status'=> 1, 'message'=>'修改成功！');
            }else{
                $result = array('status'=> 0, 'message'=>'修改失败！');
            }

        }else{
            $result = array('status'=> 0, 'message'=>'参数有误！');
        }
        $this->ajaxReturn($result);
    }
    /**
     * 添加视频
     */
    public function add(){

        if(IS_AJAX){
            $data = I('post.');
            $tags = I('post.taglist');
            if(!empty($data)){
                unset($data['beizhu']);
                unset($data['editorValue']);
                unset($data['taglist']);

                $data['create_time'] = date('Y-m-d H:i:s');
                $result = $this->contentModel->addVideo($data);
                //$content_id =  $this->contentModel->getInsertId();
                if($tags){
                    //print_r($tags);
                    $tagData = array();
                    foreach($tags as $key=>$val){
                        $tmp['tag_id'] = $val;
                        $tmp['content_id'] = $result['content_id'];
                        $tmp['create_time'] = date('Y-m-d H:i:s');
                        $tagData[] = $tmp;
                    }
//                    print_r($tagData);
//                    exit;
                    D('TagContent')->addAll($tagData);
                }
                $this->ajaxReturn($result);
            }else{
                $result['status'] = 0;
                $result['message'] = '参数有误，请重试';
                $this->ajaxReturn($result);
            }
        }
        $data['tags'] = D('Tag')->where(array('status'=>1))->select();
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 添加视频
     */
    public function edit(){
        $id = intval(I('get.id',0));
        if(IS_AJAX){
            $data = I('post.');
            $tags = I('post.taglist');
            if(!empty($data) || !$id){
                unset($data['beizhu']);
                unset($data['editorValue']);
                unset($data['taglist']);

                $data['create_time'] = date('Y-m-d H:i:s');
                $status = $this->contentModel->editContent($id, $data);
                if($tags){
                    //print_r($tags);
                    $tagData = array();
                    foreach($tags as $key=>$val){
                        $tmp['tag_id'] = $val;
                        $tmp['content_id'] = $id;
                        $tmp['create_time'] = date('Y-m-d H:i:s');
                        $tagData[] = $tmp;
                    }
                    //删除原来的
                    D('TagContent')->where(array('status'=>1, 'content_id'=>$id))->save(array('status'=>2));
                    //插入新的
                    D('TagContent')->addAll($tagData);
                }
                $result['status'] = $status ? 1 : 0;
                $result['message'] = $result['status'] ? '修改成功' : '修改失败';
                $this->ajaxReturn($result);
            }else{
                $result['status'] = 0;
                $result['message'] = '参数有误，请重试';
                $this->ajaxReturn($result);
            }
        }

        //echo $id;
        $where['id'] = $id;
        $data['info'] = $this->contentModel->getVideoInfo($where);
        //print_r( $data['info']);
        $data['tags'] = D('Tag')->where(array('status'=>1))->select();
        $this->assign('data', $data);
        $this->display();
    }
}