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
            //$this->redirect('Base/login',[],3, '登陆跳转中...');
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
    public function upload(){
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");




// header("HTTP/1.0 500 Internal Server Error");
// exit;


// 5 minutes execution time
        @set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Settings
// $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        //$targetDir = 'upload_tmp';
        $uploadDir = './Uploads/';

        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds



// Create target dir
        if (!is_dir($uploadDir)) {
            @mkdir($uploadDir);
        }

// Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }
        $file_type = $_REQUEST['type'];

        if(!is_dir($uploadDir . $file_type . '/')){
           // echo 111;
            @mkdir($uploadDir . $file_type . '/');
        }
        $target_dir = $uploadDir . $file_type . '/'.date('Y-m-d');
        $file_dir =  $file_type . '/'.date('Y-m-d');
        if(!is_dir($target_dir)){
            @mkdir($target_dir);
        }
        //echo $uploadDir . $file_type . '/';
       // exit;
        //$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        $uploadPath = $uploadDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;


        // Remove old temp files

        $index = 0;
        $done = true;
        $type = explode('.', $_FILES['file']['name']);
       // print_r( $_FILES['file']);
        $type = $type[1];
        $fileName = $file_dir . '/' . date('Ymd').mt_rand() .'.' . $type;
       // echo "<br/>";
       /// echo $fileName;
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $fileName)){
            $result = ['status'=>0 , 'message'=>'上传失败'];
        }else{
            $result = ['status'=>1 , 'message'=>'上传成功', 'url'=>$fileName];
        }

        $this->ajaxReturn($result);
        //die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }
}