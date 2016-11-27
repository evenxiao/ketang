<?php

/**
 * Created by PhpStorm.
 * User: xiaowen
 * Date: 2016/11/6
 * Time: 0:53
 */
class AdminModel extends RelationModel
{
    public function login($username, $password){
        $adminInfo = [];
        if($username && $password){

            $where = array(
                'user_name' => $username,
                'password' => $password,
                'status' => 1,
            );
            $adminInfo = $this->where($where)->find();
        }

        return $adminInfo;
    }
}