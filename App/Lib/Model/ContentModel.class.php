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
    public function getContentList($field, $where=array(), $limit=false){
        $data = $this->field($field)->where($where)->select();
        return $data;
    }

    /**
     * 返回视频列表
     * @param bool|true $field
     * @param array $param
     * @param bool|false $limit
     * @return mixed
     */
    public function getVideoList($field = true, $param=array(), $limit = false){
        $param['type'] = 1;
        return $this->getContentList($field, $param, $limit);

    }

    /**
     * 返回资讯列表
     * @param bool|true $field
     * @param array $param
     * @param bool|false $limit
     * @return mixed
     */
    public function getNewsList($field = true, $param=array(), $limit = false){
        $param['type'] = 2;
        return $this->getContentList($field, $param, $limit);

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
}