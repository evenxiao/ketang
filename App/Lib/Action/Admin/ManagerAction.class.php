<?php
// 本类由系统自动生成，仅供测试用途
class ManagerAction extends BaseAction {
    public $adminModel;
    public function _initialize(){
        parent::_initialize();
        $this->adminModel = D('Admin');
    }
    public function adminList(){

        $data['adminList'] = $this->adminModel->where('1')->select();
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 修改密码
     */
    public function update_pwd(){
        $id = I('post.id', 0);
        $pwd = trim(I('post.new_pwd', ''));
        if($id && $pwd){
            $data = array(
                'password'=>$pwd,
                'update_time'=>date('Y-m-d H:i:s'),
            );
            $status = $this->adminModel->where("id = {$id}")->save($data);
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
    public function add(){
        if(IS_AJAX){
            $data = I('post.');
            $data['create_time'] = date('Y-m-d H:i:s');
            $status = $this->adminModel->add($data);
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
     * 修改
     */
    public function update(){
        $id = intval(I('param.id', 0));
        if(IS_AJAX){
            $data = I('post.');
            //$pwd = trim(I('post.new_pwd', ''));
            //echo $id;
            if($id && $data){

                $data['update_time'] = date('Y-m-d H:i:s');
                $status = $this->adminModel->where("id = {$id}")->save($data);
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
        $data = $this->adminModel->find($id);
        //print_r($data);
        $this->assign('data', $data);
        $this->display();

    }
}