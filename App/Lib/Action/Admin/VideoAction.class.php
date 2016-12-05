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
        if(trim(I('param.keyword'))){
            $param['title'] = array('like', '%' . trim(I('param.keyword')) . '%');
        }
        $cate_id = intval(I('param.cate_id', 0));
        if($cate_id){
            $param['cate_id'] = $cate_id;
        }
        //print_r(I('param.tag_id', ''));
        if(I('param.tag_id', '')){
            $param['tag']
        }
        $data['data'] = D('Content')->getVideoList($param);
        $data['keyword']= trim(I('param.keyword'));
        $data['cate_id']= $cate_id;
        $data['cates'] = D('Cate')->getCateList(array('type'=>1, 'status'=>1));

        $data['tags'] = D('Tag')->where(array('status'=>1, 'type'=>1))->select();
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 添加视频
     */
    public function add(){

        if(IS_AJAX){
            $data = I('post.');
            $tags = I('post.taglist');
            $attachs = I('post.attach');
            $attach_names = I('post.attach_name');
            if(!empty($data)){
                unset($data['beizhu']);
                unset($data['editorValue']);
                unset($data['taglist']);
                unset($data['attach']);
                unset($data['attach_name']);

                $data['create_time'] = date('Y-m-d H:i:s');
                $result = $this->contentModel->addVideo($data);
                //$content_id =  $this->contentModel->getInsertId();
                if($result['status'] == 1){
                    if($tags){

                        $tagData = array();
                        foreach($tags as $key=>$val){
                            $tmp['tag_id'] = $val;
                            $tmp['content_id'] = $result['content_id'];
                            $tmp['create_time'] = date('Y-m-d H:i:s');
                            $tagData[] = $tmp;
                        }

                        D('TagContent')->addAll($tagData);
                    }
                    if($attachs){
                        foreach($attachs as $key=>$val){
                            ///$info = ;
                            $tmp['title'] = $attach_names[$key];
                            $tmp['attach_url'] = $val;
                            $tmp['content_id'] = $result['content_id'];
                            $tmp['create_time'] = date('Y-m-d H:i:s');
                            $attachData[] = $tmp;
                        }
                        D('Attach')->addAll($attachData);
                    }
                }
                $this->ajaxReturn($result);
            }else{
                $result['status'] = 0;
                $result['message'] = '参数有误，请重试';
                $this->ajaxReturn($result);
            }
        }
        $data['cates'] = D('Cate')->getCateList(array('type'=>1, 'status'=>1));
        $data['tags'] = D('Tag')->where(array('status'=>1))->select();
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 修改视频
     */
    public function edit(){
        $id = intval(I('param.id',0));
        if(IS_AJAX){
            $data = I('post.');
            $tags = I('post.taglist');
            $attachs = I('post.attach');
            if(!empty($data) || !$id){
                unset($data['beizhu']);
                unset($data['editorValue']);
                unset($data['taglist']);
                unset($data['attach']);

                $data['create_time'] = date('Y-m-d H:i:s');
                $status = $this->contentModel->editContent($id, $data);
//                if($tags){
//                    //print_r($tags);
//                    $tagData = array();
//                    foreach($tags as $key=>$val){
//                        $tmp['tag_id'] = $val;
//                        $tmp['content_id'] = $id;
//                        $tmp['create_time'] = date('Y-m-d H:i:s');
//                        $tagData[] = $tmp;
//                    }
//                    //删除原来的
//                    D('TagContent')->where(array('status'=>1, 'content_id'=>$id))->save(array('status'=>2));
//                    //插入新的
//                    D('TagContent')->addAll($tagData);
//                }

                $result['status'] = $status ? 1 : 0;
                $result['message'] = $result['status'] ? '修改成功' : '修改失败';
                $this->ajaxReturn($result);
            }else{
                $this->
                $result['status'] = 0;
                $result['message'] = '参数有误，请重试';
                $this->ajaxReturn($result);
            }
        }

        //echo $id;
        $where['id'] = $id;
        $data['info'] = $this->contentModel->getVideoInfo($where);
        $data['cates'] = D('Cate')->getCateList(array('type'=>1, 'status'=>1));
        $data['tags'] = D('Tag')->where(array('status'=>1))->select();
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 附件列表
     */
    public function attachList(){
        $id = intval(I('param.id', 0));
        $data['info'] = $this->contentModel->where(array('id'=>$id))->find();
        $data['attachList'] = D('Content')->getVideoAttach($id);
        $this->assign('data', $data);

        $this->display();
    }

    /**
     * 删除附件
     */
    public function delAttach(){
        if(IS_AJAX){
            $id = intval(I('post.id', 0));
            $data = $this->contentModel->delVideoAttach($id);

            $this->ajaxReturn($data);
        }

    }

}