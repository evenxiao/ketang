<?php
  header("content-type:text/html;charset=utf-8;");
//定义项目名称
  define('APP_NAME', 'App');
  //定义项目路径
  define('APP_PATH', './App/');
  //开启调试模式
  define('APP_DEBUG', true);
  //加载框架入口文件
  require './ThinkPHP/ThinkPHP.php';
