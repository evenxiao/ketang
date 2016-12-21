<?php
// 本类由系统自动生成，仅供测试用途
class VideoAction extends BaseAction {
    public function videoList(){

        $cate_id = intval(I('param.cate_id', 0));
        $tag_id = intval(I('param.tag_id', 0));

        $order_type = intval(I('param.order_type',1));

        $pageNum = intval(I('param.p', 1));
        $limit = 2;
        $where = [];
        if($cate_id){
            $where['content.cate_id'] = $cate_id;
        }
        $content_empty = 0;
        if($tag_id){
            //$where['cate_id'] = $cate_id;
            $tagCotentData = D('TagContent')->where(array('tag_id'=>$tag_id, 'status'=>1))->select();
            //echo D('TagContent')->getLastSql();
            $contentIds = [];
            //print_r($tagCotentData);
            if($tagCotentData){
                foreach($tagCotentData as $key=>$value){
                    $contentIds[] = $value['content_id'];
                }
            }
            if($contentIds){
                $where['content.id'] = array('in', $contentIds);
            }else{
                $content_empty = 1;
            }
        }

        import('ORG.Util.Page');// 导入分页类
        if(!$content_empty){
            $order = $order_type == 1 ? 'content.id desc' : 'is_hot desc, click_num desc,id desc';
            //print_r($where);
            $where['content.type'] = 1;
            $count = D('Content')->alias('content')->where($where)->count();

            $data['list'] = D('Content')->getVideoList($where, $field='content.*, cate.name', $order, $is_page = true, $pageNum, $limit);

        }else{
            $count = 0;
            $data['list'] = [];
            //echo 111;
        }

        if(!$content_empty){
            $Page       = new Page($count, $limit);// 实例化分页类 传入总记录数和每页显示的记录数
            $link_page_main = '%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %first%  %prePage%  %linkPage%  %nextPage%  %downPage%  %end%';
            $str = $link_page_main;
            $Page->setConfig('theme', $str);
            $show = $count > 0 ? $Page->show_home() : '暂无数据';// 分页显示输出
        }else{
            $show = '暂无数据';
        }


        //echo  D('Content')->getLastSql();
        $data['cate'] = D('Cate')->getCateList(array('type'=>1,'status'=>1));
        $data['tag'] = D('Tag')->where(array('status'=>1))->select();

        $data['tag_id'] = $tag_id;
        $data['cate_id'] = $cate_id;
        $data['page'] = $show;
        $this->assign('data', $data);
        $this->display('list');
    }

    public function view(){
        $id = intval(I('param.id', 0));
        //echo $id;
        $data = [];
        $limit = 2;
        if($id){
            $where = array(
                'id' => $id,
                'type' => 1,
                'status' => 1,
            );
            $data = D('Content')->getContentInfo($where);


            $count = D('Comment')->where(array('content_id'=>$id,'status'=>1))->count();
            $data['comment_list'] = D('Comment')->where(array('content_id'=>$id,'status'=>1))->limit($limit)->order('id desc')->select();
            //import('ORG.Util.Page');
            //$count_page= ceil($count/3);
           // $page = new Page($count, 10);

            //附件
            $data['attach_list'] = D('Attach')->where(array('content_id'=>$id, 'status'=>1))->select();
            //print_r($data['attach_list']);
            $data['ads'] = D('Config')->where(array('status'=>1, 'is_show'=>1,'type'=>5))->select();
        }

        $this->assign('data',$data);
        //$this->assign('count_page',$count_page);
        $this->assign('count',$count);
        //$this->assign('page',$page->show());
        $this->display();

    }

    public function sysConfig(){
        $this->display();
    }
}