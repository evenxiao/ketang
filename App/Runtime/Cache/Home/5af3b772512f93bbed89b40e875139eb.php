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

	<!-- 首页广告图 -->
	<div class="fullSlide">
	  	<div class="bd">
	   		 <ul>
	      		<li style="background:url('__ROOT__/Resources/static/home/images/banner3.jpg') center 0 no-repeat;"><a target="_blank" href="#"></a></li>
	     		 <li style="background:url('__ROOT__/Resources/static/home/images/banner4.jpg') center 0 no-repeat;"><a target="_blank" href="#"></a></li>
	      		<li style="background:url('__ROOT__/Resources/static/home/images/banner5.jpg') center 0 no-repeat;"><a target="_blank" href="#"></a></li>
	    	</ul>
	  	</div>
		  <div class="hd">
		    <ul>
		    </ul>
		  </div>
		  <span class="prev"></span> 
		  <span class="next"></span> 
	  </div>
	  <script type="text/javascript">
	  $('.common-header').addClass('index-header').removeClass('common-header');
		jQuery(".fullSlide").hover(function() {
		    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
		},
		function() {
		    jQuery(this).find(".prev,.next").fadeOut()
		});
		jQuery(".fullSlide").slide({
		    titCell: ".hd ul",
		    mainCell: ".bd ul",
		    effect: "fold",
		    autoPlay: true,
		    autoPage: true,
		    trigger: "click",
		    interTime: 5500,
		    startFun: function(i) {
		        var curLi = jQuery(".fullSlide .bd li").eq(i);
		        if ( !! curLi.attr("_src")) {
		            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
		        }
		    }
		});
		</script>

	<!-- content -->
	<div class="outwrap bg-white">
		<div class="wrap">
			<div class="index-rcommend-box">
				<div class="common-hd bd-bm-1 clearfix">
					<h1 class="c-black l">精彩推荐</h1>
				</div>
				<div class="rcommend-box mr-25 clearfix">
					<!--推荐视频-->
					<div class="rcommend-mv-box l">
						<?php if(is_array($data["hotVideo"])): $i = 0; $__LIST__ = $data["hotVideo"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="mv-link" href="#">
							<div class="mv-link-img">
								<img src='<?php if($vo[thumb_img] == ''): ?>__ROOT__/Resources/static/home/images/img1.png<?php else: echo ($vo['thumb_img']); endif; ?>'/>
							</div>
							<h4><?php echo ($vo["title"]); ?></h4>
							<div class="mv-link-bottom">
								<span class="score l">评分<?php echo ($vo['score']); ?></span>
								<span class="number	r"><?php echo ($vo['click_num']); ?>人学习</span>
							</div>
						</a><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--<a class="mv-link" href="#">-->
							<!--<div class="mv-link-img">-->
								<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
							<!--</div>-->
							<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
							<!--<div class="mv-link-bottom">-->
								<!--<span class="score l">评分4.9</span>-->
								<!--<span class="number	r">1898人学习</span>-->
							<!--</div>-->
						<!--</a>-->

						<!--<a class="mv-link" href="#">-->
							<!--<div class="mv-link-img">-->
								<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
							<!--</div>-->
							<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
							<!--<div class="mv-link-bottom">-->
								<!--<span class="score l">评分4.9</span>-->
								<!--<span class="number	r">1898人学习</span>-->
							<!--</div>-->
						<!--</a>-->

						<!--<a class="mv-link" href="#">-->
							<!--<div class="mv-link-img">-->
								<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
							<!--</div>-->
							<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
							<!--<div class="mv-link-bottom">-->
								<!--<span class="score l">评分4.9</span>-->
								<!--<span class="number	r">1898人学习</span>-->
							<!--</div>-->
						<!--</a>-->

						<!--<a class="mv-link" href="#">-->
							<!--<div class="mv-link-img">-->
								<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
							<!--</div>-->
							<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
							<!--<div class="mv-link-bottom">-->
								<!--<span class="score l">评分4.9</span>-->
								<!--<span class="number	r">1898人学习</span>-->
							<!--</div>-->
						<!--</a>-->

						<!--<a class="mv-link" href="#">-->
							<!--<div class="mv-link-img">-->
								<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
							<!--</div>-->
							<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
							<!--<div class="mv-link-bottom">-->
								<!--<span class="score l">评分4.9</span>-->
								<!--<span class="number	r">1898人学习</span>-->
							<!--</div>-->
						<!--</a>-->
					</div>

				<!--推荐文章-->

					<div class="rcommend-news-box l">
						<div class="rcommend-top-new bd-bm-1">
							<h1><a href="<?php echo U('News/view', array('id'=>$data['hotNews'][0]['id']));?>" title="<?php echo ($data['hotNews'][0]['title']); ?>" target="_blank"><?php echo ($data['hotNews'][0]['title']); ?></a></h1>
							<p><?php echo (msubstr($data['hotNews'][0]['content'], 0, 50)); ?></p>
						</div>
						<div class="rcommend-bottom-news">
							<ul vaule="compact">
								<?php if(is_array($data["hotNews"])): $i = 0; $__LIST__ = array_slice($data["hotNews"],1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('News/view', array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
								<!--<li><a href="#" title="">杜特尔特遭袭谁是凶手 为何与CIA没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特凶手 为何与CIA没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特尔特遭袭击谁是凶手 A没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特尔特遭袭击谁是凶是凶手 为何与CIA没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特尔特遭袭击谁是凶手 为何与CIA没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特尔特遭袭击谁是凶手 为何没有直接联系凶手 ...</a></li>-->
								<!--<li><a href="#" title="">杜特尔特遭袭击谁是凶手 为何没有直接联系凶手 ...</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 视频tab框架-->

	<div class="outwrap bg-gray clearfix">
		<div class="wrap">
			<div class="index-tab-wrap l">

				<div class="mv-slideTxtBox">
					<div class="hd clearfix">
						<div class="common-tab-hd clearfix">
							<h1 class="c-black l">视频课程</h1>
						</div>
						<ul>
							<?php if(is_array($data["video"])): $i = 0; $__LIST__ = $data["video"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($key == 0): ?>class="on"<?php endif; ?> ><?php echo ($vo["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--<li>最新视频</li>-->
							<!--<li>最新视频</li>-->
							<!--<li>最新视频</li>-->
							<!--<li>最新视频</li>	-->
							<!--<li>最新视频</li>-->
						</ul>
						<div class="tab-more">
							<a href="<?php echo U('Video/videoList');?>" target="_blank">更多>></a>
						</div>
					</div>
					<div class="bd clearfix">
						<?php if(is_array($data["video"])): $i = 0; $__LIST__ = $data["video"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul><!-- 视频每项最多显示8条 -->
							<?php if(is_array($vo["content"])): $i = 0; $__LIST__ = $vo["content"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><a class="mv-link" href="<?php echo U('Video/view', array('id'=>$video['id']));?>" target="_blank" title="<?php echo ($video["title"]); ?>">
								<div class="mv-link-img">
									<img src="__ROOT__/Resources/static/home/images/img1.png">
								</div>
								<h4><?php echo ($video["title"]); ?></h4>
								<div class="mv-link-bottom">
									<span class="score l">评分4.9</span>
									<span class="number	r">1898人学习</span>
								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

						</ul><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--<ul>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
						<!--</ul>-->

						<!--<ul>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
						<!--</ul>-->

						<!--<ul>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
						<!--</ul>-->

						<!--<ul>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->

						<!--</ul>-->

						<!--<ul>-->
							<!--<a class="mv-link" href="#">-->
								<!--<div class="mv-link-img">-->
									<!--<img src="__ROOT__/Resources/static/home/images/img1.png">-->
								<!--</div>-->
								<!--<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>-->
								<!--<div class="mv-link-bottom">-->
									<!--<span class="score l">评分4.9</span>-->
									<!--<span class="number	r">1898人学习</span>-->
								<!--</div>-->
							<!--</a>-->
						<!--</ul>-->

					</div>
				</div>

				<script>
				 	$(".mv-slideTxtBox").slide({effect:"fade",trigger:"click",delayTime:500,pnLoop:false});
				</script>

			</div>
			<!--视频点击排行榜-->
			<div class="index-rank-wrap r">
				<div class="common-hd">
					<h1 class="c-black">视频点击排行榜</h1>
				</div>
				<div class="common-rank-list">
					
		<ul>
			<?php if(is_array($bang["bang_video"])): $i = 0; $__LIST__ = $bang["bang_video"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em class="no<?php echo ($key+1); ?>"><?php echo ($key+1); ?></em><a href="<?php echo U('Video/view',array('id'=>$vo['id']));?>" title=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>
				</div>
			</div>


		</div>
	</div>

	<!-- 新闻tab框架-->

	<div class="outwrap bai clearfix">
		<div class="wrap">
			<div class="index-tab-wrap l">
				<div class="new-slideTxtBox">
					<div class="hd clearfix">
						<div class="common-tab-hd clearfix">
							<h1 class="c-black l">新闻资讯</h1>
						</div>
						<ul>

							<?php if(is_array($data["news"])): $i = 0; $__LIST__ = $data["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($key == 0): ?>class="on"<?php endif; ?>><?php echo ($vo["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--<li class="on">最新资讯</li>-->
							<!--<li>调研文章</li>-->
							<!--<li>学习感悟</li>	-->
						</ul>
						<div class="tab-more">
							<a href="<?php echo U('News/newsList');?>" target="_blank">更多>></a>
						</div>
					</div>
					<div class="bd clearfix">
						<?php if(is_array($data["news"])): $i = 0; $__LIST__ = $data["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul><!-- 资讯首页每项最多显示16条 -->
								<?php if(is_array($vo["content"])): $i = 0; $__LIST__ = $vo["content"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="news-link">
									<a href="<?php echo U('News/view', array('id'=>$news['id']));?>" target="_blank" title="<?php echo ($news["title"]); ?>"><?php echo ($news["title"]); ?></a>
									<b><?php echo ($news["create_time"]); ?></b>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--<ul>&lt;!&ndash; 资讯首页每项最多显示16条 &ndash;&gt;-->
							<!--<div class="news-link">-->
								<!--<a href="#">中国一次齐射10枚东风21 释放5大信号警告川普收敛点中国一次齐射10枚东风21 释放5大信号警告川普收敛点</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">深度：中国潜艇将配特殊铝合金环隐身 美日束手无策</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">外国网友：为何其他穷国不能复制中国的成功？</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">朝鲜爆大事时机正临近 大家被韩国神逻辑搞笑了</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">普京为何“恭维”特朗普？或认为中国已成“出头鸟”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">媒美惊呼：美国正在把全球领袖地位让给中国？</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">重拳出击！向世界宣告：这就是得罪中国的下场</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">官曝东风-31A洲际导弹最新伪装，信息含量好大</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->

							<!--<div class="news-link">-->
								<!--<a href="#">台湾不能不自量力妄想挑战中美关系</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">-->
								<!--防务文章预判，到2020年中国海军将增加部署30艘以上的潜艇力量……[详细]-->
								<!--</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">-->
								<!--中国专家推断，B21轰炸机将装备“智能”副驾驶，帮助测绘航线……[详细]-->
								<!--</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">中国航母发展经历美国三次战略忽悠！还好没上当</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
						<!--</ul>-->
						<!--<ul>-->
							<!--<div class="news-link">-->
								<!--<a href="#">30多年后中国武器终于凭实力在这个国家重新上位</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">普京为何“恭维”特朗普？或认为中国已成“出头</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">普京为何“恭维”特朗普？或认为中国已成“出头鸟”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">中国“神秘列车”已经启动 五角大楼“惶恐不安”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">朝鲜核武达到啥水平了? 美国追击中国核潜艇悲剧了</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">媒美惊呼：美国正在把全球领袖地位让给中国？</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">重拳出击！向世界宣告：这就是得罪中国的下场</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">官曝东风-31A洲际导弹最新伪装，信息含量好大</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->

							<!--<div class="news-link">-->
								<!--<a href="#">台湾不能不自量力妄想挑战中美关系</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
						<!--</ul>-->
						<!--<ul>-->
							<!--<div class="news-link">-->
								<!--<a href="#">普京为何“恭维”特朗普？或认为中国已成“出头鸟”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">中国“神秘列车”已经启动 五角大楼“惶恐不安”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
							<!--<div class="news-link">-->
								<!--<a href="#">朝鲜核武达到啥水平了? 美国追击中国核潜艇悲剧了</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
						<!--</ul>-->
						<!--<ul>-->
							<!--<div class="news-link">-->
								<!--<a href="#">普京为何“恭维”特朗普？或认为中国已成“出头鸟”</a>-->
								<!--<b>11-30 16:30</b>-->
							<!--</div>-->
						<!--</ul>-->
					</div>
				</div>
				<script>
					jQuery(".new-slideTxtBox").slide({effect:"fade",trigger:"click",delayTime:0,pnLoop:false});
				</script>
			</div>
			<!--资讯点击排行榜-->

			<div class="index-rank-wrap r">
				<div class="common-hd">
					<h1 class="c-black">资讯点击排行榜</h1>
				</div>
				<div class="common-rank-list">
					
		<ul>
			<?php if(is_array($bang["bang_news"])): $i = 0; $__LIST__ = $bang["bang_news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em class="no<?php echo ($key+1); ?>"><?php echo ($key+1); ?></em><a href="<?php echo U('News/view',array('id'=>$vo['id']));?>" title=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>

				</div>
			</div>
		</div>
	</div>
	
	<!-- 快捷标签-->
	<div class="outwrap banner-img clearfix">
		<div class="wrap">
			<div class="common-hd clearfix">
				<h1 class="c-white l">热门标签</h1>
				<a class="common-more c-white r" href="<?php echo U('Index/tag');?>" target="_blank">更多>></a>
			</div>
			<div class="label-box">
				<?php if(is_array($data["tag"])): $i = 0; $__LIST__ = $data["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/tag', array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
			<div class="common-hd clearfix">
				<h1 class="c-white l">热点事件</h1>
			</div>
			<div class="hot-banner-box clearfix">
				<div class="hot-banner-item l">
					<a href="#"><img src="__ROOT__/Resources/static/home/images/banner1.png"></a>
				</div>
				<div class="hot-banner-item l">
					<a href="#"><img src="__ROOT__/Resources/static/home/images/banner2.png"></a>
				</div>
				<div class="hot-banner-item l">
					<a href="#"><img src="__ROOT__/Resources/static/home/images/banner3.png"></a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 友情链接-->
	<div class="outwrap bai">
		<div class="wrap">
			<div class="common-hd clearfix bd-bm-1">
				<h1 class="c-black l">友情链接</h1>
			</div>
			<div class="friend-link">
				<ul>
					<?php if(is_array($data["links"])): $i = 0; $__LIST__ = $data["links"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["config_value"]); ?>" target="_blank"><?php echo ($vo["config_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--<li><a href="#">分局官网</a></li>-->
					<!--<li><a href="#">食堂官网</a></li>-->
					<!--<li><a href="#">上海公安网</a></li>-->
					<!--<li><a href="#">机场公安网</a></li>-->
				</ul>
			</div>
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