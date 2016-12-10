<?php
// 本类由系统自动生成，仅供测试用途
class BaseAction extends Action {
    public function _initialize(){
        header('content-type:text/html;charset=utf-8;');
        //parent::__construct();

        ACTION_NAME;
        if(!in_array(MODULE_NAME, array('Base'))){
            $this->isLogin();
        }

    }
    public function index(){
        //echo THINK_VERSION;
	    //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

        $this->display();
    }


    public function isLogin(){
        $adminInfo = session('adminInfo');
        if(!$adminInfo){
            $this->redirect('Base/login');
        }

    }

    public function login(){
        if(IS_POST){
            $username = I('post.username') ?  trim(I('post.username')) : '';
            $password = I('post.password') ?  trim(I('post.password')) : '';

            $adminModel = D('Admin');
            $adminInfo = $adminModel->login($username, $password);
            session('adminInfo', $adminInfo);
            $result['status'] = !empty($adminInfo) ? 1 : 0;
            $result['message'] = $result['status'] ? '登陆成功' : '用户或密码错误';
            $this->ajaxReturn($result);

        }else{
            $this->display('Public/login');
        }
    }

    public function loginOut(){
        session('adminInfo', null);
        $this->redirect('Base/login');
    }

    public function findPwd(){

    }

    Public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
}