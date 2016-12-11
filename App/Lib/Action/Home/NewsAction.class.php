<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends BaseAction {
    public function newsList(){
      
        $this->display('list');
    }

    /**
     * 资讯详情
     */
    public function view(){
        $id = intval(I('param.id', 0));
        $data = [];
        if($id){
            $where = array(
                'id' => $id,
                'type' => 2,
                'status' => 1,
            );
            $data = D('Content')->getContentInfo($where);
        }
        $this->assign('data',$data);
        $this->display();
    }

    
}