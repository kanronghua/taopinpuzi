<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:42:"./template/pc/default/goods\goodsList.html";i:1490353006;s:40:"./template/pc/default/public\header.html";i:1490353006;s:44:"./template/pc/default/public\siteTopbar.html";i:1490353006;s:38:"./template/pc/default/public\kefu.html";i:1490353006;s:40:"./template/pc/default/public\footer.html";i:1490353006;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品列表-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
<meta http-equiv="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
<meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
</head>

<body>
<!--------头部开始-------------->
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
<!--最顶部-->
<link rel="stylesheet" href="__STATIC__/css/index.css" type="text/css">
<div class="site-topbar">
    <div class="layout">
        <div class="t1-l">
            <ul class="t1-l-ul">
                <li class="t1font"><a target="_blank" href="<?php echo U('/Home/Article/detail',array('article_id'=>22)); ?>">在线客服</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="javascript:void();">TPshop</a></li>
                <li class="t1img">&nbsp;</li>
            </ul>
        </div>
        <div class="t1-r">
            <ul class="t1-r-ul islogin" style="display:none;">
                <li class="t1font"> <a href="<?php echo U('Home/User/index'); ?>" class="logon userinfo"></a></li>
                <li class="t1img"><a href="<?php echo U('Home/user/logout'); ?>">安全退出</a></li>                    
                <li class="t1img">&nbsp;</li>
                <li class="t1img">&nbsp;</li>                
                <li class="t1font"><a href="<?php echo U('Home/User/order_list'); ?>">我的订单</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart'); ?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li>                
            </ul>
            <ul class="t1-r-ul nologin" style="display:none;">
                <li class="t1font"><a href="<?php echo U('Home/user/login'); ?>">登录</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart'); ?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li> 
            </ul>
        </div>
    </div>
</div>

 <!--------在线客服-------------->
