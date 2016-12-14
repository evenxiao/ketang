<?php
// 本类由系统自动生成，仅供测试用途
class SysAction extends BaseAction {
    public $ConfigModel, $CateModel;
    public function _initialize(){
        parent::_initialize();
        $this->ConfigModel = D('Config');
        $this->CateModel = D('Cate');
    }
    public function tagList(){
        $keyword = trim(I('param.keyword', ''));
        $where = array();
        if($keyword){
            $where['name'] = array('like', '%'.$keyword.'%');
        }
        $data['tagList'] = $this->ConfigModel->where($where)->select();

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
            //print_r($data);
            $dataTag = array();
            if(is_array($data['name']) && !empty($data['name'])){
                foreach($data['name'] as $key=>$val){
                    if(trim($val != '')){
                        $arr['name'] = $val;
                        $arr['create_time'] = date('Y-m-d H:i:s');
                        $dataTag[] = $arr;
                    }
                }
                $status = $this->ConfigModel->addAll($dataTag);
            }else{
                $dataTag['name'] = $data['name'];
                $dataTag['create_time'] = date('Y-m-d H:i:s');
                $status = $this->ConfigModel->add($dataTag);
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
                $status = $this->ConfigModel->where("id = {$id}")->save($data);
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
        $data = $this->ConfigModel->find($id);
        //print_r($data);
        $this->assign('data', $data);
        $this->display();

    }

    /**
     * 版块管理列表
     */
    public function cate(){

        $keyword = trim(I('param.keyword', ''));
        $type = trim(I('param.type', ''));
        $status = trim(I('param.status', ''));
        $where = [];
        if($keyword){
            $where['name'] = $keyword;
        }
        if($type){
            $where['type'] = $type;
        }
        if($status){
            $where['status'] = $status;
        }
        $data['cateList'] = $this->CateModel->where($where)->select();
        $data['param'] = [
            'keyword'=>$keyword,
            'type'=>$type,
        ];
        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 版块管理 添加
     */
    public function addCate(){

        if(IS_AJAX){
            $data['name'] = I('post.name');
            //$data['type'] = I('post.type');
            $dataCate = array();
            if(is_array($data['name']) && !empty($data['name'])){
                foreach($data['name'] as $key=>$val){
                    if(trim($val != '')){
                        $arr['name'] = $val;
                        $arr['type'] = I('post.type_'.$key)[0];
                        $arr['create_time'] = date('Y-m-d H:i:s');
                        $dataCate[] = $arr;
                    }
                }
                $status = $this->CateModel->addAll($dataCate);
            }else{
                $dataCate['name'] = $data['name'];
                $dataCate['type'] = $data['type'];
                $dataCate['create_time'] = date('Y-m-d H:i:s');
                $status = $this->CateModel->add($dataCate);
            }

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
     * 版块管理 添加
     */
    public function updateCate(){
        $id = intval(I('param.id', 0));
        if(IS_AJAX){
            $data = I('post.');
            if($id && $data){
                $data['update_time'] = date('Y-m-d H:i:s');
                $status = $this->CateModel->where("id = {$id}")->save($data);
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
        $data = $this->CateModel->find($id);
        $this->assign('data', $data);
        $this->display();
    }

    /*
     * 导航管理
     */
    public function daohang(){

        $where['type'] = 4;
        //$where['status'] = 1;
        $data['data'] = $this->ConfigModel->getConfigList($where);
        $this->assign($data);
        $this->display();
    }

    /**
     * 导航管理 添加
     */
    public function addNav(){

        if(IS_AJAX){
            $data['config_name'] = I('post.config_name');
            $data['config_value'] = I('post.config_value');
            $dataCate = array();
            if(is_array($data['config_name']) && !empty($data['config_name'])){
                foreach($data['config_name'] as $key=>$val){
                    if(trim($val != '')){
                        $arr['config_name'] = $val;
                        $arr['config_value'] = $data['config_value'][$key];
                        $arr['type'] = 4;
                        $param['is_show'] = I('post.show_'.$key);
                        $arr['is_show'] = $param['is_show'][0];
                        $arr['create_time'] = date('Y-m-d H:i:s');
                        $dataCate[] = $arr;
                    }
                }
                //print_r($dataCate);
                $status = $this->ConfigModel->addAll($dataCate);
                //echo  $this->ConfigModel->getLastSql();
            }else{
                $dataCate['config_name'] = $data['config_name'];
                $dataCate['config_value'] = $data['config_value'];
                $dataCate['is_show'] = I('post.show_0')[0];
                $dataCate['type'] = 4;
                $dataCate['create_time'] = date('Y-m-d H:i:s');
                $status = $this->ConfigModel->add($dataCate);

            }

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
     * 导航管理 添加
     */
    public function editNav(){

        $id = intval(I('param.id', 0));
        if(IS_AJAX){

            if($id) {

                $data['config_name'] = I('post.config_name');
                $data['config_value'] = I('post.config_value');
                $show = I('post.show');
                $dataCate = array();

                $dataCate['config_name'] =  $data['config_name'];
                $dataCate['config_value'] = $data['config_value'];
                $dataCate['is_show'] = $show;
                $dataCate['update_time'] = date('Y-m-d H:i:s');
                $status = $this->ConfigModel->where(array('id'=>$id, 'type'=>4))->save($dataCate);

                if ($status) {
                    $result = array(
                        'status' => 1,
                        'message' => '编辑成功',
                    );
                } else {
                    $result = array(
                        'status' => 0,
                        'message' => '编辑失败',
                    );
                }

            }else{
                $result = array(
                    'status' => 0,
                    'message' => '参数有误，ID无法获取',
                );
            }

            $this->ajaxReturn($result);

        }

        $data['info'] = $this->ConfigModel->where(array('id'=>$id, 'type'=>4))->find();

        $this->assign('data', $data);
        $this->display();

    }
    /**
     * 友情链接管理
     */
    public function links(){
        $where['type'] = 3;
        $where['status'] = 1;
        $data['data'] = $this->ConfigModel->getConfigList($where);
        $this->assign($data);
        $this->display();
    }

    /**
     * 添加友情链接
     */
    public function addLinks(){

        if(IS_AJAX){
            $this->addConfig(3);
        }
        $this->display();
    }

    /**
     * 焦点图管理
     */
    public function banner(){
        $where['type'] = 2;
        //$where['status'] = 1;
        $data['data'] = $this->ConfigModel->getConfigList($where);
        $this->assign($data);
        $this->display();
    }
    /**
     * 添加轮播图
     */
    public function addBanner(){

        if(IS_AJAX){
            $this->addConfig(2);
        }
        $this->display();
    }
    /**
     * 添加配置项
     * @param int $type
     */
    protected function addConfig($type = 1){
        if(IS_AJAX){
            $data['config_name'] = I('post.config_name');
            $data['config_value'] = I('post.config_value');
            $dataCate = array();
            if(is_array($data['config_name']) && !empty($data['config_name'])){
                foreach($data['config_name'] as $key=>$val){
                    if(trim($val != '')){
                        $arr['config_name'] = $val;
                        $arr['config_value'] = $data['config_value'][$key];
                        $arr['type'] = $type;
                        $param['is_show'] = I('post.show_'.$key);
                        $arr['is_show'] = $param['is_show'][0];
                        $arr['create_time'] = date('Y-m-d H:i:s');
                        $dataCate[] = $arr;
                    }
                }
                //print_r($dataCate);
                $status = $this->ConfigModel->addAll($dataCate);
                //echo  $this->ConfigModel->getLastSql();
            }else{
                $dataCate['config_name'] = $data['config_name'];
                $dataCate['config_value'] = $data['config_value'];
                $dataCate['is_show'] = I('post.show_0')[0];
                $dataCate['type'] = $type;
                $dataCate['create_time'] = date('Y-m-d H:i:s');
                $status = $this->ConfigModel->add($dataCate);

            }

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
    }
    /**
     * 焦点图管理
     */
    public function ads(){
        $where['type']=5;
        $data['adsList'] = $this->ConfigModel->getConfigList($where);
        //print_r($data);

        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 添加广告图片
     */
    public function addAds(){

        if(IS_AJAX){
            $this->addConfig(5);
        }

        //$this->assign('data', $data);
        $this->display();
    }

    /**
     * 删除配置项
     */
    public function delConfig(){
        $id = intval(I('param.id', 0));
        if(IS_AJAX){
            if(!id){
                $this->ajaxReturn(array('status'=>0, 'message'=>'参数有误！'));
            }
            $status = $this->ConfigModel->where(array('id'=>$id))->save(array('status'=>2, 'update_time'=>date('Y-m-d H:i:s')));
            if($status){
                $result = array('status'=>1, 'message'=>'删除成功！');
            }else{
                $result = array('status'=>0, 'message'=>'删除失败！');
            }

            $this->ajaxReturn($result);
        }

    }
}