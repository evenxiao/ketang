<?php

/**
 * Created by PhpStorm.
 * User: xiaowen
 * Date: 2016/11/6
 * Time: 0:53
 */
class CateModel extends RelationModel
{
    /**
     * 返回内容列表
     * @param $field
     * @param array $where
     * @param bool|false $limit
     * @return mixed
     */
    public function getCateList($where=array(),$field = true, $limit=false){
        $data = $this->field($field)->where($where)->select();
        return $data;
    }

}