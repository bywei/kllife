<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="baidu-site-verification" content="7JiPIVdZ6K" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- 优先使用 IE 最新版本和 Chrome -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- 1:1显示 -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- 忽略页面中的数字识别为电话号码和邮箱 -->
	<meta name="format-detection" content="telephone=no,email=no" />
	<!-- 允许全屏浏览 ios -->
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<!-- 启用360浏览器的极速模式(webkit) -->
    <meta name="renderer" content="webkit">
    <!-- 避免IE使用兼容模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 不让百度转码 -->
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <meta name="HandheldFriendly" content="true">
    <!-- 微软的老式浏览器 -->
    <meta name="MobileOptimized" content="320">
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="portrait">
    <!-- QQ强制竖屏 -->
    <meta name="x5-orientation" content="portrait">
	<!-- windows phone 点击无高光 -->
    <meta name="msapplication-tap-highlight" content="no">    
	<meta content="领袖户外" name="author"/>
	<?php if(strpos($_SERVER['HTTP_HOST'], '.kllife.com') !== FALSE): ?><meta name="robots" content="noindex,nofollow"/><?php endif; ?>
	<!--分销标题关键字-->
	<?php if(empty($duid) == false): if(C('MENU_CURRENT') == 'line_content'): ?><title><?php echo ($line["title"]); ?>-<?php echo ($line["subheading"]); ?></title>
		<?php else: ?>
			<title><?php echo ($fxset["shop_title"]["data"]["value"]); ?></title><?php endif; ?>
	<!--特殊专题额济纳标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_ejina'): ?>
		<title>额济纳旅游的首选__领袖户外旅行网__好玩不贵的小团慢旅行</title>
		<meta content="额济纳旅游的首选,领袖户外旅行网,好玩不贵的小团慢旅行" name="title"/>
	    <meta content="额济纳旅游,额济纳旅游攻略,额济纳旅游费用,额济纳旅游价格,额济纳胡杨林,额济纳旅游景点大全" name="keywords"/>
	    <meta content="额济纳旗，掉落在童话里的秋日，颠覆传统旅行方式，化腐朽为神奇的国庆精品线路。领袖户外：好玩不贵的小团慢旅行！,精品小团，享受一次恰到好处的慢旅行！在最美的风景中漫步、深呼吸，为不期而遇的惊艳停车，品味夕阳晨曦的美好，尽可能与美景相拥而眠，旅途中从陌生，变成朋友……" name="description"/>	
	<!--特殊专题新疆标题关键字-->
	<?php elseif(C('MENU_CURRENT') == 'subject_xinjiang'): ?>
	    <title>新疆旅游的首选_领袖户外旅行网_好玩不贵的小团慢旅行_领袖户外官方网站</title>	
	    <meta content="新疆旅游的首选,领袖户外旅行网,好玩不贵的小团慢旅行,领袖户外官方网站" name="title"/>
	    <meta content="新疆旅游,新疆旅游攻略,新疆旅游费用,新疆旅游价格,新疆旅游景点大全,新疆驴友网,禾木驴友网,新疆驴友攻略,喀纳斯驴友网,新疆定制游" name="keywords"/>
	    <meta content="新疆旅游攻略，小团慢旅行,新疆自助游攻略，包括小团慢旅行,新疆热门景点、户外俱乐部、游记攻略、出行交通、餐饮等旅游信息，以及小团慢旅行,新疆驴友交流、驴友俱乐部信息。小团慢旅行,新疆旅游怎么订制。" name="description"/>	
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
	
	<link rel="stylesheet" href="/source/Static/phone/common/css/light7.css">
	<link rel="stylesheet" href="/source/Static/common/css/common.css">
	<!-- Imported toastr -->
	<script src="/source/Static/assets/js/toastr/toastr.min.js"></script>
	<script src="/source/Static/common/js/jquery-1.11.1.min.js"></script>
	<script src="/source/Static/common/js/functions.js"></script>

	<!-- jq -->
	<!--<script src="/source/Static/phone/common/js/jquery.min.js"></script>-->
	<style>
		.black-mark { display: none; position: fixed; top:0; left:0; width: 100%; height: 100%; text-align: center; color:#ececec; background: rgba(0,0,0,.5); z-index:3000; }
		.black-mark p { margin-top: 230px; color: #fff; text-align: center; }
	</style>
	<script>			
		function ShowMark(){
			$('.black-mark').show();
		};
		function HideMark(){
			$('.black-mark').hide();
		};		
	</script>
</head>
<body>
	<div class="black-mark">
		<p>稍等一会儿...</p>
	</div>
<div class="page">
	<!-- swiper -->
	<link rel="stylesheet" href="/source/Static/phone/common/css/swiper-3.3.1.min.css">
	<!-- mycss -->
	<link rel="stylesheet" href="/source/Static/phone/css/welcome.css">
	<!--小团慢css-->
	<link rel="stylesheet" href="/source/Static/phone/css/slow-travel.css">
		    <nav class="bar bar-tab">
	    	<?php if(empty($duid)): ?><a class="tab-item active" href="<?php echo U('index/welcome');?>" external>
			      <i class="iconfont">&#xe605;</i>
			      <p>首页</p>
			    </a>
			    <a class="tab-item" href="<?php echo U('line/book');?>" external>
			      <i class="iconfont">&#xe604;</i>
			      <p>定制游</p>
			    </a>
			    <a class="tab-item" href="<?php echo ($pcset["askfor_link"]); ?>" external>
			      <i class="iconfont">&#xe602;</i>
			      <p>咨询</p>
			    </a>
			    <a class="tab-item" href="http://shequ.kllife.com/" external>
			      <i class="iconfont">&#xe603;</i>
			      <p>游记</p>
			    </a>
			    <a class="tab-item" href="<?php echo U('user/info');?>" external>
			      <i class="iconfont">&#xe601;</i>
			      <p>我的</p>
			    </a>
	    	<?php else: ?>
			    <a class="tab-item active" href="<?php echo U('fenxiao/welcome');?>/duid/<?php echo ($duid); ?>" external>
			      <i class="iconfont">&#xe605;</i>
			      <p>首页</p>
			    </a>
			    <a class="tab-item" href="<?php echo U('line/book');?>" external>
			      <i class="iconfont">&#xe604;</i>
			      <p>定制游</p>
			    </a>
			    <a class="tab-item" href="<?php echo ($pcset["askfor_link"]); ?>" external>
			      <i class="iconfont">&#xe602;</i>
			      <p>咨询</p>
			    </a>
			    <a class="tab-item" href="<?php echo U('user/info');?>/duid/<?php echo ($duid); ?>" external>
			      <i class="iconfont">&#xe601;</i>
			      <p>我的</p>
			    </a><?php endif; ?>
		</nav>
		<!--<script src="/source/Static/qinglvpai/common/js/jquery.lazyload.js"></script>-->
		<script type="text/javascript">
//            jQuery(document).ready(function($){
//                $("img").lazyload({
//                    placeholder : "/source/Static/qinglvpai/common/js/grey.gif",
//                    effect      : "fadeIn",
//                    threshold : 0,
//                    failure_limit : 10,
//                    skip_invisible : false
//                });
//            });

			$('nav').find('a:last-child').click(function(){
				$.post('<?php echo U("index/url");?>', {type:'nav_mine'}, function(data){
					if (data.result.errno == 0) {
						if (data.jumpUrl != null) {
							location.href = data.jumpUrl;
						}
					} else {
						alert(data.result.message);
					}
				});
			});
		</script>
		<div class="content" data-id="<?php echo ($subject["id"]); ?>">
			<!-- 这里是页面内容区 -->
			<!-- slider -->
			<div class="swiper-container" >
				<div class="swiper-wrapper">
					<div class="swiper-slide"><a href="javascript:;" external><img src="<?php echo ($subject["banner"]); ?>" alt=""></a></div>
				</div>
			</div>

			<!--小团慢-->
			<div class="slow-travel" style="margin-top:0px;">
				<a href="<?php echo U('subject/brand');?>" external>
					<img src="/source/Static/phone/images/index/xiaotuanman.jpg" alt="">
				</a>
			</div>
			<!-- 电话 -->
			<div class="telephone">
				<a href="tel:400-080-5860" external><img src="/source/Static/phone/images/index/telephone.png" alt=""></a>
			</div>
			
			
			<!--线路模板-->											
			<div class="card demo-card-header-pic line_template hidden_ctrl" data-id="">
				<div class="card-content">
					<img class="face_image" src="" alt="">
					<div class="card-content-inner">
						<p class="title-text"></p>
						<p class="subheading"></p>
					</div>
					<!-- 跳转a -->
					<a class="jump_url" href="" external></a>
				</div>
				<div class="card-footer">
					<span class="assembly">出发地：</span>
					<a class="jump_url" href="" class="link active-recommend"> 
					<span class="adult_price">￥0元起</span></a>
				</div>
			</div>

			<!-- 热卖专区 -->
			<div class="hot-sale">
			
				<div class="hot-sale-content">
					<!-- 切换 -->
					<div class="buttons-tab">
						<?php if(is_array($subject["line_tab"])): $i = 0; $__LIST__ = $subject["line_tab"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i; if($key == 0): ?><a href="" data-id="<?php echo ($tab["id"]); ?>" data-key="<?php echo ($tab["type_key"]); ?>" class="tab-link active button" external><?php echo ($tab["type_desc"]); ?></a>
							<?php else: ?>
							<a href="" data-id="<?php echo ($tab["id"]); ?>" data-key="<?php echo ($tab["type_key"]); ?>" class="tab-link button" external><?php echo ($tab["type_desc"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</div>
				    <div class="tabs">
						<div>					
							<!-- 深度游 -->
							<div class="depth-travel">
								<div class="depth-travel-content">
									<div class="travel-content">	
									
										<?php if(is_array($subject["show_tab_line_data"])): $i = 0; $__LIST__ = $subject["show_tab_line_data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$line): $mod = ($i % 2 );++$i;?><div class="card demo-card-header-pic" data-id="<?php echo ($line["id"]); ?>">
												<div class="card-content">
													<img class="face_image" src="<?php echo ($line["img1"]); ?>" alt="">
													<div class="card-content-inner">
														<p class="title-text"><?php echo ($line["title"]); ?></p>
														<p class="subheading"><?php echo ($line["subheading"]); ?></p>
													</div>
													<!-- 跳转a -->
													<a class="jump_url" href="<?php echo U('line/info');?>/id/<?php echo ($line["id"]); ?>" external></a>
												</div>
												<div class="card-footer">
													<span class="assembly">出发地：<?php echo ($line["assembly_point_show_text"]); ?></span>
													<a class="jump_url" href="<?php echo U('line/info');?>/id/<?php echo ($line["id"]); ?>" class="link active-recommend">
														<span class="adult_price">￥<?php echo ($line["start_price_adult"]); ?>元起</span>
													</a>
												</div>
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
										
										<!-- 查看更多超值热卖 -->
										<!--<a href="<?php echo U('line/list');?>" external>查看更多超值热卖</a>-->
									</div>
								</div>
							</div>
						</div> <!--结束tab-->
				    </div>
				    
				</div>
			</div>
			
			<!-- 精彩游记 -->
			<div class="active-review">
				<div class="active-review-content">
					<div class="active-review-header">
						<img src="/source/Static/phone/images/index/sublist_logo.png" alt="">
						<span>精彩游记</span>
					</div>
					<div class="active-review-list">
						
						<?php $__FOR_START_796798430__=0;$__FOR_END_796798430__=20;for($i=$__FOR_START_796798430__;$i < $__FOR_END_796798430__;$i+=1){ if(empty($subject['youji'.$i]) == false): $youji = $subject['youji'.$i]; if (empty($youji['url'])) { continue; } ?>
								<div class="active-review-sublist">
									<div class="card demo-card-header-pic">
										<div class="card-content">
											<img src="<?php echo ($youji["img"]); ?>" alt="">
											<div class="card-content-inner">
												<p><?php echo ($youji["desc"]); ?></p>
											</div>
											<!-- 跳转a -->
											<a href="<?php echo ($youji["url"]); ?>" external></a>
										</div>
										
									</div>
								</div><?php endif; } ?>						

					</div>
					<!-- 更多往期回顾 -->
					<a href="http://shequ.kllife.com/" external>更多精彩游记</a>
				</div>				
			</div>
			<!-- end 活动回顾 -->			
			
			<!-- 周边游 -->
			<?php if($show_surrounding == 1): ?><div class="hot-sale">
				<?php if($station111['key'] != 'main'): ?><h3><?php echo ($station111["name"]); ?>周边游</h3>
				<?php else: ?>
				<h3>周边游</h3><?php endif; ?>
				<div class="hot-sale-content">
					<!-- 切换 -->
					<div class="buttons-tab">
						<?php if(is_array($set["surrounding_line_tab"])): $i = 0; $__LIST__ = $set["surrounding_line_tab"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i; if($key == 0): ?><a href="#<?php echo ($tab["type_key"]); ?>" class="tab-link active button"><?php echo ($tab["type_desc"]); ?></a>
							<?php else: ?>
							<a href="#<?php echo ($tab["type_key"]); ?>" class="tab-link button"><?php echo ($tab["type_desc"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</div>
				    <div class="tabs">
						<?php if(is_array($set["surrounding_line_tab"])): $i = 0; $__LIST__ = $set["surrounding_line_tab"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i; if($key == 0): ?><div id="<?php echo ($tab["type_key"]); ?>" class="tab active">
						<?php else: ?>
						<div id="<?php echo ($tab["type_key"]); ?>" class="tab"><?php endif; ?>								
							<!-- 深度游 -->
							<div class="depth-travel">
								<div class="depth-travel-content">
									<div class="travel-content">
										<?php $__FOR_START_328719439__=0;$__FOR_END_328719439__=6;for($i=$__FOR_START_328719439__;$i < $__FOR_END_328719439__;$i+=1){ $v = $set[$tab['type_key'].$i]; if (empty($v)) { continue; } ?>											
											<div class="card demo-card-header-pic">
												<div class="card-content">
													<img src="<?php echo ($v["img1"]); ?>" alt="">
													<div class="card-content-inner">
														<p><?php echo ($v["title"]); ?></p>
														<p><?php echo ($v["subheading"]); ?></p>
													</div>
													<!-- 跳转a -->
													<a href="<?php echo U('line/info');?>/id/<?php echo ($v["id"]); ?>" external></a>
												</div>
												<div class="card-footer">
													<span>出发地：<?php echo ($v['assembly_point_show_text']); ?></span>
													<a href="<?php echo U('line/info');?>/id/<?php echo ($v["id"]); ?>" class="link active-recommend">
														<span>￥<?php echo ($v["start_price_adult"]); ?>元起</span>
													</a>
												</div>
											</div><?php } ?>

										<!-- 查看更多周边游 -->
										<a href="<?php echo U('line/list');?>" external>查看更多线路产品</a>
										
									</div>
								</div>
							</div>
						</div> <!--结束tab--><?php endforeach; endif; else: echo "" ;endif; ?>
				    </div>				    
				</div>
			</div><?php endif; ?>
			<!--结束周边游-->

			
		</div>
<!--额济纳-->
<div class="Popup" style="background: rgba(0,0,0,0.5);width:100%;height:100%;position: fixed;top:0px;left:0px;z-index:1000;display: none;">
	<div style="text-align: center;text-align: -webkit-center;margin-top:40%;">
			<span style="position: relative;display: inline-block;cursor: pointer;">
				<img style="width:100%;" src="/source/Static/phone/images/subject/ejina-phone.jpg" alt="">
				<img style="position: absolute;top:10px;right:10px;" src="/source/Static/home/images/index_img/guizhounone.png" alt="">
			</span>
	</div>
</div>
<!--贵州弹框-->
<div class="GPopup" style="background: rgba(0,0,0,0.5);width:100%;height:100%;position: fixed;top:0px;left:0px;z-index:1000;display: none;">
	<div style="text-align: center;text-align: -webkit-center;margin-top:40%;">
			<span style="position: relative;display: inline-block;cursor: pointer;">
				<img style="width:100%;" src="/source/Static/phone/images/subject/guizhou-phone.jpg" alt="">
				<img style="position: absolute;top:10px;right:10px;" src="/source/Static/home/images/index_img/guizhounone.png" alt="">
			</span>
	</div>
</div>
	</div>
	

<!-- light7 -->
<script src="/source/Static/phone/common/js/light7.js"></script>
<!-- i18n 中文 -->
<script src="/source/Static/phone/common/js/cn.js"></script>
<!--公用JS文件-->
<script src="/source/Static/common/js/functions.js"></script>

<script>		
    //加载指示
    function PageLoading() {
    	this.loaded = false;
    }
    
    PageLoading.prototype.isLoading = function () {
    	return this.loaded;
    }
    
    PageLoading.prototype.loading = function (bshow, bstyle) {
    	this.loaded = bshow;
    	if (bstyle == null || bstyle == true) {
	    	if (bshow) {
	       		$.showPreloader();
	    	} else {
	            $.hidePreloader();	
	    	}
    	}
    }
</script>
	<!-- swiper -->
	<script src="/source/Static/phone/common/js/swiper-3.3.1.min.js"></script>
	
	<script>
        //关闭弹框
        $(".Popup ,.GPopup").on("click",function(){
            $(this).fadeOut("slow");
        })
        //页面加载获取锚点id值   对有这个id的元素执行一次点击事件
        $(document).ready(function(){
            var url = location.search;
            var str = url.substring( url.length-2)
            if(str == 19) {
                $(".GPopup").show();
            }
        })
        $(document).ready(function(){
            var url = location.search;
            var str = url.substring( url.length-2)
            if(str == 43) {
                $(".Popup").show();
            }
        })

		$(function(){
			
			$.init();

		});
		
//		$('.buttons-tab').find('.tab-link').click(function(){
//			$(this).parent().find('.tab-link').removeClass('active');
//			$(this).addClass('active');
//			
//			$('.tabs').find('.tab').removeClass('active');
//			var tabId = $(this).attr('href');
//			$(tabId).addClass('active');
//			
//			// 切换产品
//			changeTabPage();
//		});
		
		
		// 设置专题配置
		function setSubjectConfig(key, val, nSort, sql_type, keyLike) {			
			if (key == '' || key == 'undefined' || key == null) {
				alert('查找的数据类型错误');
				return false;
			}
			var jsonData = {
				op_type: 'data',
				subject_id: $('.content').attr('data-id'),
				key: key,
				value: val,
			}
			if (nSort != 'undefined' && nSort != null) {
				jsonData['sort'] = nSort;
			}
			if (sql_type != 'undefined' && sql_type != null) {
				jsonData['sql_type'] = sql_type;
			}
			if (keyLike != 'undefined' && keyLike != null) {
				jsonData['key_like'] = 1;
			}
			
			var ds = {ds:null, result:{errno:-1, message:'专题信息有误'}};
			$.ajax({
				url: '<?php echo U("line/subject");?>',
				type: 'POST',
				async: false,
				data: jsonData,
				dataType: 'json',
				success: function(data) {
					ds = data;
				}
			});			
			return ds;
		}
			
		// 线路选择面板切换
		function changeTabPage() {					
			var mainObj = $(this).closest('.buttons-tab');		
			var thisTabObj = $(mainObj).find('a.active');
						
			if ($(this).attr('data-id') == $(thisTabObj).attr('data-id')) {
				return false;
			}
			
			// 选中切换
			$(mainObj).find('a').removeClass('active');
			$(this).addClass('active');
			
			// 设置面板当前的tab标签
			var tabKey = $(this).attr('data-key');
			
			// 覆盖层遮蔽
			ShowMark();
			
			$('.travel-content').empty();
			// 重新获取内容并填充
			var data = setSubjectConfig(tabKey, '', 0, 'find');
			if (data.ds != null) {
				for (var i = 0; i < data.ds.length; i ++) {
					var d = data.ds[i];
					var lineObj = $('.line_template').clone(true);
					$(lineObj).removeClass('line_template');
					$(lineObj).removeClass('hidden_ctrl');
					$(lineObj).attr('data-id', d.id);
					$(lineObj).find('.face_image').attr('src', d.img1);
					$(lineObj).find('.title-text').html(d.title);
					$(lineObj).find('.subheading').html(d.subheading);
					$(lineObj).find('.jump_url').attr('href', '<?php echo U("line/info");?>/id/'+d.id);
					$(lineObj).find('.assembly').html(d.assembly_point_show_text);
					$(lineObj).find('.adult_price').html('￥'+d.start_price_adult+'元起');
					$('.travel-content').append(lineObj);
				}
			} else {
				alert(data.result.message);
			}
			HideMark();
		}
		
		$('.buttons-tab').find('.tab-link').click(changeTabPage);			
	</script>
<!--百度统计-->
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?a6f69a2a062b07c67a4ae301e0963ca8";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
	})();
</script> 
<!--商务通统计-->
<script language="javascript" src="http://pqt.zoosnet.net/JS/LsJS.aspx?siteid=PQT43116159&lng=cn"></script>
<!--CNZZ统计-->
<script type="text/javascript">
	var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cdiv id='cnzz_stat_icon_1000019958'%3E%3C/div%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000019958%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>