<style>
*{margin:0;padding:0;list-style:none;border:none;}
body{font-size:12px;}
a{color:#666;text-decoration:none;}
/*客服代码部分*/
.qqserver .qqserver-header:after,.qqserver .qqserver-header:before,.qqserver li a:after,.qqserver li a:before{display:table;content:' '}
.qqserver .qqserver-header:after,.qqserver li a:after{clear:both}
.qqserver .qqserver-header,.qqserver li a,.tabs,.user-main,.view-category,.view-category-list>li{*zoom:1}
.qqserver{position:fixed;top:50%;right:0;height:209px;margin-top:-104px}
.qqserver.unfold .qqserver-body{right:0;z-index:100;}
.qqserver .qqserver-body{position:absolute;right:-144px;width:122px;height:183px;padding:12px 10px;-webkit-transition:.3s cubic-bezier(.19,1,.22,1);-o-transition:.3s cubic-bezier(.19,1,.22,1);transition:.3s cubic-bezier(.19,1,.22,1);border:1px solid #e63547;border-radius:4px;background:#f4f7fa}
.qqserver .qqserver_fold{position:absolute;right:0;padding:14px 7px;cursor:pointer;border-top-left-radius:4px;border-bottom-left-radius:4px;background:#e63547}
.qqserver .qqserver-header{padding-bottom:10px;padding-left:6px;border-bottom:1px dashed #d1d4cc}
.qqserver .qqserver-header *{float:left}
.qqserver .qqserver_arrow{margin-top:-1px;margin-left:7px;cursor:pointer}
.qqserver li{margin-top:6px}
.qqserver li a{display:block;padding:6px 12px 4px}
.qqserver li a div{font-size:14px;float:left;margin-right:11px;color:#697466}
.qqserver li a span{font-size:12px;line-height:18px;float:left;text-indent:4px;color:#fff}
.qqserver li a span.qqserver-service-alert{font-weight:400;display:block}
.qqserver li a:hover{text-decoration:none;border-radius:4px;background:#eaebe9}
.qqserver li a:hover div{color:#e63547}
.qqserver .qqserver-footer{margin-top:10px;padding-top:14px;padding-bottom:14px;padding-left:11px;border-top:1px dashed #d1d4cc}
.qqserver .qqserver-footer .text-primary{color:#e63547;font-size:14px;}
.qqserver .qqserver_icon-alert{display:inline-block;margin-right:10px;vertical-align:-3px;*display:inline;*zoom:1;*vertical-align:-1px}
.qqserver-header div{width:90px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-419px -80px}
.qqserver_icon-alert{width:16px;height:14px;background-image:url(__STATIC__/images/lanren.png);background-position:-595px -85px}
.qqserver li a span{width:30px;height:23px;background-image:url(__STATIC__/images/lanren.png);background-position:-265px 0}
.qqserver li a .qqserver-service-alert{width:30px;height:22px;background-image:url(__STATIC__/images/lanren.png);background-position:-342px 0}
.qqserver_fold div{width:26px;height:132px;background-image:url(__STATIC__/images/lanren.png);background-position:0 0}
.qqserver_fold:hover div{width:26px;height:132px;background-image:url(__STATIC__/images/lanren.png);background-position:-27px 0}
.qqserver_arrow{width:18px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-435px 0}
.qqserver_arrow:hover{width:18px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-435px -38px}
</style>
<!-- 代码部分begin -->
<div class="qqserver">
  <div class="qqserver_fold">
    <div></div>
  </div>
  <div class="qqserver-body" style="display: block;">
    <div class="qqserver-header">
      <div></div>
      <span class="qqserver_arrow"></span> </div>
    <ul>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>琳琳</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq2']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>云云</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq3']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>技术咨询</div>
        <span class="qqserver-service-alert">TPshop</span> </a> </li>
    </ul>
    <div class="qqserver-footer"><span class="qqserver_icon-alert"></span><a class="text-primary" href="javascript:;">大家都在说</a> </div>
  </div>
</div>
<!--<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>-->
<script>
$(function(){
	var $qqServer = $('.qqserver');
	var $qqserverFold = $('.qqserver_fold');
	var $qqserverUnfold = $('.qqserver_arrow');
	$qqserverFold.click(function(){
		$qqserverFold.hide();
		$qqServer.addClass('unfold');
	});
	$qqserverUnfold.click(function(){
		$qqServer.removeClass('unfold');
		$qqserverFold.show();
	});
	//窗体宽度小鱼1024像素时不显示客服QQ
	function resizeQQserver(){
		$qqServer[document.documentElement.clientWidth < 1024 ? 'hide':'show']();
	}
	$(window).bind("load resize",function(){
		resizeQQserver();
	});
});
</script>
<!-- 代码部分end -->
 <!--------在线客服-------------->

<!--顶部banner开始-->    
<?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'home/Index/index' && $_COOKIE["top-banner"] == null){ ?>
<div class="top-banner" id="top-banner-block">
    <div class="top-banner-max">
    <!---广告 select * from __PREFIX__ad where position_id = 1 limit 1-->
    <?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1494684000 and end_time > 1494684000 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
    <a href="<?php echo $v['ad_link']; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo $v[ad_code]; ?>"  title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/></a>    
    <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close" onClick="javascript:$('#top-banner-block').hide();">－</a>
    <?php endforeach; ?> 
   </div>
</div>
<?php 
		setcookie("top-banner", "1", time()+ 3600); // 弹过窗的 不在弹窗
	} 
?>
<!--顶部banner结束-->    

<header>
    
    <div class="layout">
    
    <!--logo开始-->
        <div class="logo"><a href="/" title="TPshop"><img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>" alt="TPshop"></a></div>
    <!--logo结束-->
    
    <!-- 搜索开始-->
        <div class="searchBar">
            <div class="searchBar-form">
                <form name="sourch_form" id="sourch_form" method="post" action="<?php echo U("/Home/Goods/search"); ?>">
                    <input type="text" class="text" name="q" id="q" value="<?php echo I('q'); ?>"  placeholder="  搜索关键字"/>
                    <input type="button" class="button" value="搜索" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"/>
                </form>
            </div>
            <div class="searchBar-hot">
                <b>热门搜索</b>
               	<?php if(is_array($tpshop_config['hot_keywords']) || $tpshop_config['hot_keywords'] instanceof \think\Collection): if( count($tpshop_config['hot_keywords'])==0 ) : echo "" ;else: foreach($tpshop_config['hot_keywords'] as $k=>$wd): ?>
        			<a target="_blank" href="<?php echo U('Home/Goods/search',array('q'=>$wd)); ?>" <?php if($k == 0): ?>class="ht"<?php endif; ?>><?php echo $wd; ?></a>
        		<?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 搜索结束-->
        
        <div class="ri-mall">
            <div class="my-mall">
            <!---我的商城-开始 -->
                <div class="mall">
                    <div class="le"><a href="<?php echo U('/Home/User'); ?>" >我的商城</a></div> 
                </div>
                <!---我的商城-结束 -->
            </div>
            <div class="my-mall" id="header_cart_list">
                <!---购物车-开始 -->
                <div class="micart">
                    <div class="le les">
                    	<a href="<?php echo U('Home/Cart/cart'); ?>" >我的购物车
                            <span class="shopping-num"><em id="cart_quantity"></em><b></b></span>
                        </a>                       
                    </div>
                    
                    <div class="ri ris" style="display:">
                       <?php if(count($cartList) == 0): ?>
                            <div class="micart-about">
                                <span class="micart-xg">您的购物车是空的，赶紧选购吧！</span>
                            </div>
                        <?php endif; ?>
                        <div class="commod">
                        <ul>
                        <?php if(is_array($cartList) || $cartList instanceof \think\Collection): if( count($cartList)==0 ) : echo "" ;else: foreach($cartList as $k=>$v): ?>
                            <li class="goods">
                                <div>
                                    <div class="p-img">
                                        <a href="">
                                            <img src="<?php echo goods_thum_images($v['goods_id'],428,428); ?>" alt="">
                                        </a>
                                     </div>
                                     <div class="p-name">
                                        <a href="">
                                            <span class="p-slogan"><?php echo $v[goods_name]; ?></span>
                                            <span class="p-promotions hide"></span>
                                        </a>
                                     </div>
                                     <div class="p-status">
                                        <div class="p-price">
                                            <b>¥&nbsp;<?php echo $v[goods_price]; ?></b>
                                            <em>x</em>
                                            <span><?php echo $v[goods_num]; ?></span>
                                        </div>
                                        <div class="p-tags"></div>
                                     </div>
                                     <!--
                                     <a href="" class="icon-minicart-del" title="删除">删除</a>
                                       -->
                                </div>
                            </li>
                         <?php endforeach; endif; else: echo "" ;endif; ?>   							
                        </ul>
                        </div>
                        <div class="settle">
                            <p>共<em><?php echo $cart_total_price[anum]; ?></em>件商品，金额合计<b>¥&nbsp;<?php echo $cart_total_price[total_fee]; ?></b></p>
                            <a class="js-button" href="<?php echo U('Home/Cart/cart'); ?>">去结算</a>
                        </div>
                    </div>
                </div>
                <!---购物车-结束 -->
                
            </div>
        </div>
        <div class="qr-code">
            <img src="__STATIC__/images/qrcode_vmall_app01.png" alt="二维码" />
            <p>扫一扫</p>
        </div>
    </div>
</header>
   <!-- 导航-开始-->
   
   
   	<div class="navigation">
    	<div class="layout">
        	<!--全部商品-开始-->
        	<div class="allgoods">
            	<div class="goods_num"><h2>全部商品</h2><i class="trinagle"></i></div>
            	<div class="list" <?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'home/Index/index') echo 'style="display:block;"'; ?> >
                   <ul class="list_ul"> 
                       <?php if(is_array($goods_category_tree) || $goods_category_tree instanceof \think\Collection): if( count($goods_category_tree)==0 ) : echo "" ;else: foreach($goods_category_tree as $k=>$v): if($v[level] == 1): ?>                       
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v[id])); ?>"><span><?php echo $v['name']; ?></span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                       <?php $index = '1'; if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 3) break; ?>
                                           	 	<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?></a>
                                             <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                       <?php $index = '1'; if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 6) break; ?>
                                                    <a class="list_big_o ma-le-30" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?><i>＞</i></a>
                                               <?php endif; endforeach; endif; else: echo "" ;endif; ?>                                                                                    
                                        </div>
                                        <div class="subitems">                                        
                                           <?php if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): ?>
                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?></a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                           <?php if(is_array($v2[sub_menu]) || $v2[sub_menu] instanceof \think\Collection): if( count($v2[sub_menu])==0 ) : echo "" ;else: foreach($v2[sub_menu] as $k3=>$v3): if($v3[parent_id] == $v2[id]): ?>                                                           
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id])); ?>"><?php echo $v3['name']; ?></a>
                                                              <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                        </dd>
                                                    </dl>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>	
                	</ul>
                </div>
            </div>
            <!--全部商品-结束-->
            
            <div class="ongoods">
            	<ul class="navlist">
            		<li class="homepage"><a href="/"><span>首页</span></a></li>
                    <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            			<li class="page"><a href="<?php echo $v[url]; ?>" <?php if($v[is_new] == 1): ?>target="_blank" <?php endif; ?><span><?php echo $v[name]; ?></span></a></li>
					<?php endforeach; ?> 
            	</ul>
            </div>
        </div>
    </div>
   <!-- 导航-结束-->
