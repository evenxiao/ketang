<?php
/**
 * Created by PhpStorm.
 * User: xiaowen
 * Date: 2016/11/6
 * Time: 0:50
 */
load('@.extend');
/**
 * 过滤输入字符
 * @param $str
 * @return string
 */
function strHtml($str)
{
    return trim(mysql_real_escape_string($str));
}

/**
 * 后台菜单列表
 */
function adminMenuList()
{
    $menu = array(
            array(
                    'name' => '系统管理',
                    'url' => '#',
                    'level' => 1,
                    'icon'=>'&#xe62e;',
                    'sub' => array(
                        array(
                            'name' => '管理员帐号',
                            'url' => U('Manager/adminList'),
                            'level' => 2
                        ),
                        array(
                            'name' => '导航配置',
                            'url' => U('Sys/daohang'),
                            'level' => 2
                        ),
                        array(
                            'name' => '版块管理',
                            'url' => U('Sys/cate'),
                            'level' => 2
                        ),
                        array(
                            'name' => '友情链接配置',
                            'url' => U('Sys/links'),
                            'level' => 2
                        ),
                        array(
                            'name' => '焦点图管理',
                            'url' => U('Sys/banner'),
                            'level' => 2
                        ),
                        array(
                            'name' => '广告图管理',
                            'url' => U('Sys/ads'),
                            'level' => 2
                        ),
                     ),
                ),
             array(
                    'name' => '视频管理',
                    'url' => '#',
                    'level' => 1,
                    'icon'=>'&#xe613;',
                    'sub' => array(
                        array(
                            'name' => '视频列表',
                            'url' => U('Video/videoList'),
                            'level' => 2
                        ),
                        array(
                            'name' => '添加视频',
                            'url' => U('Video/add'),
                            'level' => 2
                        ),

                    ),
             ),
             array(
                    'name' => '资讯管理',
                    'url' => '#',
                    'level' => 1,
                    'icon'=>'&#xe616;',
                    'sub' => array(
                        array(
                            'name' => '资讯列表',
                            'url' => U('News/newsList'),
                            'level' => 2
                        ),
                        array(
                            'name' => '添加资讯',
                            'url' => U('News/add'),
                            'level' => 2
                        ),

                    ),
                ),
            array(
                'name' => '评论管理',
                'url' => '#',
                'level' => 1,
                'icon'=>'&#xe622;',
                'sub' => array(
                    array(
                        'name' => '评论列表',
                        'url' => U('Comment/commentList'),
                        'level' => 2
                    ),
//                    array(
//                        'name' => '添加资讯',
//                        'url' => U('News/add'),
//                        'level' => 2
//                    ),

                ),
            ),
                array(
                    'name' => '标签管理',
                    'url' => '#',
                    'level' => 1,
                    'icon'=>'&#xe61a;',
                    'sub' => array(
                        array(
                            'name' => '标签列表',
                            'url' => U('Tag/tagList'),
                            'level' => 2
                        ),

                    ),
                ),

    );
    return $menu;
}

/**
 * 版块类型
 * @param int $type 类型1 视频 2 资讯
 * @return array
 */
function getCateType($type){
    $data = array(
        1 => '视频',
        2 => '资讯',
    );
    if($type){
        return $data[$type];
    }
    return $data;
}

/**
 * 配置类型
 */
function configType($type = ''){
    $arr = array(
        1 =>'系统配置',
        2 =>'焦点图',
        3 =>'友情链接',
        4 =>'导航配置',
        5 =>'广告图',
    );
    if($type){
        return $arr[$type];
    }
    return $arr;
}