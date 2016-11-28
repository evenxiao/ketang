<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <LINK rel="Bookmark" href="/favicon.ico" >
  <LINK rel="Shortcut Icon" href="/favicon.ico" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="__ROOT__/Resources/lib/html5.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/respond.min.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/PIE_IE678.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/static/h-ui/css/H-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/static/h-ui.admin/css/H-ui.admin.css" />
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/lib/Hui-iconfont/1.0.7/iconfont.css" />
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/lib/icheck/icheck.css" />
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/static/h-ui.admin/skin/default/skin.css" id="skin" />
  <link rel="stylesheet" type="text/css" href="__ROOT__/Resources/static/h-ui.admin/css/style.css" />
  <!--[if IE 6]>
  <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
  <script>DD_belatedPNG.fix('*');</script>
  <![endif]-->

  <script type="text/javascript" src="__ROOT__/Resources/lib/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/layer/2.1/layer.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/static/h-ui/js/H-ui.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/static/h-ui.admin/js/H-ui.admin.js"></script>



  <script type="text/javascript" src="__ROOT__/Resources/lib/laypage/1.2/laypage.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/My97DatePicker/WdatePicker.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/ueditor/1.4.3/ueditor.config.js"></script>
  <script type="text/javascript" src="__ROOT__/Resources/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>

  <link href="__ROOT__/Resources/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
  <link href="__ROOT__/Resources/lib/kindeditor/themes/default/default.css" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="__ROOT__/Resources/lib/webuploader/0.1.5/webuploader.min.js"></script>

  <script type="text/javascript" src="__ROOT__/Resources/lib/kindeditor/kindeditor-min.js"></script>

  <script type="text/javascript" src="__ROOT__/Resources/lib/kindeditor/lang/zh_CN.js"></script>

  <!-- -->
  <!--<script type="text/javascript" src="__ROOT__/Resources/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>-->

  <title>微课堂-后台管理系统</title>
  <meta name="keywords" content="微课堂-后台管理系统">
  <meta name="description" content="微课堂-后台管理系统">
</head>
<body>


﻿<header class="navbar-wrapper">
  <div class="navbar navbar-fixed-top">
    <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">微课堂</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs"></span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
      <!--<nav class="nav navbar-nav">-->
      <!--<ul class="cl">-->
      <!--<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>-->
      <!--<ul class="dropDown-menu menu radius box-shadow">-->
      <!--<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>-->
      <!--<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>-->
      <!--<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>-->
      <!--<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>-->
      <!--</ul>-->
      <!--</li>-->
      <!--</ul>-->
      <!--</nav>-->
      <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
        <ul class="cl">
          <li>超级管理员</li>
          <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
            <ul class="dropDown-menu menu radius box-shadow">
              <!--<li><a href="#">个人信息</a></li>-->
              <!--<li><a href="#">切换账户</a></li>-->
              <li><a href="<?php echo U('Base/loginOut');?>">退出</a></li>
            </ul>
          </li>
          <!--<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>-->
          <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
            <ul class="dropDown-menu menu radius box-shadow">
              <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
              <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
              <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
              <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
              <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
              <li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<aside class="Hui-aside">
  <input runat="server" id="divScrollValue" type="hidden" value="" />
  <div class="menu_dropdown bk_2">
    <?php if(is_array($data["menu"])): $i = 0; $__LIST__ = $data["menu"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><dl id="menu-article">
        <dt><i class="Hui-iconfont"><?php echo ($menu["icon"]); ?></i> <?php echo ($menu["name"]); ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
        <dd>
          <?php if(is_array($menu["sub"])): $i = 0; $__LIST__ = $menu["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><ul>
              <li><a _href="<?php echo ($sub_menu["url"]); ?>" data-title="<?php echo ($sub_menu["name"]); ?>" href="javascript:void(0)"><?php echo ($sub_menu["name"]); ?></a></li>
            </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        </dd>
      </dl><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</aside>

<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="<?php echo U('Index/welcome');?>">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
		</div>
	</div>
</section>
﻿<footer class="footer mt-20">
  <div class="container">
    <!--<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>-->
     <p>
      Copyright ©2015 微课堂 All Rights Reserved.<br>
      <!--本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持-->
     </p>
  </div>
</footer>

<script type="text/javascript">

</script>

</body>
</html>