<script>
$(function(){
    var active_li = '<?php echo $active; ?>';
    if(active_li){
        $('li').remove('curr-res');
        $('#'+active_li).addClass('curr-res');
    }
   	
    var uname= getCookie('uname');
    if(uname == ''){
    	$('.islogin').remove();
    	$('.nologin').show();
    }else{
    	$('.nologin').remove();
    	$('.islogin').show();
    	$('.userinfo').html(decodeURIComponent(uname));
    }
    get_cart_num();
})



function get_cart_num(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');		
				$('#cart_quantity').html(cart_cn);
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
}
/**
* 鼠标移动端到头部购物车上面 就ajax 加载
*/
// 鼠标是否移动到了上方
var header_cart_list_over = 0; 
$("#header_cart_list > .micart > .les").hover(function(){	 
       if(header_cart_list_over == 1) 
			return false;	
        header_cart_list_over = 1; 
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
			 	$("#header_cart_list > .micart > .ris").html(data);	
			 	get_cart_num();
			}
		});			
}).mouseout(function(){
	
	 (typeof(t) == "undefined") || clearTimeout(t); 	 
	 t = setTimeout(function () { 
			header_cart_list_over = 0; /// 标识鼠标已经离开
		}, 1000);		
});
</script>
<!--------头部结束--------------> 
<link rel="stylesheet" href="__STATIC__/css/page.css" type="text/css">
<link rel="stylesheet" href="__STATIC__/css/category.css" type="text/css">
<link rel="stylesheet" href="__STATIC__/css/common.min.css" type="text/css">

