<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($web_name); ?></title>
<link rel="stylesheet" href="__ROOT__/Resources/static/home/css/global.css" />
<script type="text/javascript" src="__ROOT__/Resources/static/home/js/jquery.min.js"></script>
<script type="text/javascript" src="__ROOT__/Resources/static/home/js/jquery.SuperSlide.2.1.1.js"></script>

<script type="text/javascript" src="__ROOT__/Resources/static/home/js/jquery.raty.min.js"></script>
</head>

<body>
	<div class="common-header">
		<div class="wrap">
			<a href="__APP__" class="header-logo" title="logo">
				<img src="__ROOT__/Resources/static/home/images/logo.png" alt="网上课堂" />
			</a>
			<ul class="header-nav">
				<li><a href="__APP__">首页</a></li>
				<li><a href="<?php echo U('Video/videoList');?>">视频课程</a></li>
				<li><a href="<?php echo U('News/newsList');?>">新闻资讯</a></li>
			</ul>
			<div class="header-login"><a href="<?php echo U('Admin/Index/index');?>" title="管理平台" target="_blank">管理平台</a></div>

			<div class="header-search-wrap">
				<div class="header-search-area">
	                <input class="header-search-input" type="text" placeholder="输入搜索关键字" id="search_keyword" name="keyword">
           		</div>
				<em class="header-search-icon" onclick="searchInfo();"></em>
			</div>
		</div>
	</div>
	
	<!-- 标签搜索-->
	<div class="search-main">

		<div class="search-header-course">
			<div class="wrap">
				<div class="common-filter-box">
					<div class="filter-nav-row clearfix">
						<span class="hd l c-white">定位标签:</span>
						<div class="bd">
							<ul class="">
	                            <li class="filter-nav-item <?php if($data["tag_id"] == 0 ): ?>on<?php endif; ?>">
	                                <a href="<?php echo U('Index/tag');?>">全部标签</a>
	                            </li>
								<?php if(is_array($data["tag"])): $i = 0; $__LIST__ = $data["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="filter-nav-item <?php if($vo["id"] == $data["tag_id"]): ?>on<?php endif; ?>">
	                                <a href="<?php echo U('Index/tag', array('tag_id'=>$vo['id']));?>" ><?php echo ($vo["name"]); ?></a>
	                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
	                             <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">交通维护</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">机场安检</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">枪战</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">搏击训练</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">张教官</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">星级课程</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">十一大</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">开会内容</a>-->
	                            <!--</li>-->
	                            <!--<li class="filter-nav-item">-->
	                                <!--<a href="#">小视屏</a>-->
	                            <!--</li>-->
	                        </ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="search-body">
			<div class="search-nav-warp">
				<div class="search-nav">
					<a href="#" class="active">全站</a>
					<a href="<?php echo U('Video/videoList');?>">视频</a>
					<a href="<?php echo U('News/newsList');?>">资讯</a>
				</div>
			</div>
			<div class="search-related">共找到 <?php echo ($count); ?> 个相关内容</div>
			<h2 class="search-title">相关课程</h2>
			<?php if(is_array($data["videoList"])): $i = 0; $__LIST__ = array_slice($data["videoList"],0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="course-item clearfix">
					<div class="course-item-left">
						<a href="<?php echo U('Video/view', array('id'=>$vo['id']));?>"><img src="<?php echo ($vo["thumb_img"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></a>
					</div>
					<div class="course-item-right">
						<div class="course-item-title">
							<a href="<?php echo U('Video/view', array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a>
						</div>
						<div class="tag">
							<span class="score fl">评分<?php echo ($vo["score"]); ?></span>
							<span class="number	fr"><?php echo ($vo["click_num"]); ?>人学习</span>
						</div>
						<p class="content">
							课程简介：<?php echo (msubstr($vo["content"],0,100)); ?>
						</p>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<div class="course-item clearfix">-->
				<!--<div class="course-item-left">-->
					<!--<a href="#"><img src="__ROOT__/Resources/static/home/images/img2.png" alt="" /></a>-->
				<!--</div>-->
				<!--<div class="course-item-right">-->
					<!--<div class="course-item-title">-->
						<!--<a href="#">在机场发生特殊情况的时候如何快速疏散群众</a>-->
					<!--</div>-->
					<!--<div class="tag">-->
						<!--<span class="score fl">评分9.6</span>-->
						<!--<span class="number	fr">1898人学习</span>-->
					<!--</div>-->
					<!--<p class="content">-->
						<!--课程简介：2016年最新交通法规扣分细则是哪些?继续沿用2013年正式实施新交通法规扣分细则。新交通规则提高了违法成本，记分项也由38项增加至52项。接下来有关2016最新交通法扣分规则的相关内容就由华律网小编为您详细介绍，感谢您的阅读!-->
					<!--</p>-->
				<!--</div>-->
			<!--</div>-->

			<!--<div class="course-item clearfix">-->
				<!--<div class="course-item-left">-->
					<!--<a href="#"><img src="__ROOT__/Resources/static/home/images/img2.png" alt="" /></a>-->
				<!--</div>-->
				<!--<div class="course-item-right">-->
					<!--<div class="course-item-title">-->
						<!--<a href="#">在机场发生特殊情况的时候如何快速疏散群众</a>-->
					<!--</div>-->
					<!--<div class="tag">-->
						<!--<span class="score fl">评分9.6</span>-->
						<!--<span class="number	fr">1898人学习</span>-->
					<!--</div>-->
					<!--<p class="content">-->
						<!--课程简介：2016年最新交通法规扣分细则是哪些?继续沿用2013年正式实施新交通法规扣分细则。新交通规则提高了违法成本，记分项也由38项增加至52项。接下来有关2016最新交通法扣分规则的相关内容就由华律网小编为您详细介绍，感谢您的阅读!-->
					<!--</p>-->
				<!--</div>-->
			<!--</div>-->

			<p class="href-warp">
				<a href="<?php echo U('Index/search', array('keyword'=>$Think['get']['keyword'], 'type'=>'video'));?>">更多课程搜索结果</a>
			</p>
			<!-- -->
			<h2 class="search-title">相关资讯</h2>

			<?php if(is_array($data["newsList"])): $i = 0; $__LIST__ = array_slice($data["newsList"],0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="news-item clearfix">
				<div class="news-item-title">
					<a href="<?php echo U('News/view', array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
				</div>
				<div class="news-item-tag">
					<span class="time fl"><?php echo ($vo["create_time"]); ?></span>
					<span class="number	fr"><?php echo ($vo["click_num"]); ?>人学习</span>
				</div>
				<p class="content">
					<?php echo (msubstr(html_entity_decode($vo["content"]),0,100)); ?>
				</p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<div class="news-item clearfix">-->
				<!--<div class="news-item-title">-->
					<!--<a href="#">十一大四中全会在北京召开</a>-->
				<!--</div>-->
				<!--<div class="news-item-tag">-->
					<!--<span class="time fl">2016-11-29 14:34</span>-->
					<!--<span class="number	fr">1898人学习</span>-->
				<!--</div>-->
				<!--<p class="content">-->
					<!--课程简介：2016年最新交通法规扣分细则是哪些?继续沿用2013年正式实施新交通法规扣分细则。新交通规则提高了违法成本，记分项也由38项增加至52项。接下来有关2016最新交通法扣分规则的相关内容就由华律网小编为您详细介绍，感谢您的阅读!-->
				<!--</p>-->
			<!--</div>-->

			<!--<div class="news-item clearfix">-->
				<!--<div class="news-item-title">-->
					<!--<a href="#">十一大四中全会在北京召开</a>-->
				<!--</div>-->
				<!--<div class="news-item-tag">-->
					<!--<span class="time fl">2016-11-29 14:34</span>-->
					<!--<span class="number	fr">1898人学习</span>-->
				<!--</div>-->
				<!--<p class="content">-->
					<!--课程简介：2016年最新交通法规扣分细则是哪些?继续沿用2013年正式实施新交通法规扣分细则。新交通规则提高了违法成本，记分项也由38项增加至52项。接下来有关2016最新交通法扣分规则的相关内容就由华律网小编为您详细介绍，感谢您的阅读!-->
				<!--</p>-->
			<!--</div>-->
			
			<p class="href-warp">
				<a href="<?php echo U('Index/search', array('keyword'=>$Think['get']['keyword'], 'type'=>'news'));?>">更多资讯搜索结果</a>
			</p>

		</div>
	</div>


	<!-- foorer -->
<div class="footer">
	<div class="logo"></div>
	<p>技术支持  上海嘉麟信息科技股份有限公司</p>
</div>
	<script>
		function searchInfo(){
			var keyword = $.trim($('input[name="keyword"]').val());

			if(!keyword){
				//layer.alert('请输入搜索关键字！');
				alert('请输入搜索关键字！');
				return false;
			}

			window.location.href = "<?php echo U('Index/search');?>" + '?keyword='+keyword;
		}
	</script>

	<!--<script type="text/javascript" src="__ROOT__/Resources/static/home/js/home.js"></script>-->
</body>
</html>