<?php

/**
 * Created by PhpStorm.
 * User: xiaowen
 * Date: 2016/11/6
 * Time: 0:53
 */
class ContentModel extends RelationModel
{
    /**
     * 返回内容列表
     * @param $field
     * @param array $where
     * @param bool|false $limit
     * @return mixed
     */
    public function getContentList($where=array(), $field='content.*, cate.name', $limit=false){
        $data = $this->field($field)->alias('content')->join('tb_cate as cate on content.cate_id = cate.id', 'left')->where($where)->select();
        return $data;
    }

    /**
     * 返回视频列表
     * @param bool|true $field
     * @param array $param
     * @param bool|false $limit
     * @return mixed
     */
    public function getVideoList($param=array(), $limit = false){
        $param['content.type'] = 1;
        return $this->getContentList($param);

    }

    /**
     * 返回资讯列表
     * @param bool|true $field
     * @param array $param
     * @param bool|false $limit
     * @return mixed
     */
    public function getNewsList($param=array(), $limit = false){
        $param['content.type'] = 2;
        return $this->getContentList($param);

    }

    /**
     * 查看分类下的内容
     * @param $cate_id
     * @param array $where
     * @param int $type
     * @return array|mixed
     */
    public function getCateContentList($cate_id, $where = array(), $type = 1){

        $condition = $where;
        $condition['cate_id'] = $cate_id;

        $data = array();
        if($type == 1){
            $data = $this->getVideoList(true, $where);
        }else{
            $data = $this->getNewsList(true, $where);
        }
        return  $data;
    }
    /**
     * 发布新闻、视频　底层实现
     */
    public function addContent($data, $type){
        $data_content = $data;
        $data_content['type'] = $type;
        $result = $this->add($data_content);
        return $result;
    }

    /**
     * 编辑内容
     * @param $id
     * @param $data
     * @return mixed
     */
    public function editContent($id, $data){

        $data_content = $data;
        $status = $this->where("id = $id")->save($data_content);
        return $status;
    }

    public function addVideo($data){

        $result['status'] = 0;
        $result['message'] = '视频添加失败';
        if($data){
            $status = $this->addContent($data, $type = 1);
            //echo $this->getLastSql();
            if($status){
                $result['status'] = 1;
                $result['message'] = '视频添加成功';
                $result['content_id'] = $this->getLastInsID();
            }
        }
        return $result;
    }

    public function addNews($data){
        $result = false;
        if($data){
            $result = $this->addContent($data,$type = 2);
        }
        return $result;
    }

    public function editVideo(){

    }
    public function editNews(){

    }
    public function getVideoInfo($where = []){
        $where['type'] = 1;
        //$where['status'] = 1;
        return $this->field(true)->where($where)->find();
    }
    public function getNewsInfo($where = []){
        $where['type'] = 2;
        //$where['status'] = 1;
        return $this->field(true)->where($where)->find();
    }
    public function getContentInfo($where = []){
        //$where['status'] = 1;
        return $this->field(true)->where($where)->find();
    }

    /**
     * 返回视频附件
     */
    public function getVideoAttach($id){
        $data =  D('Attach')->where(array('content_id'=>$id, 'status'=>1))->select();
        return $data;
    }


    /**
     * 返回视频附件
     */
    public function delVideoAttach($id){
        $status =  D('Attach')->where(array('id'=>$id))->save(array('status'=>2, 'update_time'=>date('Y-m-d H:i:s')));
        //echo D('Attach')->getLastSql();
        if($status){
            $data['status'] = 1;
            $data['message'] = '删除成功';
        }else{
            $data['status'] = 2;
            $data['message'] = '删除失败';
        }
        return $data;
    }
}