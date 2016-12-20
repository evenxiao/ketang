<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {
    public function index(){

        $data = [];

        $data['tag'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->limit(15)->select();
        $data['config'] = D('Config')->where(array('status'=>1, 'is_show'=>1))->select();
        if($data['config']){
            //$typeArr = array_keys(configType());
            foreach($data['config'] as $key=>$val){
                if($val['type'] == 3){
                    $data['links'][] = $val;
                }
                if($val['type'] == 5){
                    $data['ads'][] = $val;
                }
                if($val['type'] == 2){
                    $data['banner'][] = $val;
                }
            }
        }
        //推荐视频
        $data['hotVideo'] = D('Content')->where(array('status'=>1, 'type'=>1))->order('is_hot desc, create_time desc')->limit(8)->select();
        //推荐资讯
        $data['hotNews'] = D('Content')->where(array('status'=>1, 'type'=>2))->order('is_hot desc, create_time desc')->limit(9)->select();

        $cate = D('Cate')->where(array('status'=>1))->select();
        if($cate){
            foreach($cate as $key=>$val){
                if($val['type'] == 1 && count($data['video']) < 6){
                    $data['video'][] = $val;
                    $video_cate_ids[] = $val['id'];
                }else if($val['type'] == 2  && count($data['news']) < 6){
                    $data['news'][] = $val;
                    $news_cate_ids[] = $val['id'];
                }

            }
            //首页版块视频
            if($video_cate_ids){
                foreach($video_cate_ids as $k=>$v){
                    $data['video'][$k]['content'] = D('Content')->field(true)->where(array('cate_id'=>$v, 'type'=>1))->limit(8)->select();
                }

            }

            if($news_cate_ids){
                foreach($news_cate_ids as $k=>$v){
                    $data['news'][$k]['content'] = D('Content')->field(true)->where(array('cate_id'=>$v, 'type'=>2))->limit(16)->select();
                }

            }
        }

        $this->assign('data', $data);

        $this->display();
    }

    public function tag(){
        $id = intval(I('get.tag_id', 0));

        if($id){
            $content = D('TagContent')->alias('tc')->field('c.*, tc.tag_id')->where(array('tc.tag_id'=>$id, 'tc.status'=>1))->join('tb_content as c on tc.content_id = c.id')->select();
        }else{
            $content = D('Content')->alias('c')->field('c.*')->where(array('c.status'=>1))->select();
        }
        $data = array();
        if($content){
            foreach($content as $key=>$value){
                if($value['type'] == 1){
                    //$value['thumb_img'] = $value['thumb_img'] == '' ? '__ROOT__/Resources/static/home/images/img2.png' : $value['thumb_img'];
                    $value['thumb_img'] ='__ROOT__/Resources/static/home/images/img2.png';
                    $data['videoList'][] = $value;
                }elseif($value['type'] == 2){
                    $data['newsList'][] = $value;
                }
            }
        }

        $data['tag'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->select();
        //print_r($data);
        $data['tag_id'] = $id;
        $this->assign('data', $data);
        $this->assign('count', count($content));
        $this->display();
    }

    /**
     * 搜索结果页
     */
    public function search(){

        $keyword = trim(I('param.keyword', ''));
        $type = trim(I('param.type', ''));

        $data = [];
        if($keyword){
            $result = D('Content')->where(array('status'=>1,'title'=>array('like', '%'.$keyword.'%')))->order('id desc')->select();
            if($result){
                foreach($result as $key=>$value){
                    if($value['type'] == 1){
                        $data['result']['video'][] = $value;
                    }else if($value['type'] == 2){
                        $data['result']['news'][] = $value;
                    }

                }
            }
        }
        $data['keyword'] = $keyword;
        $this->assign('data', $data);
        $this->assign('count', count($result));
        $this->display();
    }
}