<script type="text/javascript" src="__STATIC__/js/jquery.jqzoom.js"></script> 
<script src="__PUBLIC__/js/pc_common.js"></script>
<script src="__PUBLIC__/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->
	 
<!--------中间内容-------------->
<div id="warpper" class="clearfix">
  <div id="path-new" class="clearfix colaaa text13">
    <div class="item fl">
      <div class="fl">
        <span class="u-nav-title">
          <?php if($goodsCate['parent_id'] == 0): ?>
            <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
            <?php else: ?>
            <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['parent_id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
          <?php endif; ?>
        </span>
      </div>
      <div class="fl" id="m-selected-cery">
        <div class="u-left-icon"><i class="z-arrow"></i></div>
        
        <!--如果当前分类是三级分类 则二级也要显示-->
        <?php if($goodsCate[level] == 3): ?>
          <div class="u-nav-attr"> <a href="javascript:;"><?php echo $goods_category[$goodsCate[parent_id]][name]; ?><i></i></a>
            <span class="z-blank-bar"></span>
            <ul class="u-attr-list">
              <?php if(is_array($goods_category) || $goods_category instanceof \think\Collection): if( count($goods_category)==0 ) : echo "" ;else: foreach($goods_category as $k=>$v): if(($v[parent_id] == $goods_category[$goodsCate[parent_id]][parent_id])): ?>
                  <li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        <?php endif; ?>
        <!--当前分类-->
        <?php if($goodsCate[level] == 2): ?>
          <div class="u-nav-attr"> <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['parent_id'])); ?>"><?php echo $goodsCate['name']; ?><i></i></a>
            <span class="z-blank-bar"></span>
            <ul class="u-attr-list">
              <?php if(is_array($goods_category) || $goods_category instanceof \think\Collection): if( count($goods_category)==0 ) : echo "" ;else: foreach($goods_category as $k=>$v): if(($v[parent_id] == $goodsCate[parent_id])): ?>
                  <li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        <?php endif; if($goodsCate[level] == 1): ?>
          <div class="u-nav-attr">
            <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])); ?>"><?php echo $goodsCate['name']; ?><i></i></a>
            <span class="z-blank-bar"></span>
            <ul class="u-attr-list">
              <?php if(is_array($cateArr) || $cateArr instanceof \think\Collection): if( count($cateArr)==0 ) : echo "" ;else: foreach($cateArr as $k=>$v): ?>
                <li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        <?php endif; ?>

      </div>
    </div>
    <div class="u-left-icon"><i class="z-arrow"></i></div>
    <?php if(is_array($filter_menu) || $filter_menu instanceof \think\Collection): if( count($filter_menu)==0 ) : echo "" ;else: foreach($filter_menu as $k=>$v): ?> 
	    <a title="<?php echo $v['text']; ?>" href="<?php echo $v['href']; ?>" class="u-av-label"><?php echo $v['text']; ?><i></i></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>

     
  </div>
  <div class="cata_cart_left">
    <div class="m-cart">
      <p class="title">
        <?php if($goodsCate['parent_id'] == 0): ?>
          <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
          <?php else: ?>
          <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['parent_id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
        <?php endif; ?>
      </p>
      <!--search/?q=-->
      <div id="cata_list"> 
        <!-- 分类树 -->
        <ul class="menu_3">
          <?php if(is_array($cateArr) || $cateArr instanceof \think\Collection): if( count($cateArr)==0 ) : echo "" ;else: foreach($cateArr as $k=>$v): ?>
          <li class="menu_two">
            <?php if($v['id'] == $goodsCate['open_id']): ?>
              <span name="submenuicon" class="menuminus"></span>
              <?php else: ?>
              <span name="submenuicon" class="menuplus"></span>
            <?php endif; ?>
            <a  href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>" class="menu3_title"><?php echo $v['name']; ?></a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
            <?php if($v['id'] == $goodsCate['open_id']): ?> style="display: block;"
              <?php else: ?>
              style="display: none;"<?php endif; ?>>
            <?php if(is_array($v['sub_menu']) || $v['sub_menu'] instanceof \think\Collection): if( count($v['sub_menu'])==0 ) : echo "" ;else: foreach($v['sub_menu'] as $key=>$vv): ?>
          <li><a  href="<?php echo U('Home/Goods/goodsList',array('id'=>$vv['id'])); ?>" 
            <?php if($vv['id'] == $goodsCate['select_id']): ?>class="selected"<?php endif; ?>><?php echo $vv['name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <!-- 分类树 --> 
    </div>
  </div>
  <!-- 推荐热卖-->
  <div class="m-rehotbox mt10" style='display:block;'>
    <h2 class="rehottit">推荐热卖</h2>
    <div class="rehotcon" id="rehotcon">
     
    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__goods` where  is_recommend = 1 limit 5");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__goods` where  is_recommend = 1 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
      <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="<?php echo U('/Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
                 <img src="<?php echo goods_thum_images($v['goods_id'],200,200); ?>">
                  <span><?php echo $v[goods_name]; ?></span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i><?php echo $v[market_price]; ?></span>
            <span class="old"><i class="fn-rmb">¥</i><?php echo $v[shop_price]; ?></span>
          </p>
        </div>
      </div>
     <?php endforeach; ?> 
       
    </div>
  </div>
</div>
<div class="cata_shop_right" id="tracker_category"> 
  <!-- 館頁屬性 -->
  <div class="attribute_content">
    <div class="attrs"> 
      <!--帅选品牌-->
      <?php if($filter_brand != null): ?>
      <div class='m-tr' >
        <div class='g-left'>
          <p>品牌</p>          
        </div>
        <div class='g-right ' >
          <div class="g-list">
            <ul class="f-list h76 ">
              <?php if(is_array($filter_brand) || $filter_brand instanceof \think\Collection): if( count($filter_brand)==0 ) : echo "" ;else: foreach($filter_brand as $k=>$v): ?>
                <li> <a data-href="" href="<?php echo $v[href]; ?>" data-key='brand' data-val='<?php echo $v[id]; ?>'><i></i><?php echo $v[name]; ?></a> </li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="f-ext">
                 <a  class="f-more brandMore" data-attr="attr_600002" href="javascript:;">更多<i></i></a>
                 <a  class="f-check brand" data-attr="attr_600002" href="javascript:;"><i></i>多选</a> 
            </div>
            <div class="g-btns">
            	<a  href="javascript:;" class="u-confirm" onClick="submitMoreFilter('brand',this);">确定</a>
                <a href="javascript:;" class="u-cancel brand">取消</a>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!--帅选规格-->
      <?php if(is_array($filter_spec) || $filter_spec instanceof \think\Collection): if( count($filter_spec)==0 ) : echo "" ;else: foreach($filter_spec as $k=>$v): ?>
        <div class='m-tr' >
          <div class='g-left'>
            <p><?php echo $v['name']; ?></p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list ">
                <?php if(is_array($v[item]) || $v[item] instanceof \think\Collection): if( count($v[item])==0 ) : echo "" ;else: foreach($v[item] as $k2=>$v2): ?>
                  <li> <a id='' data-href="" href="<?php echo $v2[href]; ?>" data-key='<?php echo $v2[key]; ?>' data-val='<?php echo $v2[val]; ?>'><i></i><?php echo $v2[item]; ?></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
              <div class="f-ext">
                  <a  class="f-more " data-attr="attr_601115" href="javascript:;">更多<i></i></a>
                  <a  class="f-check " data-attr="attr_601115" href="javascript:;"><i></i>多选</a>
              </div>
              <div class="g-btns">
              	<a  href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                <a href="javascript:;" class="u-cancel ">取消</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <!--帅选属性-->
      <?php if(is_array($filter_attr) || $filter_attr instanceof \think\Collection): if( count($filter_attr)==0 ) : echo "" ;else: foreach($filter_attr as $k=>$v): ?>
        <div class='m-tr' >
          <div class='g-left'>
            <p><?php echo $v['attr_name']; ?></p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                <?php if(is_array($v[attr_value]) || $v[attr_value] instanceof \think\Collection): if( count($v[attr_value])==0 ) : echo "" ;else: foreach($v[attr_value] as $k2=>$v2): ?>
                  <li> <a data-href="<?php echo $v2[href]; ?>" href="<?php echo $v2[href]; ?>" data-key='<?php echo $v2[key]; ?>' data-val='<?php echo $v2[val]; ?>'><i></i><?php echo $v2[attr_value]; ?></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
              <div class="f-ext"> 
              	<a  class="f-more brandMore" data-attr="attr_600002" href="javascript:;">更多<i></i></a>
                <a  class="f-check brand" data-attr="attr_600002" href="javascript:;"><i></i>多选</a>
              </div>
              <div class="g-btns">
              	<a  href="javascript:;" class="u-confirm" onClick="submitMoreFilter('attr',this);">确定</a>
                <a href="javascript:;" class="u-cancel brand">取消</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>      
      <!--价格帅选-->
      <?php if($filter_price != null): ?>
      <div class='m-tr' >
        <div class='g-left'>
          <p>价格</p>
        </div>
        <div class='g-right ' >
          <div class="g-list">
            <ul class="f-list h76 ">
              <?php if(is_array($filter_price) || $filter_price instanceof \think\Collection): if( count($filter_price)==0 ) : echo "" ;else: foreach($filter_price as $k=>$v): ?>
                <li> <a href="<?php echo $v[href]; ?>" data-attr-desc=''><i></i><?php echo $v[value]; ?></a> </li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
			  <li class="m-pricebox">
              <form action="<?php echo urldecode(U("/Home/Goods/goodsList",$filter_param,''));?>" method="post" id="price_form">
                    <input type="text" class="u-pri-start" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="start_price" id="start_price" />
                    -
                    <input type="text" class="u-pri-end" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"  name="end_price" id="end_price" />
                    <span style="cursor:pointer;" class="z-btn ensure03 u-btn-pri" href="javascript:;" onClick="if($('#start_price').val() !='' && $('#end_price').val() !='' ) $('#price_form').submit();">确认</span>
              </form>      
              </li>              
            </ul>
          </div>
        </div>
      </div>
      <?php endif; ?>
     <!--价格帅选 end-->
      <a  class="f-out-more" href="javascript:;">更多选项<i></i></a> </div>
  </div>
  <!-- 館頁屬性 --> 
  
  <!-- 商品列表 -->
  <div class="searchbox">
    <div class="list clearfix">
      <ul class="left text12" id="order_ul">
        <!--        <li><a class="col7ac " href1="&sort=recommand&asc=0" style="cursor:pointer;">综合</a></li>-->
        <li> <a class="col7ac  <?php if(\think\Request::instance()->param('sort') == ''): ?>main<?php endif; ?>" href="<?php echo urldecode(U("/Home/Goods/goodsList",$filter_param,''));?>" style="cursor:pointer;"> 默认 </a> </li>
        <li> <a class="col7ac  <?php if(\think\Request::instance()->param('sort') == 'sales_sum'): ?>main<?php endif; ?>" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'sales_sum')),''));?>" style="cursor:pointer;"> 销量 </a> </li>
                
        <?php if(\think\Request::instance()->param('sort_asc') == 'desc'): ?>
        	<li><a class="col7ac  <?php if(\think\Request::instance()->param('sort') == 'shop_price'): ?>main<?php endif; ?>" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'asc')),''));?>" style="cursor:pointer;">价格<span class="icon_s "></span></a></li>
        <?php else: ?>
        	<li><a class="col7ac  <?php if(\think\Request::instance()->param('sort') == 'shop_price'): ?>main<?php endif; ?>" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'desc')),''));?>" style="cursor:pointer;">价格<span class="icon_s "></span></a></li>
        <?php endif; ?>    
                
        <li><a class="col7ac  <?php if(\think\Request::instance()->param('sort') == 'comment_count'): ?>main<?php endif; ?>" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'comment_count')),''));?>" style="cursor:pointer;">评论</a></li>
        <li><a class="col7ac  <?php if(\think\Request::instance()->param('sort') == 'is_new'): ?>main<?php endif; ?>"  href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'is_new')),''));?>" style="cursor:pointer;">新品</a></li>
      </ul>
      <!-- Page -->
      <div class="right text12" id="pagenavi">
        <div class="all-number">
          <span>共<?php echo $page->totalRows; ?>个商品</span>
        </div>
        <p class="pageArea" data-countPage="1"> 
          <!--<a class="bg_img1"></a>-->
          <span class="colf22e01 fontT"><?php echo $page->nowPage; ?></span>
          /
          <span class="page_count fontT"><?php echo $page->totalPages; ?></span>
          <!--<a href="" class="bg_img2"></a> </p>-->
      </div>
      <!-- Page End--> 
    </div>
    <!-- list --> 
  </div>
  <!-- searchbox -->
  
  <ul id="cata_choose_product" class="cart_containt clearfix listContainer">
    <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $k=>$v): ?>
      <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="<?php echo U('/Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="<?php echo goods_thum_images($v['goods_id'],200,200); ?>" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
              <?php if(is_array($goods_images) || $goods_images instanceof \think\Collection): if( count($goods_images)==0 ) : echo "" ;else: foreach($goods_images as $k2=>$v2): if($v2[goods_id] == $v[goods_id]): ?>
                    <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="<?php echo $v2[image_url]; ?>" src="<?php echo $v2[image_url]; ?>" style="display: block;">
                        </a> 
                    </dd>
                  <?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT"><?php echo $v[shop_price]; ?></span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px"><?php echo $v[sales_sum]; ?>人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="<?php echo U('/Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>" class="text13"><?php echo $v[goods_name]; ?></a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(<?php echo $v[goods_id]; ?>,1,0);" ></a></div>
          </div>
        </div>
      </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  
  <!-- Page -->
  <div class="fn-page-css-1 pagintion fix" style="display: block;">
  	<div class="pagenavi text12"><?php echo $page->show(); ?></div>
  </div>
  <!-- 商品列表 --> 
