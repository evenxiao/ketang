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
            }
        }
        $hotContent = D('Content')->where(array('status'=>1))->order('is_hot desc, create_time desc')->select();
        $data['top'] = array();
        if($hotContent){
            foreach($hotContent as $key=>$val){
                if($val['type'] == 1){
                    $data['type']['video'][] = $val;
                }else{
                    $data['type']['news'][] = $val;
                }

            }
        }
        $cate = D('Cate')->where(array('status'=>1))->select();
        if($cate){
            foreach($cate as $key=>$val){
                if($val['type'] == 1 && count($data['video']) < 6){
                    $data['video'][$val['id']] = $val;
                    $video_cate_ids[] = $val['id'];
                }else if($val['type'] == 2  && count($data['news']) < 6){
                    $data['news'][] = $val;
                    $news_cate_ids[] = $val['id'];
                }

            }
            //首页版块视频
            if($video_cate_ids){
                $video_list = D('Content')->field(true)->where(array('cate_id'=>array('in', $video_cate_ids)))->select();
                if($video_list){
                    foreach($video_list as $key=>$value){
                        if(count($data['video'][$value['cate_id']]['content']) < 8){
                            $data['video'][$value['cate_id']]['content'][] = $value;
                        }

                    }
                }
            }

            if($news_cate_ids){
                $video_list = D('Content')->field(true)->where(array('cate_id'=>array('in', $video_cate_ids)))->select();
                if($video_list){
                    foreach($video_list as $key=>$value){
                        if(count($data['news'][$value['cate_id']]['content']) < 16){
                            $data['news'][$value['cate_id']]['content'][] = $value;
                        }

                    }
                }
            }
        }

        //$data['video'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->select();
        //$data['news'] = D('Tag')->where(array('status'=>1))->order('order_num asc')->select();
        //print_r($data);
        $this->assign('data', $data);

        $this->display();
    }

    public function tag(){
        $id = intval(I('get.id', 0));
        //echo $id;
        $content = D('TagContent')->alias('tc')->field('c.*, tc.tag_id')->where(array('tc.tag_id'=>$id, 'tc.status'=>1))->join('tb_content as c on tc.content_id = c.id')->select();
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
        //print_r($data);

        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 搜索结果页
     */
    public function search(){

        $keyword = trim(I('param.keyword', ''));
        $data = [];
        if($keyword){
            $result = D('Content')->where(array('status'=>1,'title'=>array('like', '%'.$keyword.'%')))->select();
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
        $this->display();
    }
}