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
		<div class="row cl tag">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>版块名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder=""  name="name[]">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal type_box">
				<div class="radio-box">
					<input name="type_0[]" type="radio" id="type-1" checked value="1">
					<label for="type-1">视频</label>
				</div>
				<div class="radio-box">
					<input  name="type_0[]" type="radio" id="type-2"value="2">
					<label for="type-2">资讯</label>
				</div>

			</div>
		</div>
		<div class="row cl" id="add-input">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="button" id="addMore" onclick="add_More();" value="&nbsp;&nbsp;再增加一个&nbsp;&nbsp;">
			</div>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>上级版块：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9">-->
				<!--<select name="pid" id="pid">-->
					<!--<option value="0">一级版块</option>-->
					<!--<option value="1">二级版块</option>-->
					<!--<option value="2">三级版块</option>-->
				<!--</select>-->
			<!--</div>-->
		<!--</div>-->
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
				<input class="btn btn-primary radius" type="button" id="saveBtn" onclick="tag_add();" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
	<div class="tag_add"  style="display: none">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>标签名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder=""  name="name[]">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal type_box">
				<div class="radio-box">
					<input name="type[]" type="radio"  checked value="1">
					<label for="type-1">视频</label>
				</div>
				<div class="radio-box">
					<input name="type[]" type="radio" value="2">
					<label for="type-2">资讯</label>
				</div>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function add_More(){
		var num = $('form .type_box').length;
		$('.tag_add .radio-box input').attr('name', 'type_'+num+'[]');
		var tag_input = $('.tag_add').html();
		//console.log(num);
		//$('.tag:last').after(tag_input);
		$('#add-input').before(tag_input);
	}
	function tag_add(){
		if($.trim($("form input[name='name[]']").val()) == ''){
			layer.msg('版块名不能为空',{icon:2,time:1000});
			return false;
		}

		$.ajax({
			url:'<?php echo U("Sys/addCate");?>',
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
					//parent.location.reload();
				}else{
					layer.msg(_data.message,{icon:2,time:1000});
				}
			}
		})
	}

</script>