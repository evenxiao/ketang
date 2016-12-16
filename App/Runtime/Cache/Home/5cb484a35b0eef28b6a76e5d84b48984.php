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
<script type="text/javascript" src="__PUBLIC__/CKplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
	
	<div id="main">
		<div class="mv-top-box">
			<div class="mv-kv-hd">
				<div class="wrap">
					<h1><?php echo ($data["title"]); ?></h1>
					<div class="mv-kv-info">
						<span><?php echo ($data["create_time"]); ?></span>
						<span>作者:<?php echo ($data["author"]); ?></span>
						<span>评分:<?php echo ($data["score"]); ?></span>
						<span><?php echo ($data["score_times"]); ?>人已读</span>
					</div>
				</div>
			</div>
			<div class="mv-kv-bd">
				<div class="mv-kv-content">
					<div id="kv-main"></div>
			
				<script type="text/javascript">
				    var flashvars={
				        f:'__ROOT__/Uploads/video/1.mp4',
						s:'0',
				        c:0,
				        v:40
				    };
				    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
				    var video=['__ROOT__/Uploads/video/1.mp4->video/mp4'];
				    CKobject.embed('__ROOT__/Public/CKplayer/ckplayer/ckplayer.swf','kv-main','ckplayer_kv-main','100%','100%',false,flashvars,video,params);
				</script>
			</div>
		</div>
		<div class="wrap clearfix">
			<div class="mv-left-main l">
				<!-- 视频简介-->
				<div class="mv-brief-box">
					<div class="mv-brief-hd">
						<h1>视频简介</h1>
					</div>
					<div class="crticle-bd">
						<?php echo (html_entity_decode($data["content"])); ?>
						<!--<p>腾讯体育12月5日讯 98-92，魔术客场战胜活塞，终结了对手的三连胜。魔术方面，伊巴卡表现全面，贡献21分7篮板4助攻3抢断4盖帽，武切维奇16分8篮板2盖帽，格林14分5篮板3助攻。活塞方面，雷吉-杰克逊伤愈复出，迎来赛季首秀，拿下18分4助攻，马库斯-莫里斯21分5篮板2抢断，德拉蒙德10分10篮板3助攻3抢断2盖帽。</p>-->
						<!--<p>伊巴卡全场砍下21分7篮板4助攻3抢断4盖帽的全面数据，内线两次封盖庄神的强攻，成为场上最大的亮点。经过一段时间的适应和调整，伊巴卡已经完全融入魔术的战术体系，成为全队发挥最稳定的那个人。</p>-->
						<!--<p>雷吉-杰克逊伤愈复出，在主场迎来赛季首秀。比赛一开始，杰克逊就在外线命中三分，为活塞先拔头筹。戈登投中两分还以颜色。双方陷入拉锯战，魔术方面，伊巴卡表现出色，三分球和内线进攻都有斩获；活塞方面，莫里斯成为首节手感最热的那个人，先后投进4个三分球，单节拿下14分。首节战罢，活塞27-23领先魔术。</p>-->
						<!--<p>次节，两边派上替补，杰夫-格林外线命中三分，将分差缩小到1分。贝恩斯篮下命中，史密斯高难度反手上篮得手，伊巴卡中投得分，比永博强攻命中。双方这节手感都不错，你来我往，比分多次战平。半场结束前2分50秒，莫里斯中投命中，双方战成48平，不过魔术打出一波10-2的高潮，以58-50领先活塞结束上半场。</p>-->
					<!-- -->
					</div>
				</div>




				<!-- 下载模块-->
				<div class="download-box">
					<div class="common-hd bd-bm-1">
						<h1>附件下载</h1>
					</div>
					<ul class="download-list clearfix">
						<li><a href="#"><em class="zip-icon"></em>机场公安基本条例<em class="download-icon">［点击下载］</em></a></li>
						<li><a href="#"><em class="zip-icon"></em>2016年最新规定什么什么的<em class="download-icon">［点击下载］</em></a></li>
					<ul>
				</div>
				<!-- 评论模块-->
				<div class="common-comment clearfix">
					<div class="common-hd">
						<h1>发表评论</h1>
						<textarea class="comment-text" placeholder="输入您的评论" title="" name="" id="comment_content"></textarea>
							<!-- 评分插件 -->
						<div class="stars-box l">
					        <div id="stars"></div>
					        您为本次学习打<div id="stars-number"></div>分
					    </div>
						<!-- 评分插件 end-->
						<div class="comment-buttom r">
							<button class="comment-submit" onclick="sendComment(<?php echo ($_GET['id']); ?>);">发布</button>
						</div>
					</div>
				</div>
				<div class="comment-list-box">
					<div class="common-hd bd-bm-1">
						<h2>共<?php echo ($count); ?>条评论</h2>
					</div>
					<div class="comment-list-item">
						<div class="comment-user clearfix">
							<span class="l">游客2489发布了评论</span>
							<span class="r">2016-11-11</span>
						</div>
						<div class="comment-user-content">有没有搞错啊，刚出的还没学完又出新的。</div>
					</div>

					<div class="comment-list-item">
						<div class="comment-user clearfix">
							<span class="l">游客2489发布了评论</span>
							<span class="r">2016-11-11</span>
						</div>
						<div class="comment-user-content">有没有搞错啊，刚出的还没学完又出新的。</div>
					</div>

					<div class="comment-list-item">
						<div class="comment-user clearfix">
							<span class="l">游客2489发布了评论</span>
							<span class="r">2016-11-11</span>
						</div>
						<div class="comment-user-content">有没有搞错啊，刚出的还没学完又出新的。</div>
					</div>

					<div class="comment-list-item">
						<div class="comment-user clearfix">
							<span class="l">游客2489发布了评论</span>
							<span class="r">2016-11-11</span>
						</div>
						<div class="comment-user-content">有没有搞错啊，刚出的还没学完又出新的。</div>
					</div>

					<div class="page">
						<span class="disabled_page">首页</span>
						<span class="disabled_page">上一页</span>
						<!--<a href="javascript:void(0)" class="active text-page-tag">1</a>-->
						<?php $__FOR_START_3623__=1;$__FOR_END_3623__=$count_page;for($i=$__FOR_START_3623__;$i < $__FOR_END_3623__;$i+=1){ ?><a class="text-page-tag" href="javascript:;" onclick="ajaxPage(<?php echo ($i); ?>,this);"><?php echo ($i); ?></a><?php } ?>
						<!--<a class="text-page-tag" href="#">3</a>-->
						<!--<a class="text-page-tag" href="#">4</a>-->
						<!--<a class="text-page-tag" href="#">5</a>-->
						<!--<a class="text-page-tag" href="#">6</a>-->
						<!--<a class="text-page-tag" href="#">7</a>-->
						<a href="#">下一页</a>
						<a href="#">尾页</a>
					</div>
				</div>
			</div>



						<div class="common-silder r">
				<div class="common-rank">
					<div class="common-hd">
						<h1 class="c-black">视频点击排行榜</h1>
					</div>
					<div class="common-rank-list">
						
		<ul>
			<?php if(is_array($bang["bang_video"])): $i = 0; $__LIST__ = $bang["bang_video"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><em class="no<?php echo ($key+1); ?>"><?php echo ($key+1); ?></em><a href="<?php echo U('Video/view',array('id'=>$vo['id']));?>" title=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>
					</div>
				</div>

			    <div class="common-label">
	<div class="common-hd">
		<h1 class="c-black">定位标签</h1>
		<a class="common-more" target="_blank" href="<?php echo U('Index/tag');?>">更多>></a>
	</div>
	<div class="common-label-list">
		<ul>

			<?php if(is_array($tag["list"])): $i = 0; $__LIST__ = $tag["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/tag', array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<li><a href="">战前准备</a></li>-->
			<!--<li><a href="">安保</a></li>-->
			<!--<li><a href="">个人报告</a></li>-->
			<!--<li><a href="">最美的太阳</a></li>-->
			<!--<li><a href="">飞的更高</a></li>-->
			<!--<li><a href="">机场安保</a></li>-->
			<!--<li><a href="">战前准备</a></li>-->
			<!--<li><a href="">安保</a></li>-->
			<!--<li><a href="">机场安保</a></li>-->
			<!--<li><a href="">战前准备</a></li>-->
			<!--<li><a href="">安保</a></li>-->
		</ul>
	</div>
</div>
				<!--<div class="common-label">-->
					<!--<div class="common-hd">-->
						<!--<h1 class="c-black">定位标签</h1>-->
						<!--<a class="common-more">更多>></a>-->
					<!--</div>-->
					<!--<div class="common-label-list">-->
						<!--<ul>-->
							<!--<li><a href="">机场安保</a></li>-->
							<!--<li><a href="">战前准备</a></li>-->
							<!--<li><a href="">安保</a></li>-->
							<!--<li><a href="">个人报告</a></li>-->
							<!--<li><a href="">最美的太阳</a></li>-->
							<!--<li><a href="">飞的更高</a></li>-->
							<!--<li><a href="">机场安保</a></li>-->
							<!--<li><a href="">战前准备</a></li>-->
							<!--<li><a href="">安保</a></li>-->
							<!--<li><a href="">机场安保</a></li>-->
							<!--<li><a href="">战前准备</a></li>-->
							<!--<li><a href="">安保</a></li>-->
						<!--</ul>-->
					<!--</div>-->
				<!--</div>-->
				
				<div class="common-hot">
					<div class="common-hd">
						<h1 class="c-black">热点事件</h1>
					</div>
					<div class="common-hot-list">
						<div class="common-hot-item">
							<a href="#"><img src="__ROOT__/Resources/static/home/images/banner1.png" alt="" /></a>
						</div>
						<div class="common-hot-item">
							<a href="#"><img src="__ROOT__/Resources/static/home/images/banner2.png" alt="" /></a>
						</div>
						<div class="common-hot-item">
							<a href="#"><img src="__ROOT__/Resources/static/home/images/banner3.png" alt="" /></a>
						</div>
					</div>
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
<!-- 星星打分插件 -->
<script type="text/javascript">
	$('.header-nav li').eq(1).addClass('on');

 	$.fn.raty.defaults.path = '__ROOT__/Resources/static/home/images';

	var msg = '';
      $('#stars').raty({

      	score: 5,
		//halfShow: false,
      	width: 150,

        cancelOff : 'cancel-off-big.png',

        cancelOn  : 'cancel-on-big.png',

        size      : 24,

        starHalf  : 'star-half-big.png',

        starOff   : 'star-off-big.png',

        starOn    : 'star-on-big.png',

        target    : '#stars-number',

        targetKeep: true,

        precision : true,
		click:function(score, evt){
			setScore(score);
//			var id = '<?php echo ($_GET['id']); ?>';
//
//			if(id){
//				$.ajax({
//					url:'<?php echo U("Base/setScore");?>',
//					data:{id:id,score:score},
//					type:'post',
//					dataType:'json',
//					//async:false,
//					success:function(_data){
//						console.log(_data);
//						msg = _data.message;
//						if(_data.status == 1){
//							console.log(_data);
//							alert('评分成功');
//							//$('#stars').raty({ readOnly: true, score: score });
//						}else{
//							alert('评分失败');
//						}
//					}
//
//				});
//				alert(msg);
//			}
		}

      });

	function setScore(score){
		var id = '<?php echo ($_GET['id']); ?>';

		if(id){
			$.ajax({
				url:'<?php echo U("Base/setScore");?>',
				data:{id:id,score:score},
				type:'post',
				dataType:'json',
				async:false,
				success:function(_data){
					if(_data.status == 1){
						//console.log(_data);
						alert(_data.message);
						//$('#stars').raty({ readOnly: true, score: score });
					}else{
						alert(_data.message);
					}
				}

			});
		}
	}

	function ajaxPage(page, obj){
		$(obj).addClass('active').siblings('a').removeClass('active');
	}

	function sendComment(id){
		var comment_content = $.trim($('#comment_content').val());
		if(comment_content == ''){
			alert('请输入评论');
			return false;
		}
		if(id){
			console.log(id);
			$.ajax({
				url:'<?php echo U("Base/sendComment");?>',
				data:{id:id, content:comment_content},
				type:'post',
				dataType:'json',
				async:false,
				success:function(_data){
					if(_data.status == 1){
						//console.log(_data);
						alert(_data.message);
						window.location.reload();
					}else{
						alert(_data.message);
						return false;
					}
				}

			});
		}
	}

</script>