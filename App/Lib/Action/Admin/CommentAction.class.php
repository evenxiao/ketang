<?php
//后台评论管理控制器
class CommentAction extends BaseAction {
    public $contentModel;
    public function _initialize(){
        //parent::_initialize();
        $this->contentModel = D('Content');
        $this->tagContentModel = D('TagContent');
    }

    /**
     *  评论列表
     *
     */
    public function commentList(){
        $param = I('param.', 0);

        $where = array();
        if($param['type']){
            $where['b.type'] = intval($param['type']);
        }
        if($param['keyword']){
            $where['b.title'] = array('like', '%'.trim($param['keyword']).'%');
        }
        
        $data['commentList'] = D('Comment')->alias('a')->field('a.*, b.title,b.type')->where($where)->join('tb_content b on a.content_id = b.id')->select();

        $data['contentType'] = getCateType();
        $data['param'] = $param;
        $this->assign('data', $data);

        $this->display();
    }

    /**
    *
    * 审核评论
    */
    public function checkComment(){
        if(IS_AJAX){
             $id = intval(I('param.id', 0));
             $info = D('Comment')->where(array('id'=>$id))->find();
             $status = intval(I('param.status',0));
             if($info['status'] != 0){
                $this->ajaxReturn(array('status'=>0, 'message'=>'该评论已审核,无须重新审核！'));
             }
             $status = D('Comment')->where(array('id'=>$id, 'status'=>0))->save(array('status'=>$status,'update_time'=>date('Y-m-d H:i:s')));
             $result['status'] = $status ? 1 : 0;
             $result['message'] = $result['status'] == 1 ? '审核成功' : '审核失败';
             $this->ajaxReturn($result);
        }

    }

     /**
    *   删除
    */
    public function del(){
       if(IS_AJAX){

           $id = intval(I('param.id', 0));

           $status = D('Comment')->delete($id);

           $result['status'] = $status ? 1 : 0;

           $result['message'] = $result['status'] ? '删除成功' : '删除失败';
           $this->ajaxReturn($result);
       }
    }
}
