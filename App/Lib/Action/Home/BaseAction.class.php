<?php
// 本类由系统自动生成，仅供测试用途
class BaseAction extends Action {
    public function _initialize(){
        header('content-type:text/html;charset=utf-8;');

        $bang['bang_video'] = D('Content')->field('id,title')->where(array('title'=>array('neq', ''), 'status'=>1, 'type'=>1))->order('click_num desc, create_time desc')->limit(10)->select();
        $bang['bang_news'] = D('Content')->field('id,title')->where(array('title'=>array('neq', ''), 'status'=>1, 'type'=>2))->order('click_num desc, create_time desc')->limit(10)->select();

        $tag['list'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->limit(15)->select();

        $this->assign('web_name', C('WEB_NAME'));
        $this->assign('bang', $bang);
        $this->assign('tag', $tag);

    }

}