</div>
</div>
<!--------中间内容end-------------->   
 

<!--------footer-开始-------------->
<div class="footer">
    <div class="layout quality layer">
        <ul class="footer_quality">
            <li><i></i>品质保证</li>
            <li  class="f2"><i></i>7天退换 15天换货</li>
            <li  class="f3"><i></i>100元起免运费</li>
            <li  class="f4"><i></i>448家维修网点 全国联保</li>
        </ul>
    </div>
    <div class="helpful layout">
    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            <dl <?php if($k != 0): ?>class="jszc"<?php endif; ?> >
                <dt><?php echo $v[cat_name]; ?></dt>
                <dd>
                    <ol>
                    	<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id] and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id] and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,31104000);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                        <li><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" target="_blank"><?php echo $v2[title]; ?></a></li>
					 	<?php endforeach; ?>                        
                    </ol>
                </dd>
            </dl>
 	<?php endforeach; ?>
     </div>
     <div class="keep-on-record">
        <p>
        Copyright © 2016-2025 <?php echo $tpshop_config['shop_info_store_name']; ?>  版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?>
        
        <!--您好,请您给TPshop留个友情链接-->
        &nbsp;&nbsp;<a href="http://www.tp-shop.cn/">TPshop开源商城</a>
        <!--您好,请您给TPshop留个友情链接-->
        </p>
     </div>
 </div>
 

