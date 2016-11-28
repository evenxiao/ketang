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


<!--<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 视频管理<span class="c-gray en">&gt;</span> 添加视频 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>-->
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>版块：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<!--<input type="text" class="input-text" value="" placeholder="" id="cate" name="cate_id">-->
				<select class="input-text" id="cate" name="cate_id">

					<option value="">-请选择版块-</option>
					<?php if(is_array($data["cates"])): $i = 0; $__LIST__ = $data["cates"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>作者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="author" name="author">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>时长：</label>
			<div class="formControls col-xs-6 col-sm-7">
				<input type="text" class="input-text" placeholder="" name="total_time" id="total_time">
			</div>
			<label class="form-label col-xs-2 col-sm-2">(单位：分钟)</label>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">封面图片：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">-->
				<!--<input class="input-text upload-url" type="text" name="thumb_img" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">-->
				<!--<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>-->
				<!--<input type="file" multiple name="file-2" class="input-file">-->
				<!--</span> </div>-->
		<!--</div>-->
		<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">封面图片：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
		<input class="input-text upload-url" type="text" name="thumb_img" id="thumb_img" readonly nullmsg="请添加附件！" style="width:200px">
		<a href="javascript:;" class="btn btn-primary radius upload-btn" id="thumb_btn"><i class="Hui-iconfont">&#xe642;</i> 浏览图片</a>
		<!--<input type="file" multiple name="file-2" class="input-file">-->
		</span>
			<!--<script type="text/plain" id="upload_ue"></script>-->
		</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">视频：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
		<input class="input-text upload-url" type="text" name="source_file" id="url" readonly nullmsg="请添加附件！" style="width:200px">
		<a href="javascript:;" class="btn btn-primary radius upload-btn" id="insertfile"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
		<!--<input type="file" multiple name="file-2" class="input-file">-->
		</span>
				<!--<script type="text/plain" id="upload_ue"></script>-->
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">视频介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<!--<script id="editor" type="text/plain" style="height:300px;"></script>-->
				<textarea name="content" style="height:300px;visibility:hidden; width:500px;" placeholder="请输入视频介绍..."></textarea>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>来源：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="source_from" type="radio" id="source_from-1" checked value="1">
					<label for="source_from-1">上传</label>
				</div>
				<div class="radio-box">
					<input  name="source_from" type="radio" id="source_from-2" value="2">
					<label for="source_from-2">外链</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否最新：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input name="is_new" type="radio" id="is_new-1" checked value="1">
				<label for="is_new-1">是</label>
			</div>
			<div class="radio-box">
				<input  name="is_new" type="radio" id="is_new-2" value="2">
				<label for="is_new-2">否</label>
			</div>

		</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否热门：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="is_hot" type="radio" id="is_hot-1" checked value="1">
					<label for="is_hot-1">是</label>
				</div>
				<div class="radio-box">
					<input  name="is_hot" type="radio" id="is_hot-2" value="2">
					<label for="is_hot-2">否</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>发布状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="status" type="radio" id="status-1" checked value="1">
					<label for="status-1">立即生效</label>
				</div>
				<div class="radio-box">
					<input  name="status" type="radio" id="status-2" value="3">
					<label for="status-2">暂存草稿</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">标签：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>
							<!--<input type="checkbox" value="" name="user-Character-0" id="user-Character-0">-->
							全部标签</label>
					</dt>

					<dd   style="margin-left: 0px;">
						<dl class="cl permission-list2">
							<!--<dt>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">-->
									<!--栏目管理</label>-->
							<!--</dt>-->
							<dd   style=" margin-left: 0px;">
								<?php if(is_array($data["tags"])): $i = 0; $__LIST__ = $data["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="">
									<input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="taglist[]">
									<?php echo ($vo["name"]); ?>
								</label><?php endforeach; endif; else: echo "" ;endif; ?>
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">-->
									<!--修改</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">-->
									<!--删除</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">-->
									<!--查看</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">-->
									<!--审核</label>-->
								<!--<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-5"> 只能操作自己发布的</label>-->
							<!-- -->

							</dd>
						</dl>
						<!--<dl class="cl permission-list2">-->
							<!--<dt>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">-->
									<!--文章管理</label>-->
							<!--</dt>-->
							<!--<dd>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">-->
									<!--添加</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">-->
									<!--修改</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">-->
									<!--删除</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">-->
									<!--查看</label>-->
								<!--<label class="">-->
									<!--<input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">-->
									<!--审核</label>-->
								<!--<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>-->
							<!--</dd>-->
						<!--</dl>-->
					</dd>
				</dl>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">附件：</label>
			<div id="uploader" class="wu-example col-xs-8 col-sm-9">
				<!--用来存放文件信息-->
				<div id="fileList" class="uploader-list"></div>
				<div class="btns">
					<div id="picker">选择文件</div>
					<a id="btn-star" class="btn btn-default" href="javascript:;">开始上传</a>
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="button" onclick="video_add();" id="uploadBtn" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>

	</form>
</div>
<script type="text/javascript">

	//var ue = UE.getEditor('editor');
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			resizeType : 1,
			allowPreviewEmoticons : false,
			allowImageUpload : false,
			width:"100%",
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'image', 'link']
		});
	});

	//		K('input[name=getHtml]').click(function(e) {
