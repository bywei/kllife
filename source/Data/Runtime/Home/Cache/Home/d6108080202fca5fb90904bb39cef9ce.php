<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="baidu-site-verification" content="7JiPIVdZ6K" />
	<meta charset="UTF-8">
	<meta content="领袖户外" name="author"/>
	<?php if(strpos($_SERVER['HTTP_HOST'], '.kllife.com') !== FALSE): ?><meta name="robots" content="noindex,nofollow"/><?php endif; ?>	
	<!--特殊专题新疆标题关键字-->
	<?php if(C('MENU_CURRENT') == 'subject_xinjiang'): ?><title>新疆旅游的首选_领袖户外旅行网_好玩不贵的小团慢旅行_领袖户外官方网站</title>	
	    <meta content="新疆旅游的首选,领袖户外旅行网,好玩不贵的小团慢旅行,领袖户外官方网站" name="title"/>
	    <meta content="新疆旅游,新疆旅游攻略,新疆旅游费用,新疆旅游价格,新疆旅游景点大全,新疆驴友网,禾木驴友网,新疆驴友攻略,喀纳斯驴友网,新疆定制游" name="keywords"/>
	    <meta content="新疆旅游攻略，小团慢旅行,新疆自助游攻略，包括小团慢旅行,新疆热门景点、户外俱乐部、游记攻略、出行交通、餐饮等旅游信息，以及小团慢旅行,新疆驴友交流、驴友俱乐部信息。小团慢旅行,新疆旅游怎么订制。" name="description"/>
	<!--特殊专题额济纳标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_ejina'): ?>
		<title>额济纳旅游的首选__领袖户外旅行网__好玩不贵的小团慢旅行</title>
		<meta content="额济纳旅游的首选,领袖户外旅行网,好玩不贵的小团慢旅行" name="title"/>
	    <meta content="额济纳旅游,额济纳旅游攻略,额济纳旅游费用,额济纳旅游价格,额济纳胡杨林,额济纳旅游景点大全" name="keywords"/>
	    <meta content="额济纳旗，掉落在童话里的秋日，颠覆传统旅行方式，化腐朽为神奇的国庆精品线路。领袖户外：好玩不贵的小团慢旅行！,精品小团，享受一次恰到好处的慢旅行！在最美的风景中漫步、深呼吸，为不期而遇的惊艳停车，品味夕阳晨曦的美好，尽可能与美景相拥而眠，旅途中从陌生，变成朋友……" name="description"/>		
	<!--特殊专题丝绸之路标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_silk'): ?>
	    <meta content="青海湖旅游攻略,青海湖旅游价格,敦煌旅游景点,敦煌旅游价格,青海驴友线路,青海驴友攻略,茶卡盐湖门票多钱,茶卡盐湖什么时候去好玩" name="keywords"/>
	    <meta content="300度环青海湖旅行，长达三天湖边游玩时间，避开顶光去茶卡，这是丝绸之路线路中最好的体验。丝绸之路旅游去哪儿玩？领袖户外为您独家定制专属线路,从青海湖到敦煌莫高窟,从嘉峪关到祁连山....更多的西北旅游信息就来领袖户外旅行网。" name="description"/>
		<title>丝绸之路旅游线路推荐-青海驴友俱乐部-甘肃驴友俱乐部-领袖户外旅行网-好玩不贵的小团慢旅行-茶卡盐湖驴友俱乐部</title>	
	<!--特殊专题西北标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_xibei'): ?>
	    <meta content="西北旅游,西北旅游线路,西北摄影旅游,青海湖旅游,青海湖旅游线路,青海湖摄影旅游,额济纳旅游线路,额济纳摄影旅游,额济纳旅游,额济纳旅游线路,额济纳摄影旅游,甘肃旅游,甘肃旅游线路,甘肃摄影旅游" name="keywords"/>
	    <meta content="西北摄影旅游去哪儿玩？领袖户外为您独家定制专属线路,从青海湖到敦煌莫高窟,从嘉峪关到祁连山....更多的西北旅游信息就来路星河" name="description"/>
		<title>西北旅游-青海湖旅游-额济纳旅游-甘肃旅游-西北旅游线路推荐-领袖户外</title>
	<!--特殊专题川西标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_chuanxi'): ?>
	    <meta content="川西旅游,甘南旅游,川西甘南" name="keywords"/>
	    <meta content="川西甘南旅游推荐，色达甘南稻城亚丁，你无法拒绝的美景" name="description"/>
		<title>川西甘南-川西甘南大环线-川西甘南景点推荐-领袖户外旅游网</title>	
	<!--特殊专题brand标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_brand'): ?>
	    <meta content="领袖户外,发展历程,品牌故事,联系方式" name="keywords"/>
	    <meta content="领袖户外成立于2005年，致力于为客户提供小团慢旅行、摄影游、户外游以及定制游等旅游产品。领袖户外以“享受旅行，品味人生”为愿景，以“为用户提供参与感强体验度高的旅行”为使命，精心为游客提供深度旅行服务。" name="description"/>
		<title>领袖户外品牌故事-领袖户外发展历程-领袖户外联系方式-领袖户外旅行网-驴友网</title>	
	<!--通用标题关键字-->
	<?php elseif(empty($PageKeyword) == false): ?>
		<meta content="<?php echo ($PageKeyword["title"]); ?>" name="title"/>
		<meta content="<?php echo ($PageKeyword["keywords"]); ?>" name="keywords"/>
		<meta content="<?php echo ($PageKeyword["description"]); ?>" name="description"/>
		<title><?php echo ($PageKeyword["title"]); ?></title>
	<?php else: ?>
		<title><?php echo C('PAGE_TITLE');?>-领袖户外</title><?php endif; ?>
	<!-- css Reset -->
	<link rel="stylesheet" href="/source/Static/home/common/css/cssreset.css">
	<!-- 轮播样式 -->
	<link rel="stylesheet" href="/source/Static/home/common/css/slide.css">
	<!-- 公共样式 -->
	<link rel="stylesheet" href="/source/Static/home/common/css/common.css">
	<!-- 公共样式 -->
	<link rel="stylesheet" href="/source/Static/common/css/common.css">
	<!--图标-->
	<link type="image/x-icon" rel="shortcut icon" href="/source/Static/home/common/images/favicon.ico" />
	<!-- 引用jq -->
	<script src="/source/Static/home/common/js/jquery-1.11.3.min.js"></script>
	
	<!-- Imported toastr -->
	<script src="/source/Static/assets/js/toastr/toastr.min.js"></script>
	<script src="/source/Static/common/js/functions.js"></script>

	<!--[if lt IE 9]>
		<script>
			(function() {
				if (! 
					/*@cc_on!@*/
				0) return;
				var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
				var i= e.length;
				while (i--){
					document.createElement(e[i])
				} 
			})() ;
		</script>
    	<script src="../common/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="mp_video hidden_ctrl">
	</div>
	<header>
		<div class="nav01">
			<div class="nav-top">
				<div class="nav-top-left">
					<!--新增顶部左侧链接开始（17.08.02）-->
					<?php if(is_array($pcset_top_link)): $i = 0; $__LIST__ = array_slice($pcset_top_link,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$set_val): $mod = ($i % 2 );++$i; if(!empty($fk)): ?>&nbsp;|&nbsp;<?php endif; ?>
						<?php $fk = json_decode($set_val['value'], true); ?>
						<a href="<?php echo ($fk["url"]); ?>" target="_blank"><?php echo ($fk["text"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<div class="more">
						<div class="div1">| 更多</div>
						<div class="div2">
							<ul>
								<?php if(is_array($pcset_top_link)): $i = 0; $__LIST__ = array_slice($pcset_top_link,8,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$set_val): $mod = ($i % 2 );++$i; $fk = json_decode($set_val['value'], true); ?>
									<li><a href="<?php echo ($fk["url"]); ?>" target="_blank"><?php echo ($fk["text"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<!--新增顶部左侧链接结束-->
				</div>
				<div class="nav-top-right">
					<img src="/source/Static/home/common/images/login_header.png" alt=""></a>
					<?php if(empty($user) == true): ?><a href="<?php echo U('user/login');?>">登录</a> |
						<a href="<?php echo U('user/register');?>">注册</a>
					<?php else: ?>
						你好<a href="<?php echo U('user/info');?>" style="color: blue;"><?php echo ($user["show_name"]); ?></a>欢迎光临，
						<a href="javascript:;" style="color: blue;" class="user_logout">安全退出</a>！<?php endif; ?>
					<a href="<?php echo U('line/order');?>/type/center" target="_blank"> | 我的订单</a>
					<a href="<?php echo U('Subject/brand');?>" target="_blank"> | 关于我们</a>
					<a href="<?php echo U('service/center');?>" target="_blank"> | 服务中心</a>
					<img src="/source/Static/home/common/images/tel_header.png" alt="联系电话">
					<span>400-080-5860<!--<?php echo ($cs_tel); ?>--></span>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('.user_logout').click(function(){
				logoutShequ('<?php echo U("user/exit");?>');	
			});
		</script>
		<div class="nav02">
			<div class="nav-list">
				<a class="go-welcome" href="<?php echo U('index/welcome');?>"><img src="/source/Static/home/common/images/logo1.png" alt="领袖户外"></a>
				<!--logo图片加链接会导致样式混乱-->
				<!--<img src="/source/Static/home/common/brand/logo_header.png" alt="领袖户外">-->
				<ul>
					<?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i; if (is_array($menu) === false) { continue; } $jumpToLineList = false; switch($menu['item_desc']) { case '首页': $href=U('index/welcome'); break; case '跟拍游': $href=U('line/xiezhenlvxing'); break; case '私人定制': { $href=$pcset['team_link']; $target = '_blank'; }break; case '论坛': { $href = "http://shequ.kllife.com"; $target = '_blank'; }break; default: { $jumpToLineList = true; $href=U('line/list','cache=1'); } break; } ?>
						<li class="nav-list-top">
							<?php $nav = $href; if ($jumpToLineList === true) { $nav = $href.'/m0/'.$menu['id']; } ?>
							<a href="<?php echo ($nav); ?>" target="<?php echo ($target); ?>"><?php echo ($menu["item_desc"]); ?></a>
							<?php if(!empty($menu["child"])): ?><div>
								<?php if(is_array($menu["child"])): $i = 0; $__LIST__ = $menu["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><ul>
									<li>
										<?php $nav = $href; if (!empty($jumpToLineList)) { $nav = $href.'/m0/'.$menu['id'].'/m1/'.$c['id']; } ?>
										<a href="<?php echo ($nav); ?>" target="<?php echo ($target); ?>"><?php echo ($c["item_desc"]); ?></a>
									</li>
									<?php if(!empty($c["child"])): if(is_array($c["child"])): $i = 0; $__LIST__ = $c["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cc): $mod = ($i % 2 );++$i;?><li>
												<?php $nav = $href; if (!empty($jumpToLineList)) { $nav = $href.'/m0/'.$menu['id'].'/m1/'.$c['id'].'/m2/'.$cc['id']; } ?>
												<a href="<?php echo ($nav); ?>"  target="<?php echo ($target); ?>"><?php echo ($cc["item_desc"]); ?></a>
											</li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
								</ul><?php endforeach; endif; else: echo "" ;endif; ?>
							</div><?php endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="search-header" style="margin-right: 17px;">
					<img src="/source/Static/home/common/images/search_header.png" alt="">
					<input type="text" value="<?php echo ($searchval); ?>" placeholder="身未动 心已远..."/>
					<a href="javascript:;">搜索</a>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						// 定位首页菜单
						positionTopMenu();
					});
					
					// 首页菜单动态定位
					function positionTopMenu(){
						var rootObj = $('.nav02').find('.nav-list');
						var firstMenuLeft = $(rootObj).find('.nav-list-top:first').offset().left;
						var startLeft = $(rootObj).offset().left;
						var leftOffset = parseInt(firstMenuLeft)-parseInt(startLeft);
						
						$(rootObj).find('.nav-list-top').each(function(i,el){
							if ($(this).find('div').length > 0) {						
								var childLength = $(this).find('div').find('ul').length;
								var ulObj = $(this).find('div').find('ul:first');
								var childWidth = parseInt($(ulObj).css('margin-left')) + parseInt($(ulObj).width());
								var totalWidth = parseInt(childWidth) * parseInt(childLength) + 30;
								$(this).find('div').css('width', totalWidth);
								
								var menuOffset = parseInt($(rootObj).width())-parseInt(totalWidth);
								if (menuOffset > leftOffset) {
									menuOffset = leftOffset;
								}
								$(this).find('div').css('left',menuOffset);								
							}
						});
						
					}
					
					function topSearchLine() {
						var search_val = $('.search-header').find('input').val();
						$.post('<?php echo U("line/search");?>', {searchval:search_val}, function(data){
							if (data.jumpUrl != null) {
								location.href = data.jumpUrl;
							}
						});
					}
					// 绑定回车时间
					bindKeyUp($('.search-header').find('input'),topSearchLine);
					$('.search-header').find('a').click(function(){
						topSearchLine();
					});	
					
					//更多
					    $(".more .div1").on("mouseover",function(){
					        $(".more .div2").show()
					    })
					
					    $(".more").on("mouseleave",function(){
					         $(".more .div2").hide()
					    })
				</script>
			</div>
		</div>		
	</header>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>领袖户外官方网站 - 京杭大运河摄影大赛 - 领袖户外旅行网</title>
	<meta content="领袖户外、京杭，摄影，大赛，主题摄影，人像摄影，摄影创作" name="keywords"/>
    <meta content="" name="description"/>
	<link rel="stylesheet" href="/source/Static/home/css/photomatch.css">
</head>
<body>
	
	<div class="page">
		<!-- 回到顶部 -->
		<img class="back-top" src="images/top.jpg" alt="">



		<div class="banner" style="margin-top: 126px;">
			<img src="/source/Static/home/images/mssyds_img/banner.jpg" alt="">
			<a href="http://shequ.kllife.com/User/fabu.html" target="_blank">上传作品</a>
		</div>

		<div class="content">
			<!-- tabs -->
			<div class="tabs">

				<div class="tabs-list">
					<a href="javascript:;" class="checked" title="tab1">大赛简介</a>
					<a href="javascript:;" title="tab2">全部作品</a>
					<a href="javascript:;" title="tab3">热门作品</a>
					<a href="javascript:;" title="tab4">获奖公示</a>
				</div>

			</div>

			<div>
				<!-- 大赛简介 -->
				<div class="contest-profile" id="tab1">

					<!-- 引言 -->
					<div class="contest-details">
						<h2>— 引言</h2>
						<p style="margin-top: 34px;">满载历史的沧桑</p>
						<p>饱含岁月的艰辛</p>
						<p>蜿蜒而来，悄悄流淌</p>
						<p>没有喧嚣，没有誓言</p>
						<p>如飘逸的缎带连接南北</p>
						<p>似古老的赞歌唱响世界</p>
						<p>这便是大运河</p>
						<p style="margin-top: 34px;">东南形胜，三吴都会</p>
						<p>钱塘自古繁华</p>
						<p>而流淌千年的大运河最南端</p>
						<p>则是人间天堂杭州</p>
						<p style="margin-top: 34px;">千里桨声，千里灯影</p>
						<p>千里渔歌，千里花香</p>
						<p>关于运河你有怎样的印象</p>
					</div>
					<!-- 大赛时间 -->
					<div class="contest-time">
						<h2>— 大赛时间</h2>
						<img src="/source/Static/home/images/mssyds_img/time.jpg" alt="">
					</div>

					<!-- 奖项设置 -->
					<div class="awards">
						<h2>— 奖项设置</h2>
						<img src="/source/Static/home/images/mssyds_img/awards.jpg" alt="">

					</div>

					<!-- 投稿方式 -->
					<div class="contribution-method">
						<h2>— 投稿方式</h2>
						<p>登录账号点击 <a href="http://shequ.kllife.com/User/fabu.html" target="_blank" style="display: inline-block; border-radius: 3px; background-color: #545454; color: #fff; font-style: normal;">"上传作品"</a> 按钮发作品帖，关联“<span style="color: #f00;">京杭大运河</span>”，在线投稿。</p>
						<p style="margin-top: 15px;"><a href="http://shequ.kllife.com/Index/youjidetail.html?id=2819" target="_blank" style="padding: 3px 5px; background-color: #ffc92b; color: #333; border-radius: 10px;">点击查看摄影比赛参赛流程指引</a><a href="http://shequ.kllife.com/Index/youjidetail.html?id=2822
" target="_blank" style="margin-left: 15px; padding: 3px 5px; background-color: #ffc92b; color: #333; border-radius: 10px;">点击查看运河沿线历史遗迹介绍</a></p>

					</div>

					<!-- 评委会 -->
					<div class="jury">
						<h2>— 评委会</h2>
						<img src="/source/Static/home/images/mssyds_img/jury.jpg" alt="">
					</div>

					<!-- 评选方式 -->
					<div class="selection-method">
						<h2>— 评选方式</h2>
						<p style="margin-bottom: 10px;">
							1、根据网络投票数由高至低选出若干名入围者；
						</p>
						<p>
							2、由大赛评委会在入围者中评选出最终等级奖。
						</p>
					</div>

					<!-- 参赛须知 -->
					<div class="entry-information">
						<h2>— 参赛须知</h2>
						<p>1、参赛资格：所有摄影爱好者；</p>
						<p>2、作品要求</p>
						<p>①作品应为表现运河杭州段的人文风光，特别是运河沿线的历史遗迹以及春节、元宵节期间的人文纪实，需具有较强的感染力、吸引力。</p>
						<p>②作品必须为作者原创作品，如发生侵权等行为，相应责任由参赛者承担。</p>
						<p>③作品以数字文件投稿，不接收纸质照片。组照以组为一个获奖单位，每组不超过10张；</p>
						<p>④本次活动相关组织对所有获奖作品享有使用权（包括网络展示、媒体发布、编辑成册、举办展览等），不再支付稿费。</p>
						<p>⑤本次活动不收参赛费、不退稿，获奖作品须提供成片及相机原始数码文件。凡不提供相机原始数码文件的，视为自动放弃获奖资格。</p>
						<p>3、温馨提醒</p>
						<p style="color: #ff7200;">①运河杭州段沿线人文风光题材，例如塘栖古镇、西兴古镇、桥西历史街区、小河直街历史文化街区、大兜路历史街区、富义仓遗址公园等历史遗迹，特别是春节、元宵节期间举行的节庆活动。</p>
						<p style="color: #ff7200;">②运河沿线一带春节、元宵节期间民俗人文纪实类题材和历史遗迹、航拍等有较大入选优势，欢迎大家踊跃投稿此类作品。</p>
						<p>4、凡投稿的作者均视为同意并遵守以上各条规定，凡不符合参赛要求的，一经发现将一律取消作品参评资格。</p>
						<p>5、本活动最终解释权归领袖户外所有。</p>
					</div>

					<div class="erweima">
						<p>
							<img src="/source/Static/home/images/mssyds_img/erweima.png" alt="">
							<span style="font-size: 18px; padding-top: 10px;">领袖户外杭州站微信公众号</span>
						</p>
					</div>
				</div>

				<!-- 全部作品 -->
				<div class="all-works" id="tab2">

					<ul>

					</ul>

				</div>
				<!-- 热门作品 -->
				<div class="hot-works" id="tab3">
					<ul>

					</ul>
				</div>
				<!-- 获奖公示 -->
				<div class="award-publicity" id="tab4">
					比赛正在火热进行中，暂无获奖公示哦！
				</div>

			</div>
		</div>
	</div>

	<!--图片延迟加载-->
	<script type="text/javascript" src="/source/Static/qinglvpai/common/js/jquery.lazyload.js"></script>
	<script type="text/javascript">
        jQuery(document).ready(
            function($){
                $("img").lazyload({
                    placeholder : "/source/Static/qinglvpai/common/js/grey.gif",
                    effect      : "fadeIn",
                    threshold : 100,
                    failure_limit : 10
                });
            });
	</script>
	<script>

	function likeArc(id){
		$.ajax({
				type:"post",
				url:"http://shequ.kllife.com/api/Likes/",
				async:true,
				dataType: "json",
				data:{"id":id},
				success:function(data){
					if(data.sta==1){
						$('#'+id+'_like').removeClass('zan');
						$('#'+id+'_like').addClass('zanguo');
						$('#'+id+'_like').next().html(parseInt($('#'+id+'_like').next().html()) + 1);
					}
				}

		});

	}

	$.ajax({
		type:"post",
		url:"http://shequ.kllife.com/api/GetArcList/",
		async:true,
		dataType: "json",
		data:{"address":23,"row":12,"rownum":0},
		success:function(data){
			if(data.length>0){
				var Html = '';
				for(var i=0;i<data.length;i++){
					Html += '<li>'
							+'<img src="'+data[i]["fengmiantp"]+'"  alt="'+data[i]["youjiname"]+'">'
							+'<div class="works-details">'
								+'<a href="'+data[i]["userurl"]+'" class="whose" target="_blank">'
									+'<img src="'+data[i]["touxiang"]+'" target="_blank">'
								+'</a>'
								+'<a href="'+data[i]["userurl"]+'" class="name" target="_blank">'+data[i]["writer"]+'</a>'
								+'<a href="'+data[i]["arcurl"]+'" class="title" target="_blank" title="'+data[i]["youjiname"]+'">'+data[i]["youjiname"]+'</a>'
								+'<p>'
									+'<a href="javascript:;" class="zan" id="'+data[i]["id"]+'_like" onclick="likeArc('+data[i]["id"]+')"></a>'
									+'<span>'+data[i]["dianzan"]+'</span>'
								+'</p>'
							+'</div>'
							+'<a href="'+data[i]["arcurl"]+'" target="_blank" title="'+data[i]["youjiname"]+'"></a>'
						+'</li>'
				}
				$('.all-works > ul').append(Html);
			}
		}
	});


	$.ajax({
		type:"post",
		url:"http://shequ.kllife.com/api/GetArcList/",
		async:true,
		dataType: "json",
		data:{"address":23,"row":12,"rownum":0,"orderby":"dianzan"},
		success:function(data){
			if(data.length>0){
				var Html = '';
				for(var i=0;i<data.length;i++){
					Html += '<li>'
							+'<img src="'+data[i]["fengmiantp"]+'"  alt="'+data[i]["youjiname"]+'">'
							+'<div class="works-details">'
								+'<a href="'+data[i]["userurl"]+'" class="whose" target="_blank">'
									+'<img src="'+data[i]["touxiang"]+'" target="_blank">'
								+'</a>'
								+'<a href="'+data[i]["userurl"]+'" class="name" target="_blank">'+data[i]["writer"]+'</a>'
								+'<a href="'+data[i]["arcurl"]+'" class="title" target="_blank" title="'+data[i]["youjiname"]+'">'+data[i]["youjiname"]+'</a>'
								+'<p>'
									+'<a href="javascript:;" class="zan" id="'+data[i]["id"]+'_like" onclick="likeArc('+data[i]["id"]+')"></a>'
									+'<span>'+data[i]["dianzan"]+'</span>'
								+'</p>'
							+'</div>'
							+'<a href="'+data[i]["arcurl"]+'" target="_blank" title="'+data[i]["youjiname"]+'"></a>'
						+'</li>'
				}
				$('.hot-works > ul').append(Html);
			}
		}
	});



		$(function(){

			var row = 8;
			var rownum = 13;
			var isget = false;
			var isgethot = false;
			//tabs
			$('.tabs-list a').click(
				function () {
					$(this).siblings().removeClass('checked');
					$(this).addClass('checked');
					var myId = $(this).attr('title');
					$('#' + myId).siblings().hide();
					$('#' + myId).show();

					//全部作品
					if($('.all-works').is(':visible')){
						$(window).scroll(function(){
						    var winH = $(window).height(),
						        domH = $(document).height(),
						        scrollTop = $(document).scrollTop();
						    //距离底部只有50px
						    if(domH - winH - scrollTop < 50){
						    	if (isget == false){
						    		isget = true;
						    		$.ajax({
										type:"post",
										url:"http://shequ.kllife.com/api/GetArcList/",
										async:true,
										dataType: "json",
										data:{"address":23,"row":row,"rownum":rownum},
										success:function(data){
											if(data.length>0){
												var Html = '';
												for(var i=0;i<data.length;i++){
													Html += '<li>'
														+'<img src="'+data[i]["fengmiantp"]+'" alt="'+data[i]["youjiname"]+'">'
														+'<div class="works-details">'
															+'<a href="'+data[i]["userurl"]+'" class="whose" target="_blank">'
																+'<img src="'+data[i]["touxiang"]+'" target="_blank">'
															+'</a>'
															+'<a href="'+data[i]["userurl"]+'" class="name" target="_blank">'+data[i]["writer"]+'</a>'
															+'<a href="'+data[i]["arcurl"]+'" class="title" target="_blank" title="'+data[i]["youjiname"]+'">'+data[i]["youjiname"]+'</a>'
															+'<p>'
																+'<a href="javascript:;" class="zan" id="'+data[i]["id"]+'_like" onclick="likeArc('+data[i]["id"]+')"></a>'
																+'<span>'+data[i]["dianzan"]+'</span>'
															+'</p>'
														+'</div>'
														+'<a href="'+data[i]["arcurl"]+'" target="_blank" title="'+data[i]["youjiname"]+'"></a>'
													+'</li>'
												}
												$('.all-works > ul').append(Html);
											}
											isget = false;
											rownum = rownum+row;
										}
									});
						    	}

						    }
						})
					}
				    //热门作品
					if($('.hot-works').is(':visible')){
						$(window).scroll(function(){
						    var winH = $(window).height(),
						        domH = $(document).height(),
						        scrollTop = $(document).scrollTop();
						    //距离底部只有50px
						    if(domH - winH - scrollTop < 50){
						    	if (isgethot == false){
						    		isgethot = true;
						    		$.ajax({
										type:"post",
										url:"http://shequ.kllife.com/api/GetArcList/",
										async:true,
										dataType: "json",
										data:{"address":23,"row":row,"rownum":rownum,"orderby":"dianzan"},
										success:function(data){
											if(data.length>0){
												var Html = '';
												for(var i=0;i<data.length;i++){
													Html += '<li>'
														+'<img src="'+data[i]["fengmiantp"]+'" alt="'+data[i]["youjiname"]+'">'
														+'<div class="works-details">'
															+'<a href="'+data[i]["userurl"]+'" class="whose" target="_blank">'
																+'<img src="'+data[i]["touxiang"]+'" target="_blank">'
															+'</a>'
															+'<a href="'+data[i]["userurl"]+'" class="name" target="_blank">'+data[i]["writer"]+'</a>'
															+'<a href="'+data[i]["arcurl"]+'" class="title" target="_blank" title="'+data[i]["youjiname"]+'">'+data[i]["youjiname"]+'</a>'
															+'<p>'
																+'<a href="javascript:;" class="zan" id="'+data[i]["id"]+'_like" onclick="likeArc('+data[i]["id"]+')"></a>'
																+'<span>'+data[i]["dianzan"]+'</span>'
															+'</p>'
														+'</div>'
														+'<a href="'+data[i]["arcurl"]+'" target="_blank" title="'+data[i]["youjiname"]+'"></a>'
													+'</li>'
												}
												$('.hot-works > ul').append(Html); 
											}
											isgethot = false;
											rownum = rownum+row;
										}
									});
						    	}          	 
						    }             
						})
					}
				}
			);


			//回到顶部
			$('.back-top').click(
				function () {
					$('body,html').animate({ scrollTop: 0 }, 500);
				}
			);
			
		});

	</script>
</body>
</html>




	<!-- 右侧侧边栏 -->
	<aside>
		<div class="join-us" style="margin-top:50px;">
			<a href="<?php echo U('subject/brand');?>"></a>
		</div>
		<a class="aside_hot" href="<?php echo U('service/center');?>" target="_blank">
			<i></i>
			<div class="aside_show aside_show_hot">
				<p>帮助中心</p>
			</div>
		</a>
		<a class="aside_mine" href="<?php echo U('user/info');?>" target="_blank">
			<i></i>
			<div class="aside_show aside_show_mine">
				<p>个人中心</p>
			</div>
		</a>
		<a class="aside_order" href="<?php echo U('line/order');?>/type/center" target="_blank">
			<i></i>
			<div class="aside_show aside_show_order">
				<p>订单中心</p>
			</div>
		</a>
		<a class="aside_weixin" href="javascript:;">
			<i></i>
			<div class="aside_show aside_show_weixin">
				<img src="/source/Static/home/common/images/aside_erweima.png" alt="二维码">
			</div>
		</a>
		<a class="aside_tel" href="javascript:;">
			<i></i>
			<div class="aside_show aside_show_tel">
				<p>400-080-5860</p>
			</div>
		</a>
		<a class="aside_qq" onclick="openZoosUrl('chatwin');">
			<i></i>
			<div class="aside_show aside_show_qq">
				<p>在线咨询</p>
			</div>
		</a>
		<a class="aside_top" href="#">
			<i></i>
		</a>
	</aside>

	<footer>
		<div class="footer-content">
			<div class="footer-content-left">
				<?php if(is_array($question_type)): $i = 0; $__LIST__ = $question_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qt): $mod = ($i % 2 );++$i; if ($key === 'config_update_time') { continue; } ?>
					<ul class="<?php echo ($qt["class"]); ?>">
						<li><?php echo ($qt["type_desc"]); ?></li>
						<?php if(is_array($qt["questions"])): $i = 0; $__LIST__ = $qt["questions"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$quest): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('service/question');?>/id/<?php echo ($quest["id"]); ?>"><?php echo ($quest["content"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="footer-content-right">
				<img src="/source/Static/home/common/images/footer_erweima.png" alt="">
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		<div class="footer-bottom-content">
			<p>
				友情链接：
				<?php if(is_array($pcset)): $i = 0; $__LIST__ = $pcset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$set_val): $mod = ($i % 2 );++$i; if(stripos($key, 'pc_friend_link') === 0): if(!empty($fk)): ?>&nbsp;|&nbsp;<?php endif; ?>
						<?php $fk = json_decode($set_val, true); ?>
						<a href="<?php echo ($fk["url"]); ?>" target="_blank" this.onclick();><?php echo ($fk["text"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</p>
			<p class="zhutilvyou">
				主题旅游：
					<?php if(is_array($pcset_top_link)): $i = 0; $__LIST__ = $pcset_top_link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$set_val): $mod = ($i % 2 );++$i; if(!empty($bot_fk)): ?>&nbsp;|&nbsp;<?php endif; ?>
						<?php $bot_fk = json_decode($set_val['value'], true); ?>
						<a href="<?php echo ($bot_fk["url"]); ?>" target="_blank"><?php echo ($bot_fk["text"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</p>
			<span style="margin-top: 20px;">Copyright © 2006-2014 kllife.com | 陕西浪客国际旅行社有限责任公司版权所有</span><em>公司地址：陕西省西安市雁塔区太白南路上上国际</em>
			<br>
			<span>领袖户外经营许可证号：L-SNX00306 陕ICP备14011728号-1</span>
            <?php echo ($pcset["statistic_script"]); ?>
		</div>
	</div>
	
	<!-- Imported toastr -->
	<script src="/source/Static/assets/js/toastr/toastr.min.js"></script>
	<script src="/source/Static/common/js/functions.js"></script>
	<!-- 日期 -->
	<script src="/source/Static/home/common/js/jQuery-jcDate.js"></script>
	<!-- 轮播 -->
	<script src="/source/Static/home/js/unslider.min.js"></script>
	<!-- 自绑定 -->
	<script src="/source/Static/home/common/js/showAndHide.js"></script>
	<!-- 头部js -->
	<script src="/source/Static/home/common/js/headroom.js"></script>
	<!-- 侧边栏&头部 -->
	<script src="/source/Static/home/common/js/aside-header.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>