<!--------footer-结束-------------->
<script type="text/javascript">

//############   分类导航折叠        ############
$('span[name="submenuicon"]').each(function(){
	 $(this).click(function(){
		 if($(this).hasClass('menuplus')){
			 $(this).removeClass('menuplus').addClass('menuminus');
			 $(this).siblings('.second_div').find('ul').show();
		 }else{
			 $(this).removeClass('menuminus').addClass('menuplus');
			 $(this).siblings('.second_div').find('ul').hide();
		 }
	 });
})

//############   更多类别属性筛选       ###########
$('.f-out-more').click(function(){
  $('.m-tr').each(function(i,o){
    if(i >  7){
      var attrdisplay = $(o).css('display');
      if(attrdisplay == 'none'){
        $(o).css('display','block');
      }
      if(attrdisplay == 'block'){
        $(o).css('display','none');
      }
    }
  });
  if($(this).hasClass('checked')){
    $(this).removeClass('checked tex-center').html('收起<i class="checked"></i>');
  }else{
    $(this).addClass('checked tex-center').html('更多选项');
  }
})
$('.f-out-more').trigger('click').html('更多选项'); //  默认点击一下

//############   更多条件选择        ###########
$('.f-more').click(function(){
  if($(this).hasClass('checked')){
    $(this).parent().siblings('ul').removeClass('z-show-more');
    $(this).removeClass('checked').html('更多<i></i>');
  }else{
    $(this).parent().siblings('ul').addClass('z-show-more');
    $(this).addClass('checked').html('收起<i class="checked"></i>');
  }
})

