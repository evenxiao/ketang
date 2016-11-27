<?php
// 本类由系统自动生成，仅供测试用途
class TagAction extends BaseAction {
    public $tagModel;
    public function _initialize(){
        parent::_initialize();
        $this->tagModel = D('Tag');
    }
    public function tagList(){
        $keyword = trim(I('param.keyword', ''));
        $where = array();
        if($keyword){
            $where['name'] = array('like', '%'.$keyword.'%');
        }
        $data['tagList'] = $this->tagModel->where($where)->select();

        $this->assign('keyword', $keyword);
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 添加标签
     */
    public function add(){
        if(IS_AJAX){
            $data['name'] = I('post.name');

            $dataTag = array();
            if(is_array($data['name']) && !empty($data['name'])){
                foreach($data['name'] as $key=>$val){
                    if(trim($val != '')){
                        $arr['name'] = $val;
                        $arr['create_time'] = date('Y-m-d H:i:s');
                        $dataTag[] = $arr;
                    }
                }
                $status = $this->tagModel->addAll($dataTag);
            }else{
                $dataTag['name'] = $data['name'];
                $dataTag['create_time'] = date('Y-m-d H:i:s');
                $status = $this->tagModel->add($dataTag);
            }
            //$data['create_time'] = date('Y-m-d H:i:s');

            if($status){
                $result = array(
                    'status' => 1,
                    'message' => '添加成功',
                );
            }else{
                $result = array(
                    'status' => 0,
                    'message' => '添加失败',
                );
            }
            $this->ajaxReturn($result);
        }
        $this->display();
    }

    /**
     * 修改标签
     */
    public function update(){
        $id = intval(I('param.id', 0));
        if(IS_AJAX){
            $data = I('post.');
            //$pwd = trim(I('post.new_pwd', ''));
            //echo $id;
            if($id && $data){
                $data['update_time'] = date('Y-m-d H:i:s');
                $status = $this->tagModel->where("id = {$id}")->save($data);
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
        $data = $this->tagModel->find($id);
        //print_r($data);
        $this->assign('data', $data);
        $this->display();

    }
}