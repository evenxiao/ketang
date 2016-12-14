<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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


 <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理<span class="c-gray en">&gt;</span>评论列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="__SELF__" method="get">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键字搜索视频/资讯" id="keyword" name="keyword" value="<?php echo ($data["param"]["keyword"]); ?>">
		<span class="select-box inline">
			<select class="select" name="type" id="type">
				<option value="">--请选择类型--</option>
				<?php if(is_array($data["contentType"])): $i = 0; $__LIST__ = $data["contentType"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($data['param']['type'] == $key): ?>selected<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜评论</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
		<!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>-->
		<!--<a href="javascript:;" onclick="member_add('添加评论','<?php echo U('Video/addComment');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加评论</a></span> </div>-->
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">昵称</th>
				<th width="100">内容标题</th>
				<th width="100">类型</th>
				<th width="100">评论内容</th>
				<th width="90">状态</th>
				<th width="130">发布时间</th>

				<th width="100">操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($data["commentList"])): $i = 0; $__LIST__ = $data["commentList"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
				<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["nick_name"]); ?></td>
				<td><?php echo ($vo["title"]); ?></td>
				<td><?php echo (getcatetype($vo["type"])); ?></td>
				<td><?php echo ($vo["content"]); ?></td>
				<td><?php echo (commentstatus($vo["status"])); ?></td>
				<td><?php echo ($vo["create_time"]); ?></td>
				<td class="td-manage">
					<!--<a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> -->
					<?php if($vo['status'] == 0): ?><a style="text-decoration:none" class="ml-5" onClick="member_check(this,'<?php echo ($vo["id"]); ?>', 1)" href="javascript:;" title="审核">通过</a>

					<a style="text-decoration:none" class="ml-5" onClick="member_check(this,'<?php echo ($vo["id"]); ?>', 2)" href="javascript:;" title="审核驳回">驳回</a><?php endif; ?>

					<?php if($vo['type'] == 1): ?><a style="text-decoration:none" class="ml-5" href="<?php echo U('Home/Video/view', array('id'=>$vo['content_id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank">查看视频</a>
					<?php else: ?>
						<a style="text-decoration:none" class="ml-5" href="<?php echo U('Home/News/view', array('id'=>$vo['content_id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank">查看资讯</a><?php endif; ?>

				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var table = $('.table-sort').dataTable({
			"aaSorting": [[ 1, "desc" ]],//默认第几个排序
			"bStateSave": true,//状态保存
			"aoColumnDefs": [
				//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
				{"orderable":false,"aTargets":[0,3,4]}// 制定列不参与排序
			]
		});
		$('.table-sort tbody').on( 'click', 'tr', function () {
			if ( $(this).hasClass('selected') ) {
				$(this).removeClass('selected');
			}
			else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
		});
	});
	/*用户-添加*/
	function member_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*用户-查看*/
	function member_show(title,url,id,w,h){
		layer_show(title,url,w,h);
	}
	

	/*用户-启用*/
	function member_start(obj,id){
		layer.confirm('确认要启用吗？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
			$(obj).remove();
			layer.msg('已启用!',{icon: 6,time:1000});
		});
	}
	/*用户-编辑*/
	function member_edit(title,url,w,h){
		layer_show(title,url,w,h);
	}


	/*审核*/
	function member_check(obj,id,is_pass){
		var title = is_pass == 1 ? '通过' : '驳回';
		layer.confirm('确认要审核'+title+'吗？',function(index){
			$.ajax({
				url:'<?php echo U("Comment/checkComment");?>',
				type:'post',
				data:{id:id,status:is_pass},
				dataType:'json',
				success:function(_data){
					if(_data.status == 1){
						///$(obj).parents("tr").remove();
						layer.msg('审核成功!',{icon:1,time:1000});
						//$('.table-sort tbody tr.selected').remove();

						window.location.reload();
						return false;
					}else{
						layer.msg('审核成功!',{icon:1,time:1000});
						return false;
					}
				}
			})

		});
	}
</script>
<footer class="footer mt-20">
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