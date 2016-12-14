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

	
	<!-- 筛选器-->
	<div class="outwrap">
		<div class="wrap">

			<div class="common-filter-box">
				<div class="filter-nav-row bd-bm-1 clearfix">
					<span class="hd l">课程分类:</span>
					<div class="bd">
						<ul class="">

                            <li class="filter-nav-item on">
                                <a href="<?php echo U('Video/videoList', array('cate_id'=>0,'tag_id'=>0));?>">全部课程</a>
                            </li>
							<?php if(is_array($data["cate"])): $i = 0; $__LIST__ = $data["cate"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="filter-nav-item">
                                <a href="<?php echo U('Video/videoList');?>?cate_id=<?php echo ($vo['id']); ?>&tag_id=<?php echo ($_GET['tag_id']); ?>"><?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                            <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                            <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                            <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                            <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                            <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                        </ul>
					</div>
				</div>

				<div class="filter-nav-row clearfix border-bottom-none">
					<span class="hd l">标签:</span>
					<div class="bd">
						<ul class="">
                            <li class="filter-nav-item on">
                                <a href="<?php echo U('Video/videoList', array('tag_id'=>0,'cate_id'=>$Think['get']['cate_id']));?>">全部标签</a>
                            </li>
							<?php if(is_array($data["tag"])): $i = 0; $__LIST__ = $data["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="filter-nav-item">
									<a href="<?php echo U('Video/videoList');?>?tag_id=<?php echo ($vo['id']); ?>&cate_id=<?php echo ($_GET['cate_id']); ?>"><?php echo ($vo["name"]); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                             <!--<li class="filter-nav-item">-->
                                <!--<a href="#">全部课程</a>-->
                            <!--</li>-->
                        </ul>
					</div>
				</div>
					

				</div>
			</div>
		</div>
	</div>
	<!-- 视频列表-->
	<div class="out-wrap bg-gray">
		<div class="wrap">
			<div class="filter-tool-bar clearfix">
				<div class="tool-left l">
					<a class="active" href="#">最新</a>
					<a href="#">最热</a>
				</div>
			</div>
			<div class="filter-list-box">
				<div class="filter-list clearfix">
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
					<a class="mv-link" href="#">
						<div class="mv-link-img">
							<img src="__ROOT__/Resources/static/home/images/img1.png">
						</div>
						<h4>媒体：新战车被扣或是苦肉计 借机退出星光计划</h4>
						<div class="mv-link-bottom">
							<span class="score l">评分9.6</span>
							<span class="number	r">1898人学习</span>
						</div>
					</a>
				</div>
				<div class="page">
					<span class="disabled_page">首页</span>
					<span class="disabled_page">上一页</span>
					<a href="javascript:void(0)" class="active text-page-tag">1</a>
					<a class="text-page-tag" href="#">2</a>
					<a class="text-page-tag" href="#">3</a>
					<a class="text-page-tag" href="#">4</a>
					<a class="text-page-tag" href="#">5</a>
					<a class="text-page-tag" href="#">6</a>
					<a class="text-page-tag" href="#">7</a>
					<a href="#">下一页</a>
					<a href="#">尾页</a>
				</div>
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
<script>

	$('.header-nav li').eq(1).addClass('on');
</script>