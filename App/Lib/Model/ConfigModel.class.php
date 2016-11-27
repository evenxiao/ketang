<?php

/**
 * Created by PhpStorm.
 * User: xiaowen
 * Date: 2016/11/6
 * Time: 0:53
 */
class ConfigModel extends RelationModel
{
    /**
     * 获取配置项列表
     * @param bool|true $field
     * @param array $where
     * @return mixed
     */
   public function getConfigList($where = [], $field = true, $order = 'id desc'){
      $data = $this->field($field)->where($where)->order($order)->select();

       return $data;
   }
}