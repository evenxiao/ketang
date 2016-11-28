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


<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="user_name" name="user_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" placeholder="" id="password" name="password">
			</div>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9 skin-minimal">-->
				<!--<div class="radio-box">-->
					<!--<input name="sex" type="radio" id="sex-1" checked>-->
					<!--<label for="sex-1">男</label>-->
				<!--</div>-->
				<!--<div class="radio-box">-->
					<!--<input type="radio" id="sex-2" name="sex">-->
					<!--<label for="sex-2">女</label>-->
				<!--</div>-->
				<!--<div class="radio-box">-->
					<!--<input type="radio" id="sex-3" name="sex">-->
					<!--<label for="sex-3">保密</label>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email">
			</div>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">附件：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">-->
				<!--<input class="input-text upload-url" type="text" name="uploadfile" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">-->
				<!--<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>-->
				<!--<input type="file" multiple name="file-2" class="input-file">-->
				<!--</span> </div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">所在城市：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">-->
				<!--<select class="select" size="1" name="city">-->
					<!--<option value="" selected>请选择城市</option>-->
					<!--<option value="1">北京</option>-->
					<!--<option value="2">上海</option>-->
					<!--<option value="3">广州</option>-->
				<!--</select>-->
				<!--</span> </div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">备注：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9">-->
				<!--<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="textarealength(this,100)"></textarea>-->
				<!--<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>-->
			<!--</div>-->
		<!--</div>-->
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="button" id="saveBtn" onclick="manager_add();" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	function manager_add(){
		if($.trim($('#user_name').val()) == ''){
			layer.msg('用户名不能为空',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#password').val()) == ''){
			layer.msg('密码不能为空',{icon:2,time:1000});
			return false;
		}else if($('#password').val().length < 6){
			layer.msg('密码不能少于6位',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#phone').val()) == ''){
			layer.msg('手机不能为空',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#email').val()) == ''){
			layer.msg('邮箱不能为空',{icon:2,time:1000});
			return false;
		}
		$.ajax({
			url:'<?php echo U("Manager/add");?>',
			data:$('form').serialize(),
			type:'post',
			dataType:'json',
			success:function(_data){
				if(_data.status == 1){
					setTimeout(function(){
						layer.msg(_data.message,{icon:1,time:1000});
						var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
						//parent.layer.close(index);
						parent.location.reload();
						//layer.closeAll();
					}, 1000);

				}else{
					layer.msg(_data.message,{icon:2,time:1000});
				}
			}
		})
	}

</script>