//			alert(editor.html());
//		});
//		K('input[name=isEmpty]').click(function(e) {
//			alert(editor.isEmpty());
//		});
//		K('input[name=getText]').click(function(e) {
//			alert(editor.text());
//		});
//		K('input[name=selectedHtml]').click(function(e) {
//			alert(editor.selectedHtml());
//		});
//		K('input[name=setHtml]').click(function(e) {
//			editor.html('<h3>Hello KindEditor</h3>');
//		});
//		K('input[name=setText]').click(function(e) {
//			editor.text('<h3>Hello KindEditor</h3>');
//		});
//		K('input[name=insertHtml]').click(function(e) {
//			editor.insertHtml('<strong>插入HTML</strong>');
//		});
//		K('input[name=appendHtml]').click(function(e) {
//			editor.appendHtml('<strong>添加HTML</strong>');
//		});
//		K('input[name=clear]').click(function(e) {
//			editor.html('');
//		});


	/*用户-编辑*/
	function member_edit(title,url,id,w,h){
		layer_show(title,url,w,h);
	}
	function video_add(){
		if($.trim($('#title').val()) == ''){
			layer.msg('标题不能为空',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#cate').val()) == ''){
			layer.msg('请选择视频版块',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#thumb_img').val()) == ''){
			layer.msg('请上传封面图片',{icon:2,time:1000});
			return false;
		}
		if($.trim($('#url').val()) == ''){
			layer.msg('请上传视频',{icon:2,time:1000});
			return false;
		}
		$('#uploadBtn').attr('disabled', true).val('处理中');
		//var html = ue.getContent();
		editor.sync();
		//var html = editor.html();
		$('#content').html(editor.html());
		//console.log($('#content').html());
		 //return false;

		$.ajax({
			url:'<?php echo U("Video/add");?>',
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
					}, 2000);

				}else{
					$('#uploadBtn').attr('disabled', false).val('提交');
					layer.msg(_data.message,{icon:2,time:1000});
				}
			}
		})
	}
	KindEditor.ready(function(K) {
		var _editor = K.editor({
			allowFileManager : true
		});
		K('#thumb_btn').click(function() {
			_editor.loadPlugin('image', function() {
				_editor.plugin.imageDialog({
					imageUrl : K('#thumb_img').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#thumb_img').val(url);
						_editor.hideDialog();
					}
				});
			});
		});

		K('#insertfile').click(function() {
			_editor.loadPlugin('insertfile', function() {
				_editor.plugin.fileDialog({
					fileUrl : K('#url').val(),
					clickFn : function(url, title) {
						K('#url').val(url);
						_editor.hideDialog();
					}
				});
			});
		});
	});

</script>

<script type="application/javascript">
	$(function() {
		var $list = $("#fileList"), $btn = $("#btn-star"), state = "pending";
		var uploader = WebUploader.create({

			// swf文件路径
			swf: '__ROOT__/Resources/lib/webuploader/0.1.5/Uploader.swf',

			// 文件接收服务端。
			//server: '__ROOT__/Resources/lib/webuploader/0.1.5/server/fileupload.php',
			server: '<?php echo U("Base/upload?type=video");?>',

			// 选择文件的按钮。可选。
			// 内部根据当前运行是创建，可能是input元素，也可能是flash.
			pick: '#picker',

			// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
			resize: false
		});
		// 当有文件被添加进队列的时候
		uploader.on('fileQueued', function (file) {
			$list.append('<div id="' + file.id + '" class="item">' +
					'<h4 class="info">' + file.name + '</h4>' +
					'<p class="state">等待上传...</p>' +
					'</div>');
		});

		// 文件上传过程中创建进度条实时显示。
		uploader.on('uploadProgress', function (file, percentage) {
			var $li = $('#' + file.id),
					$percent = $li.find('.progress .progress-bar');

			// 避免重复创建
			if (!$percent.length) {
				$percent = $('<div class="progress progress-striped active">' +
						'<div class="progress-bar" role="progressbar" style="width: 0%">' +
						'</div>' +
						'</div>').appendTo($li).find('.progress-bar');
			}

			$li.find('p.state').text('上传中');

			$percent.css('width', percentage * 100 + '%');
		});
		uploader.on('uploadSuccess', function (file, response) {
			$('#' + file.id).find('p.state').text('已上传');
			if(response.status == 1){
				var html = '<input type="hidden" name="attach[]" value="'+response.url+'"><input type="hidden" name="attach_name[]" value="'+response.title+'">';
				$('#' + file.id).append(html);
			}

		});

		uploader.on('uploadError', function (file) {
			$('#' + file.id).find('p.state').text('上传出错');
		});

		uploader.on('uploadComplete', function (file) {
			$('#' + file.id).find('.progress').fadeOut();
		});
		uploader.on('all', function (type) {
			if (type === 'startUpload') {
				state = 'uploading';
			} else if (type === 'stopUpload') {
				state = 'paused';
			} else if (type === 'uploadFinished') {
				state = 'done';
			}

			if (state === 'uploading') {
				$btn.text('暂停上传');
			} else {
				$btn.text('开始上传');
			}
		});

		$btn.on('click', function () {
			if (state === 'uploading') {
				uploader.stop();
			} else {
				uploader.upload();
			}
		});
	});
</script>