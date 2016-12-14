<?php
// 本类由系统自动生成，仅供测试用途
class VideoAction extends BaseAction {
    public function videoList(){
        //echo THINK_VERSION;
	    //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

        $cate_id = intval(I('param.cate_id', 0));
        $tag_id = intval(I('param.tag_id', 0));
        $where = [];
        if($cate_id){
            $where['cate_id'] = $cate_id;
        }
        if($tag_id){
            //$where['cate_id'] = $cate_id;
            $tagCotentData = D('TagContent')->where(array('tag'=>$tag_id, 'status'=>1))->select();
            $contentIds = [];
            if($tagCotentData){
                foreach($tagCotentData as $key=>$value){
                    $contentIds[] = $value['content_id'];
                }
            }
            if($contentIds){
                $where['id'] = array('in', $contentIds);
            }
        }
        $data['list'] = D('Content')->getVideoList($where);
        $data['cate'] = D('Cate')->getCateList(array('type'=>1,'status'=>1));
        $data['tag'] = D('Tag')->where(array('status'=>1))->select();
        $this->assign('data', $data);
        $this->display('list');
    }

    public function view(){
        $id = intval(I('param.id', 0));
        $data = [];
        if($id){
            $where = array(
                'id' => $id,
                'type' => 1,
                'status' => 1,
            );
            $data = D('Content')->getContentInfo($where);

            import('ORG.Util.Page');
            $count = D('Comment')->where(array('content_id'=>$id,'status'=>1))->count();
            $count_page= ceil($count/3);
            $page = new Page($count, 10);
        }

        $this->assign('data',$data);
        $this->assign('count_page',$count_page);
        $this->assign('count',$count);
        $this->assign('page',$page->show());
        $this->display();

    }

    public function sysConfig(){
        $this->display();
    }
}