var cancelBtn = null;
//############   多选框        ###########
$('.f-check').click(function(){
	var _this = this;
	var st = 0;
	//关闭前一个多选框
	if(cancelBtn != null){
		$(cancelBtn).parent().siblings('ul').removeClass('z-show-more');  //移除UL的calss:z-show-more
		$(cancelBtn).parent().siblings('ul').find('li >a').each(function(i,o){  //遍历所有a便签
			$(o).removeClass('select selected');    //移除class
			$(o).attr('href',$(o).data('href'));    //添加href
			$(o).children('i').removeClass('selected').css('display','');  //移除a标签前面的选框
			$(o).unbind('click');
		});		
		$(cancelBtn).parent().siblings('.f-ext').show().children('a').removeClass('checked'); //显示多选按钮并移除a标签样式
		$(cancelBtn).parent().hide();  //隐藏当前取消按钮
		$(cancelBtn).siblings().removeClass('u-confirm01');
	}
	cancelBtn = $(_this).parent().siblings('div').find('.u-cancel'); //取消按钮
	
	//打开多选框
	$(_this).addClass('checked');
	$(_this).siblings().addClass('checked');
	$(_this).parent().siblings('.g-btns').show();
	$(_this).parent().siblings('ul').addClass('z-show-more');
	$(_this).parent().siblings('ul').find('li>a').each(function(i,o){
		$(o).addClass('select');
		$(o).children('i').css('display','inline');
		$(o).attr('href','javascript:;');
		$(o).bind('click',function(){
			if($(o).hasClass('selected')){
				$(o).removeClass('selected');
				$(o).children('i').removeClass('selected');
				st--;
			}else{
				$(o).addClass('selected');
				$(o).children('i').addClass('selected');
				$(_this).parent().siblings('.g-btns').children('.u-confirm').addClass('u-confirm01');
				st++;
			}
			//如果没有选中项,确定按钮点不了
			if(st==0){
				$(_this).parent().siblings('.g-btns').children('.u-confirm').removeClass('u-confirm01');
			}
		});
	});
	$(_this).parent().hide();
})


//############   取消多选        ###########
$('.g-btns .u-cancel').each(function(){
	$(this).click(function(){
		$(this).parent().siblings('ul').removeClass('z-show-more');
		$(this).parent().siblings('ul').find('li >a').each(function(i,o){
			$(o).removeClass('select selected');
			$(o).attr('href',$(o).data('href'));
			$(o).children('i').removeClass('selected').css('display','');
			$(o).unbind('click');
		});
		$(this).parent().siblings('.f-ext').show().children('a').removeClass('checked');
		$(this).parent().hide();
		$(this).siblings().removeClass('u-confirm01');
	});
})

//############   产品图片切换        ###########

$('.list-scroll-warp').each(function(){
	var _this = this;
		
	$(_this).children().children().each(function(i,o){
		$(o).mouseover(function(){
			$(o).siblings().removeClass('cur');
			$(o).addClass('cur');			
			var img_src = $(o).children().children().attr('data-img');
			$(_this).parent().siblings('.listPic').find('a').children().attr('src',img_src);
		})
	})
})

//############   点击多选确定按钮      ############
// t 为类型  是品牌 还是 规格 还是 属性
// btn 是点击的确定按钮用于找位置
 get_parment = <?php echo json_encode($_GET); ?>;	
function submitMoreFilter(t,btn)
{
	// 没有被勾选的时候
	if(!$(btn).hasClass("u-confirm01"))
		return false;
		
	// 获取现有的get参数		
	var key = ''; // 请求的 参数名称
	var val = new Array(); // 请求的参数值
	$(btn).parent().siblings(".f-list").find("li > a.selected").each(function(){
		   key = $(this).data('key');
		   val.push($(this).data('val'));
	});
	//parment = key+'_'+val.join('_');
    
	// 品牌
	if(t == 'brand')
	{
		get_parment.brand_id = val.join('_');
	}
	// 规格
	if(t == 'spec')
	{
		if(get_parment.hasOwnProperty('spec'))		
		{		
			get_parment.spec += '@'+key+'_'+val.join('_');
		}		
		else	
		{		
			get_parment.spec = key+'_'+val.join('_');
		}		
	}
	// 属性
	if(t == 'attr')
	{
		if(get_parment.hasOwnProperty('attr'))		
		{		
			get_parment.attr += '@'+key+'_'+val.join('_');
		}		
		else	
		{		
			get_parment.attr = key+'_'+val.join('_');
		}		
	}
   // 组装请求的url	
  var url = '';
  for ( var k in get_parment )
  { 
		url += "&"+k+'='+get_parment[k];
  } 

	//console.log('get_parment',get_parment);	
	location.href ="/index.php?m=Home&c=Goods&a=goodsList"+url;
}

</script>
</body>
</html>