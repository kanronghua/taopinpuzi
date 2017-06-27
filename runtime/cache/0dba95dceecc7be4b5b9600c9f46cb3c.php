<?php
//000000000000s:280580:"<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品列表-</title>
<meta http-equiv="keywords" content="" />
<meta name="description" content="" />
</head>

<body>
<!--------头部开始-------------->
<script src="/public/js/jquery-1.10.2.min.js"></script>
<script src="/public/js/global.js"></script>
<!--最顶部-->
<link rel="stylesheet" href="/template/pc/default/static/css/index.css" type="text/css">
<div class="site-topbar">
    <div class="layout">
        <div class="t1-l">
            <ul class="t1-l-ul">
                <li class="t1font"><a target="_blank" href="/index.php/Home/Article/detail/article_id/22.html">在线客服</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="javascript:void();">TPshop</a></li>
                <li class="t1img">&nbsp;</li>
            </ul>
        </div>
        <div class="t1-r">
            <ul class="t1-r-ul islogin" style="display:none;">
                <li class="t1font"> <a href="/index.php/Home/User/index.html" class="logon userinfo"></a></li>
                <li class="t1img"><a href="/index.php/Home/user/logout.html">安全退出</a></li>                    
                <li class="t1img">&nbsp;</li>
                <li class="t1img">&nbsp;</li>                
                <li class="t1font"><a href="/index.php/Home/User/order_list.html">我的订单</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="/index.php/Home/Cart/cart.html">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li>                
            </ul>
            <ul class="t1-r-ul nologin" style="display:none;">
                <li class="t1font"><a href="/index.php/Home/user/login.html">登录</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="/index.php/Home/Cart/cart.html">购物车</a></li>
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
.qqserver-header div{width:90px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-419px -80px}
.qqserver_icon-alert{width:16px;height:14px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-595px -85px}
.qqserver li a span{width:30px;height:23px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-265px 0}
.qqserver li a .qqserver-service-alert{width:30px;height:22px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-342px 0}
.qqserver_fold div{width:26px;height:132px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:0 0}
.qqserver_fold:hover div{width:26px;height:132px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-27px 0}
.qqserver_arrow{width:18px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-435px 0}
.qqserver_arrow:hover{width:18px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-435px -38px}
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
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=879008785&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>琳琳</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=879008785&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>云云</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=879008785&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
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
<!--顶部banner结束-->    

<header>
    
    <div class="layout">
    
    <!--logo开始-->
        <div class="logo"><a href="/" title="TPshop"><img src="/public/images/newLogo.png" alt="TPshop"></a></div>
    <!--logo结束-->
    
    <!-- 搜索开始-->
        <div class="searchBar">
            <div class="searchBar-form">
                <form name="sourch_form" id="sourch_form" method="post" action="/index.php/Home/Goods/search.html">
                    <input type="text" class="text" name="q" id="q" value=""  placeholder="  搜索关键字"/>
                    <input type="button" class="button" value="搜索" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"/>
                </form>
            </div>
            <div class="searchBar-hot">
                <b>热门搜索</b>
               	        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E6%89%8B%E6%9C%BA.html" class="ht">手机</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%B0%8F%E7%B1%B3.html" >小米</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/iphone.html" >iphone</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E4%B8%89%E6%98%9F.html" >三星</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%8D%8E%E4%B8%BA.html" >华为</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%86%B0%E7%AE%B1.html" >冰箱</a>
        		            </div>
        </div>
        <!-- 搜索结束-->
        
        <div class="ri-mall">
            <div class="my-mall">
            <!---我的商城-开始 -->
                <div class="mall">
                    <div class="le"><a href="/index.php/Home/User.html" >我的商城</a></div> 
                </div>
                <!---我的商城-结束 -->
            </div>
            <div class="my-mall" id="header_cart_list">
                <!---购物车-开始 -->
                <div class="micart">
                    <div class="le les">
                    	<a href="/index.php/Home/Cart/cart.html" >我的购物车
                            <span class="shopping-num"><em id="cart_quantity"></em><b></b></span>
                        </a>                       
                    </div>
                    
                    <div class="ri ris" style="display:">
                                                   <div class="micart-about">
                                <span class="micart-xg">您的购物车是空的，赶紧选购吧！</span>
                            </div>
                                                <div class="commod">
                        <ul>
                           							
                        </ul>
                        </div>
                        <div class="settle">
                            <p>共<em></em>件商品，金额合计<b>¥&nbsp;</b></p>
                            <a class="js-button" href="/index.php/Home/Cart/cart.html">去结算</a>
                        </div>
                    </div>
                </div>
                <!---购物车-结束 -->
                
            </div>
        </div>
        <div class="qr-code">
            <img src="/template/pc/default/static/images/qrcode_vmall_app01.png" alt="二维码" />
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
            	<div class="list"  >
                   <ul class="list_ul"> 
                                              
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/1.html"><span>手机 、 数码 、 通信</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/12.html">手机配件</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/13.html">摄影摄像</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/14.html">运营商</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/12.html">手机配件<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/13.html">摄影摄像<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/14.html">运营商<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/15.html">数码配件<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/16.html">娱乐影视<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/17.html">电子教育<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/12.html">手机配件</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/100.html">电池 电源 充电器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/102.html">贴膜,保护套</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/13.html">摄影摄像</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/103.html">数码相机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/104.html">单反相机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/105.html">摄像机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/106.html">镜头</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/107.html">数码相框</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/14.html">运营商</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/108.html">选号码</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/109.html">办套餐</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/110.html">合约机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/111.html">中国移动</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/15.html">数码配件</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/112.html">充值卡</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/113.html">读卡器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/114.html">支架</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/115.html">滤镜</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/16.html">娱乐影视</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/116.html">音响麦克风</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/117.html">耳机/耳麦</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/17.html">电子教育</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/118.html">学生平板</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/119.html">点读机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/120.html">电纸书</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/121.html">电子词典</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/122.html">复读机</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/18.html">手机通讯</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/124.html">对讲机</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/123.html">手机</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                   </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/2.html"><span>家用电器</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/19.html">生活电器</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/20.html">大家电</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/21.html">厨房电器</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/19.html">生活电器<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/20.html">大家电<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/21.html">厨房电器<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/22.html">个护健康<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/23.html">五金交电<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/19.html">生活电器</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/125.html">录音机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/126.html">饮水机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/127.html">烫衣机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/128.html">电风扇</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/129.html">电话机</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/20.html">大家电</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/130.html">电视</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/131.html">冰箱</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/132.html">空调</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/133.html">洗衣机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/134.html">热水器</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/21.html">厨房电器</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/135.html">料理/榨汁机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/136.html">电饭锅</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/137.html">微波炉</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/138.html">豆浆机</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/22.html">个护健康</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/139.html">剃须刀</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/140.html">吹风机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/141.html">按摩器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/142.html">足浴盆</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/143.html">血压计</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/23.html">五金交电</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/144.html">厨卫五金</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/145.html">门铃门锁</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/146.html">开关插座</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/147.html">电动工具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/148.html">监控安防</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/149.html">仪表仪器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/150.html">电线线缆</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/151.html">浴霸/排气扇</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/152.html">灯具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/153.html">水龙头</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/3.html"><span>电脑、办公</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/24.html">网络产品</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/25.html">办公设备</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/26.html">文具耗材</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/24.html">网络产品<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/25.html">办公设备<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/26.html">文具耗材<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/27.html">电脑整机<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/28.html">电脑配件<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/29.html">外设产品<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/24.html">网络产品</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/154.html">网络配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/155.html">路由器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/156.html">网卡</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/157.html">交换机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/158.html">网络存储</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/159.html">3G/4G/5G上网</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/160.html">网络盒子</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/25.html">办公设备</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/161.html">复合机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/162.html">办公家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/163.html">摄影机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/164.html">碎纸机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/165.html">白板</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/166.html">投影配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/167.html">考勤机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/168.html">多功能一体机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/169.html">收款/POS机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/170.html">打印机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/171.html">会员视频音频</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/172.html">传真设备</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/173.html">保险柜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/174.html">验钞/点钞机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/175.html">装订/封装机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/176.html">扫描设备</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/177.html">安防监控</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/26.html">文具耗材</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/178.html">文具管理</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/179.html">本册便签</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/180.html">硒鼓/墨粉</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/181.html">计算器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/182.html">墨盒</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/183.html">笔类</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/184.html">色带</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/185.html">画具画材</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/186.html">纸类</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/187.html">财会用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/188.html">办公文具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/189.html">刻录碟片</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/190.html">学生文具</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/27.html">电脑整机</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/191.html">平板电脑</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/192.html">台式机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/193.html">一体机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/194.html">笔记本</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/195.html">超极本</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/28.html">电脑配件</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/196.html">内存</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/197.html">组装电脑</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/198.html">机箱</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/199.html">电源</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/200.html">CPU</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/201.html">显示器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/202.html">主板</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/203.html">刻录机/光驱</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/204.html">显卡</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/205.html">声卡/扩展卡</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/206.html">硬盘</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/207.html">散热器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/208.html">固态硬盘</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/209.html">装机配件</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/29.html">外设产品</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/210.html">线缆</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/211.html">鼠标</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/212.html">手写板</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/213.html">键盘</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/214.html">电脑工具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/215.html">网络仪表仪器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/216.html">UPS</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/217.html">U盘</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/218.html">插座</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/219.html">移动硬盘</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/220.html">鼠标垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/221.html">摄像头</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/30.html">游戏设备</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/222.html">游戏软件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/223.html">游戏周边</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/224.html">游戏机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/225.html">游戏耳机</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/226.html">手柄方向盘</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/4.html"><span>家居、家具、家装、厨具</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/31.html">生活日用</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/32.html">家装软饰</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/33.html">宠物生活</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/31.html">生活日用<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/32.html">家装软饰<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/33.html">宠物生活<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/34.html">厨具<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/35.html">家装建材<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/36.html">家纺<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/31.html">生活日用</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/227.html">清洁工具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/228.html">收纳用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/229.html">雨伞雨具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/230.html">浴室用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/231.html">缝纫/针织用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/232.html">洗晒/熨烫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/233.html">净化除味</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/32.html">家装软饰</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/234.html">节庆饰品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/235.html">手工/十字绣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/236.html">桌布/罩件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/237.html">钟饰</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/238.html">地毯地垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/239.html">装饰摆件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/240.html">沙发垫套/椅垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/241.html">花瓶花艺</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/242.html">帘艺隔断</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/243.html">创意家居</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/244.html">相框/照片墙</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/245.html">保暖防护</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/246.html">装饰字画</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/247.html">香薰蜡烛</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/248.html">墙贴/装饰贴</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/33.html">宠物生活</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/256.html">洗护美容</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/257.html">家居日用</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/258.html">医疗保健</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/259.html">出行装备</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/249.html">水族用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/250.html">宠物玩具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/251.html">宠物主粮</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/252.html">宠物牵引</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/253.html">宠物零食</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/254.html">宠物驱虫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/255.html">猫砂/尿布</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/34.html">厨具</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/260.html">剪刀菜饭</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/261.html">厨房配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/262.html">水具酒具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/263.html">餐具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/264.html">茶具/咖啡具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/265.html">烹饪锅具</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/35.html">家装建材</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/266.html">电工电料</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/267.html">墙地材料</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/268.html">装饰材料</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/269.html">装修服务</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/270.html">沐浴花洒</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/271.html">灯饰照明</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/272.html">开关插座</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/273.html">厨房卫浴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/274.html">油漆涂料</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/275.html">五金工具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/276.html">龙头</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/36.html">家纺</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/277.html">床品套件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/278.html">抱枕靠垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/279.html">被子</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/280.html">布艺软饰</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/281.html">被芯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/282.html">窗帘窗纱</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/283.html">床单被罩</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/284.html">蚊帐</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/285.html">床垫床褥</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/286.html">凉席</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/287.html">电地毯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/288.html">毯子</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/289.html">毛巾浴巾</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/37.html">家具</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/290.html">餐厅家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/291.html">电脑椅</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/292.html">书房家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/293.html">衣柜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/294.html">储物家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/295.html">茶几</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/296.html">阳台/户外</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/297.html">电视柜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/298.html">商业办公</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/299.html">餐桌</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/300.html">卧室家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/301.html">床</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/302.html">电脑桌</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/303.html">客厅家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/304.html">床垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/305.html">鞋架/衣帽架</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/306.html">客厅家具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/307.html">沙发</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/38.html">灯具</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/308.html">吸顶灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/309.html">吊灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/310.html">筒灯射灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/311.html">氛围照明</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/312.html">LED灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/313.html">节能灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/314.html">落地灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/315.html">五金电器</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/316.html">应急灯/手电</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/317.html">台灯</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/318.html">装饰灯</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/5.html"><span>男装、女装、童装、内衣</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/39.html">女装</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/40.html">男装</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/41.html">内衣</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/39.html">女装<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/40.html">男装<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/41.html">内衣<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/39.html">女装</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/319.html">短外套</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/320.html">羊毛衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/321.html">雪纺衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/322.html">礼服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/323.html">风衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/324.html">羊绒衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/325.html">牛仔裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/326.html">马甲</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/327.html">衬衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/328.html">半身裙</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/329.html">休闲裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/330.html">吊带/背心</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/331.html">羽绒服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/332.html">T恤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/333.html">大码女装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/334.html">正装裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/335.html">设计师/潮牌</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/336.html">毛呢大衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/337.html">小西装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/338.html">中老年女装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/339.html">加绒裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/340.html">棉服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/341.html">打底衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/342.html">皮草</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/343.html">短裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/344.html">连衣裙</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/345.html">打底裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/346.html">真皮皮衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/347.html">婚纱</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/348.html">卫衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/349.html">针织衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/350.html">仿皮皮衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/351.html">旗袍/唐装</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/40.html">男装</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/352.html">羊毛衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/353.html">休闲裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/354.html">POLO衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/355.html">加绒裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/356.html">衬衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/357.html">短裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/358.html">真皮皮衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/359.html">毛呢大衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/360.html">中老年男装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/361.html">卫衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/362.html">风衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/363.html">大码男装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/364.html">羽绒服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/365.html">T恤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/366.html">仿皮皮衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/367.html">羊绒衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/368.html">棉服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/369.html">马甲/背心</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/370.html">西服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/371.html">设计师/潮牌</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/372.html">针织衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/373.html">西服套装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/374.html">西裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/375.html">工装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/376.html">夹克</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/377.html">牛仔裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/378.html">卫裤/运动裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/379.html">唐装/中山装</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/41.html">内衣</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/380.html">保暖内衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/381.html">大码内衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/382.html">吊带/背心</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/383.html">秋衣秋裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/384.html">文胸</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/385.html">内衣配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/386.html">睡衣/家居服</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/387.html">男式内裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/388.html">泳衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/389.html">打底裤袜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/390.html">女式内裤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/391.html">塑身美体</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/392.html">休闲棉袜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/393.html">连裤袜/丝袜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/394.html">美腿袜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/395.html">商务男袜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/396.html">打底衫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/397.html">情趣内衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/398.html">情侣睡衣</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/399.html">少女文胸</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/400.html">文胸套装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/401.html">抹胸</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/7.html"><span>鞋、箱包、珠宝、手表</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/49.html">精品男包</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/50.html">功能箱包</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/51.html">珠宝</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/49.html">精品男包<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/50.html">功能箱包<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/51.html">珠宝<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/52.html">钟表<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/53.html">时尚女鞋<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/54.html">流行男鞋<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/49.html">精品男包</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/436.html">商务公文包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/437.html">单肩/斜挎包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/438.html">男士手包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/439.html">双肩包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/440.html">钱包/卡包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/441.html">钥匙包</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/50.html">功能箱包</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/442.html">旅行包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/443.html">妈咪包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/444.html">电脑包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/445.html">休闲运动包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/446.html">相机包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/447.html">腰包/胸包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/448.html">登山包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/449.html">旅行配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/450.html">拉杆箱/拉杆包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/451.html">书包</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/51.html">珠宝</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/452.html">彩宝</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/453.html">时尚饰品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/454.html">铂金</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/455.html">钻石</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/456.html">天然木饰</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/457.html">翡翠玉石</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/458.html">珍珠</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/459.html">纯金K金饰品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/460.html">金银投资</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/461.html">银饰</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/462.html">水晶玛瑙</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/52.html">钟表</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/463.html">座钟挂钟</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/464.html">男表</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/465.html">女表</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/466.html">儿童表</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/467.html">智能手表</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/53.html">时尚女鞋</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/468.html">女靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/469.html">布鞋/绣花鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/470.html">鱼嘴鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/471.html">雪地靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/472.html">凉鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/473.html">雨鞋/雨靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/474.html">单鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/475.html">拖鞋/人字拖</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/476.html">鞋配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/477.html">高跟鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/478.html">马丁靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/479.html">帆布鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/480.html">休闲鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/481.html">妈妈鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/482.html">踝靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/483.html">防水台</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/484.html">内增高</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/485.html">松糕鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/486.html">坡跟鞋</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/54.html">流行男鞋</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/487.html">增高鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/488.html">鞋配件</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/489.html">拖鞋/人字拖</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/490.html">凉鞋/沙滩鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/491.html">休闲鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/492.html">雨鞋/雨靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/493.html">商务休闲鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/494.html">定制鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/495.html">正装鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/496.html">男靴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/497.html">帆布鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/498.html">传统布鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/499.html">工装鞋</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/500.html">功能鞋</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/55.html">潮流女包</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/501.html">钥匙包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/502.html">单肩包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/503.html">手提包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/504.html">斜挎包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/505.html">双肩包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/506.html">钱包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/507.html">手拿包/晚宴包</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/508.html">卡包/零钱包</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                                                   
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/6.html"><span>个人化妆</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                                  	 	<a href="/index.php/Home/Goods/goodsList/id/42.html">身体护肤</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/43.html">口腔护理</a>
                                                                                        	 	<a href="/index.php/Home/Goods/goodsList/id/44.html">女性护理</a>
                                                                                     </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                           <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/42.html">身体护肤<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/43.html">口腔护理<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/44.html">女性护理<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/45.html">香水彩妆<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/46.html">清洁用品<i>＞</i></a>
                                                                                                   <a class="list_big_o ma-le-30" href="/index.php/Home/Goods/goodsList/id/47.html">面部护肤<i>＞</i></a>
                                                                                                                                   
                                        </div>
                                        <div class="subitems">                                        
                                                                                               <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/42.html">身体护肤</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/402.html">沐浴</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/403.html">润肤</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/404.html">颈部</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/405.html">手足</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/406.html">纤体塑形</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/407.html">美胸</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/408.html">套装</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/43.html">口腔护理</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/409.html">牙膏/牙粉</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/410.html">牙刷/牙线</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/411.html">漱口水</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/412.html">套装</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/44.html">女性护理</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/413.html">卫生巾</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/414.html">卫生护垫</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/415.html">私密护理</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/416.html">脱毛膏</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/45.html">香水彩妆</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/417.html">唇部</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/418.html">美甲</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/419.html">美容工具</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/420.html">套装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/421.html">香水</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/422.html">底妆</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/423.html">腮红</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/424.html">眼部</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/46.html">清洁用品</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/95.html">纸品湿巾</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/96.html">衣物清洁</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/97.html">家庭清洁</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/98.html">一次性用品</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/99.html">驱虫用品</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/47.html">面部护肤</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/425.html">面膜</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/426.html">剃须</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/427.html">套装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/428.html">清洁</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/429.html">护肤</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="/index.php/Home/Goods/goodsList/id/48.html">洗发护发</a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                                                                                      
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/430.html">套装</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/431.html">洗发</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/432.html">护发</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/433.html">染发</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/434.html">造型</a>
                                                                                                                         
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="/index.php/Home/Goods/goodsList/id/435.html">假发</a>
                                                                                                                      </dd>
                                                    </dl>
                                                                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                            	
                	</ul>
                </div>
            </div>
            <!--全部商品-结束-->
            
            <div class="ongoods">
            	<ul class="navlist">
            		<li class="homepage"><a href="/"><span>首页</span></a></li>
                                			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=123" target="_blank" <span>手机城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=51" target="_blank" <span>珠宝</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=20" target="_blank" <span>家电城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Index&amp;a=promoteList" <span>促销商品</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=45" target="_blank" <span>化妆品</span></a></li>
					            			<li class="page"><a href="/index.php/Home/Goods/goodsList/id/1.html" target="_blank" <span>数码城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Activity&amp;a=group_list" <span>团购</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=integralMall" <span>积分商城</span></a></li>
					 
            	</ul>
            </div>
        </div>
    </div>
   <!-- 导航-结束-->
<script>
$(function(){
    var active_li = '';
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
<link rel="stylesheet" href="/template/pc/default/static/css/page.css" type="text/css">
<link rel="stylesheet" href="/template/pc/default/static/css/category.css" type="text/css">
<link rel="stylesheet" href="/template/pc/default/static/css/common.min.css" type="text/css">

<script type="text/javascript" src="/template/pc/default/static/js/jquery.jqzoom.js"></script> 
<script src="/public/js/pc_common.js"></script>
<script src="/public/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->
	 
<!--------中间内容-------------->
<div id="warpper" class="clearfix">
  <div id="path-new" class="clearfix colaaa text13">
    <div class="item fl">
      <div class="fl">
        <span class="u-nav-title">
                      <a href="/index.php/Home/Goods/goodsList/id/2.html">家用电器</a>
                  </span>
      </div>
      <div class="fl" id="m-selected-cery">
        <div class="u-left-icon"><i class="z-arrow"></i></div>
        
        <!--如果当前分类是三级分类 则二级也要显示-->
                <!--当前分类-->
                  <div class="u-nav-attr"> <a href="/index.php/Home/Goods/goodsList/id/2.html">大家电<i></i></a>
            <span class="z-blank-bar"></span>
            <ul class="u-attr-list">
                                <li><a href="/index.php/Home/Goods/goodsList/id/19.html">生活电器</a></li>
                                  <li><a href="/index.php/Home/Goods/goodsList/id/20.html">大家电</a></li>
                                  <li><a href="/index.php/Home/Goods/goodsList/id/21.html">厨房电器</a></li>
                                  <li><a href="/index.php/Home/Goods/goodsList/id/22.html">个护健康</a></li>
                                  <li><a href="/index.php/Home/Goods/goodsList/id/23.html">五金交电</a></li>
                            </ul>
          </div>
        
      </div>
    </div>
    <div class="u-left-icon"><i class="z-arrow"></i></div>
    
     
  </div>
  <div class="cata_cart_left">
    <div class="m-cart">
      <p class="title">
                  <a href="/index.php/Home/Goods/goodsList/id/2.html">家用电器</a>
              </p>
      <!--search/?q=-->
      <div id="cata_list"> 
        <!-- 分类树 -->
        <ul class="menu_3">
                    <li class="menu_two">
                          <span name="submenuicon" class="menuplus"></span>
                        <a  href="/index.php/Home/Goods/goodsList/id/19.html" class="menu3_title">生活电器</a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
                          style="display: none;">
                      <li><a  href="/index.php/Home/Goods/goodsList/id/125.html" 
            >录音机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/126.html" 
            >饮水机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/127.html" 
            >烫衣机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/128.html" 
            >电风扇</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/129.html" 
            >电话机</a></li>
                  </ul>
      </div>
      </li>
                <li class="menu_two">
                          <span name="submenuicon" class="menuminus"></span>
                          <a  href="/index.php/Home/Goods/goodsList/id/20.html" class="menu3_title">大家电</a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
             style="display: block;"
              >
                      <li><a  href="/index.php/Home/Goods/goodsList/id/130.html" 
            >电视</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/131.html" 
            >冰箱</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/132.html" 
            >空调</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/133.html" 
            >洗衣机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/134.html" 
            >热水器</a></li>
                  </ul>
      </div>
      </li>
                <li class="menu_two">
                          <span name="submenuicon" class="menuplus"></span>
                        <a  href="/index.php/Home/Goods/goodsList/id/21.html" class="menu3_title">厨房电器</a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
                          style="display: none;">
                      <li><a  href="/index.php/Home/Goods/goodsList/id/135.html" 
            >料理/榨汁机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/136.html" 
            >电饭锅</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/137.html" 
            >微波炉</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/138.html" 
            >豆浆机</a></li>
                  </ul>
      </div>
      </li>
                <li class="menu_two">
                          <span name="submenuicon" class="menuplus"></span>
                        <a  href="/index.php/Home/Goods/goodsList/id/22.html" class="menu3_title">个护健康</a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
                          style="display: none;">
                      <li><a  href="/index.php/Home/Goods/goodsList/id/139.html" 
            >剃须刀</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/140.html" 
            >吹风机</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/141.html" 
            >按摩器</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/142.html" 
            >足浴盆</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/143.html" 
            >血压计</a></li>
                  </ul>
      </div>
      </li>
                <li class="menu_two">
                          <span name="submenuicon" class="menuplus"></span>
                        <a  href="/index.php/Home/Goods/goodsList/id/23.html" class="menu3_title">五金交电</a>
            <div class="second_div">
            <span class="second_span"></span>
            <ul 
                          style="display: none;">
                      <li><a  href="/index.php/Home/Goods/goodsList/id/144.html" 
            >厨卫五金</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/145.html" 
            >门铃门锁</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/146.html" 
            >开关插座</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/147.html" 
            >电动工具</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/148.html" 
            >监控安防</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/149.html" 
            >仪表仪器</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/150.html" 
            >电线线缆</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/151.html" 
            >浴霸/排气扇</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/152.html" 
            >灯具</a></li>
                    <li><a  href="/index.php/Home/Goods/goodsList/id/153.html" 
            >水龙头</a></li>
                  </ul>
      </div>
      </li>
            </ul>
      <!-- 分类树 --> 
    </div>
  </div>
  <!-- 推荐热卖-->
  <div class="m-rehotbox mt10" style='display:block;'>
    <h2 class="rehottit">推荐热卖</h2>
    <div class="rehotcon" id="rehotcon">
     
          <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="/index.php/Home/Goods/goodsInfo/id/1.html">
                 <img src="/public/upload/goods/thumb/1/goods_thumb_1_200_200.jpeg">
                  <span>Apple iPhone 6s Plus 16G 玫瑰金 移动联通电信4G手机</span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i>6107.00</span>
            <span class="old"><i class="fn-rmb">¥</i>6007.00</span>
          </p>
        </div>
      </div>
           <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="/index.php/Home/Goods/goodsInfo/id/39.html">
                 <img src="/public/upload/goods/thumb/39/goods_thumb_39_200_200.jpeg">
                  <span>华为（HUAWEI） M2 10.0 平板电脑 WiFi 月光银</span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i>2388.00</span>
            <span class="old"><i class="fn-rmb">¥</i>2288.00</span>
          </p>
        </div>
      </div>
           <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="/index.php/Home/Goods/goodsInfo/id/40.html">
                 <img src="/public/upload/goods/thumb/40/goods_thumb_40_200_200.jpeg">
                  <span>荣耀X2 标准版 双卡双待双通 移动/联通双4G 16GB ROM（月光银）</span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i>2099.00</span>
            <span class="old"><i class="fn-rmb">¥</i>1999.00</span>
          </p>
        </div>
      </div>
           <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="/index.php/Home/Goods/goodsInfo/id/41.html">
                 <img src="/public/upload/goods/thumb/41/goods_thumb_41_200_200.jpeg">
                  <span>华为（HUAWEI） M2 8英寸平板电脑（1920×1200 IPS屏 海思麒麟930 16GB WiFi）香槟金</span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i>1688.00</span>
            <span class="old"><i class="fn-rmb">¥</i>1588.00</span>
          </p>
        </div>
      </div>
           <div class="hotitem">
        <div class="itemin">
             <a class="proname"  href="/index.php/Home/Goods/goodsInfo/id/42.html">
                 <img src="/public/upload/goods/thumb/42/goods_thumb_42_200_200.png">
                  <span>Teclast/台电 X80 Plus WIFI 32GB Win10平板电脑双系统8英寸</span>
             </a>
          <p class="itemprice">
            <span class="new" rehot="90101748934_201480" style="display: block; float: left;"><i class="fn-rmb">¥</i>599.00</span>
            <span class="old"><i class="fn-rmb">¥</i>499.00</span>
          </p>
        </div>
      </div>
      
       
    </div>
  </div>
</div>
<div class="cata_shop_right" id="tracker_category"> 
  <!-- 館頁屬性 -->
  <div class="attribute_content">
    <div class="attrs"> 
      <!--帅选品牌-->
            <!--帅选规格-->
            <!--帅选属性-->
              <div class='m-tr' >
          <div class='g-left'>
            <p>品牌</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_创维(Skyworth)" href="/index.php/home/Goods/goodsList/id/20/attr/249_创维(Skyworth)" data-key='249' data-val='创维(Skyworth)'><i></i>创维(Skyworth)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_TCL" href="/index.php/home/Goods/goodsList/id/20/attr/249_TCL" data-key='249' data-val='TCL'><i></i>TCL</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_海信(Hisense)" href="/index.php/home/Goods/goodsList/id/20/attr/249_海信(Hisense)" data-key='249' data-val='海信(Hisense)'><i></i>海信(Hisense)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_酷开(Coocaa)" href="/index.php/home/Goods/goodsList/id/20/attr/249_酷开(Coocaa)" data-key='249' data-val='酷开(Coocaa)'><i></i>酷开(Coocaa)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_创维彩电 55S9" href="/index.php/home/Goods/goodsList/id/20/attr/249_创维彩电 55S9" data-key='249' data-val='创维彩电 55S9'><i></i>创维彩电 55S9</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_夏普(sharp)" href="/index.php/home/Goods/goodsList/id/20/attr/249_夏普(sharp)" data-key='249' data-val='夏普(sharp)'><i></i>夏普(sharp)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_海力(Horion)" href="/index.php/home/Goods/goodsList/id/20/attr/249_海力(Horion)" data-key='249' data-val='海力(Horion)'><i></i>海力(Horion)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_微鲸(WHALEY)" href="/index.php/home/Goods/goodsList/id/20/attr/249_微鲸(WHALEY)" data-key='249' data-val='微鲸(WHALEY)'><i></i>微鲸(WHALEY)</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/249_长虹(CHANGHONG)" href="/index.php/home/Goods/goodsList/id/20/attr/249_长虹(CHANGHONG)" data-key='249' data-val='长虹(CHANGHONG)'><i></i>长虹(CHANGHONG)</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>电视3D功能</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/254_支持" href="/index.php/home/Goods/goodsList/id/20/attr/254_支持" data-key='254' data-val='支持'><i></i>支持</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/254_不支持" href="/index.php/home/Goods/goodsList/id/20/attr/254_不支持" data-key='254' data-val='不支持'><i></i>不支持</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>屏幕尺寸</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/252_30" href="/index.php/home/Goods/goodsList/id/20/attr/252_30" data-key='252' data-val='30'><i></i>30</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/252_50" href="/index.php/home/Goods/goodsList/id/20/attr/252_50" data-key='252' data-val='50'><i></i>50</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/252_55" href="/index.php/home/Goods/goodsList/id/20/attr/252_55" data-key='252' data-val='55'><i></i>55</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/252_40" href="/index.php/home/Goods/goodsList/id/20/attr/252_40" data-key='252' data-val='40'><i></i>40</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/252_42" href="/index.php/home/Goods/goodsList/id/20/attr/252_42" data-key='252' data-val='42'><i></i>42</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>包装尺寸</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_823x980x1891mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_823x980x1891mm" data-key='311' data-val='823x980x1891mm'><i></i>823x980x1891mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_950x778x1870mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_950x778x1870mm" data-key='311' data-val='950x778x1870mm'><i></i>950x778x1870mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_633x651x1871mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_633x651x1871mm" data-key='311' data-val='633x651x1871mm'><i></i>633x651x1871mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_873x980x1891mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_873x980x1891mm" data-key='311' data-val='873x980x1891mm'><i></i>873x980x1891mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_980x790x1840mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_980x790x1840mm" data-key='311' data-val='980x790x1840mm'><i></i>980x790x1840mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_630x696x1862mm" href="/index.php/home/Goods/goodsList/id/20/attr/311_630x696x1862mm" data-key='311' data-val='630x696x1862mm'><i></i>630x696x1862mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_641*735*1787毫米" href="/index.php/home/Goods/goodsList/id/20/attr/311_641*735*1787毫米" data-key='311' data-val='641*735*1787毫米'><i></i>641*735*1787毫米</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/311_510*497*855毫米" href="/index.php/home/Goods/goodsList/id/20/attr/311_510*497*855毫米" data-key='311' data-val='510*497*855毫米'><i></i>510*497*855毫米</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>毛重</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_121kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_121kg" data-key='312' data-val='121kg'><i></i>121kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_109kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_109kg" data-key='312' data-val='109kg'><i></i>109kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_74kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_74kg" data-key='312' data-val='74kg'><i></i>74kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_130kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_130kg" data-key='312' data-val='130kg'><i></i>130kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_117kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_117kg" data-key='312' data-val='117kg'><i></i>117kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_67kg" href="/index.php/home/Goods/goodsList/id/20/attr/312_67kg" data-key='312' data-val='67kg'><i></i>67kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_60千克" href="/index.php/home/Goods/goodsList/id/20/attr/312_60千克" data-key='312' data-val='60千克'><i></i>60千克</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/312_27千克" href="/index.php/home/Goods/goodsList/id/20/attr/312_27千克" data-key='312' data-val='27千克'><i></i>27千克</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>品牌</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_海尔" href="/index.php/home/Goods/goodsList/id/20/attr/313_海尔" data-key='313' data-val='海尔'><i></i>海尔</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_Midea/美的" href="/index.php/home/Goods/goodsList/id/20/attr/313_Midea/美的" data-key='313' data-val='Midea/美的'><i></i>Midea/美的</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_Ronshen/容声" href="/index.php/home/Goods/goodsList/id/20/attr/313_Ronshen/容声" data-key='313' data-val='Ronshen/容声'><i></i>Ronshen/容声</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_Haier/海尔" href="/index.php/home/Goods/goodsList/id/20/attr/313_Haier/海尔" data-key='313' data-val='Haier/海尔'><i></i>Haier/海尔</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_SIEMENS/西门子" href="/index.php/home/Goods/goodsList/id/20/attr/313_SIEMENS/西门子" data-key='313' data-val='SIEMENS/西门子'><i></i>SIEMENS/西门子</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/313_MeiLing/美菱" href="/index.php/home/Goods/goodsList/id/20/attr/313_MeiLing/美菱" data-key='313' data-val='MeiLing/美菱'><i></i>MeiLing/美菱</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>制冷方式</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/314_风冷" href="/index.php/home/Goods/goodsList/id/20/attr/314_风冷" data-key='314' data-val='风冷'><i></i>风冷</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/314_直冷" href="/index.php/home/Goods/goodsList/id/20/attr/314_直冷" data-key='314' data-val='直冷'><i></i>直冷</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>能效等级</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/315_一级" href="/index.php/home/Goods/goodsList/id/20/attr/315_一级" data-key='315' data-val='一级'><i></i>一级</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/315_五级" href="/index.php/home/Goods/goodsList/id/20/attr/315_五级" data-key='315' data-val='五级'><i></i>五级</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>包装尺寸</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/316_680x590x910mm" href="/index.php/home/Goods/goodsList/id/20/attr/316_680x590x910mm" data-key='316' data-val='680x590x910mm'><i></i>680x590x910mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/316_672x672x920mm" href="/index.php/home/Goods/goodsList/id/20/attr/316_672x672x920mm" data-key='316' data-val='672x672x920mm'><i></i>672x672x920mm</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/316_624x553x1474mm" href="/index.php/home/Goods/goodsList/id/20/attr/316_624x553x1474mm" data-key='316' data-val='624x553x1474mm'><i></i>624x553x1474mm</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>毛重</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/317_68kg" href="/index.php/home/Goods/goodsList/id/20/attr/317_68kg" data-key='317' data-val='68kg'><i></i>68kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/317_76kg" href="/index.php/home/Goods/goodsList/id/20/attr/317_76kg" data-key='317' data-val='76kg'><i></i>76kg</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/317_47kg" href="/index.php/home/Goods/goodsList/id/20/attr/317_47kg" data-key='317' data-val='47kg'><i></i>47kg</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>品牌</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/318_Littleswan/小天鹅" href="/index.php/home/Goods/goodsList/id/20/attr/318_Littleswan/小天鹅" data-key='318' data-val='Littleswan/小天鹅'><i></i>Littleswan/小天鹅</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/318_Haier/海尔" href="/index.php/home/Goods/goodsList/id/20/attr/318_Haier/海尔" data-key='318' data-val='Haier/海尔'><i></i>Haier/海尔</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>型号</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/319_TG70-VT1263ED" href="/index.php/home/Goods/goodsList/id/20/attr/319_TG70-VT1263ED" data-key='319' data-val='TG70-VT1263ED'><i></i>TG70-VT1263ED</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/319_EG8012B29WI" href="/index.php/home/Goods/goodsList/id/20/attr/319_EG8012B29WI" data-key='319' data-val='EG8012B29WI'><i></i>EG8012B29WI</a> </li>
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/319_BCD-160TMPQ" href="/index.php/home/Goods/goodsList/id/20/attr/319_BCD-160TMPQ" data-key='319' data-val='BCD-160TMPQ'><i></i>BCD-160TMPQ</a> </li>
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
              <div class='m-tr' >
          <div class='g-left'>
            <p>能效等级</p>
          </div>
          <div class='g-right ' >
            <div class="g-list">
              <ul class="f-list h76 ">
                                  <li> <a data-href="/index.php/home/Goods/goodsList/id/20/attr/320_一级" href="/index.php/home/Goods/goodsList/id/20/attr/320_一级" data-key='320' data-val='一级'><i></i>一级</a> </li>
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
            
      <!--价格帅选-->
            <div class='m-tr' >
        <div class='g-left'>
          <p>价格</p>
        </div>
        <div class='g-right ' >
          <div class="g-list">
            <ul class="f-list h76 ">
                              <li> <a href="/index.php/home/Goods/goodsList/id/20/price/0-2000" data-attr-desc=''><i></i>2000元以下</a> </li>
                              <li> <a href="/index.php/home/Goods/goodsList/id/20/price/2000-4000" data-attr-desc=''><i></i>2000-4000元</a> </li>
                              <li> <a href="/index.php/home/Goods/goodsList/id/20/price/8000-10000" data-attr-desc=''><i></i>10000元以上</a> </li>
              			  <li class="m-pricebox">
              <form action="/index.php/Home/Goods/goodsList/id/20" method="post" id="price_form">
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
           <!--价格帅选 end-->
      <a  class="f-out-more" href="javascript:;">更多选项<i></i></a> </div>
  </div>
  <!-- 館頁屬性 --> 
  
  <!-- 商品列表 -->
  <div class="searchbox">
    <div class="list clearfix">
      <ul class="left text12" id="order_ul">
        <!--        <li><a class="col7ac " href1="&sort=recommand&asc=0" style="cursor:pointer;">综合</a></li>-->
        <li> <a class="col7ac  main" href="/index.php/Home/Goods/goodsList/id/20" style="cursor:pointer;"> 默认 </a> </li>
        <li> <a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/20/sort/sales_sum" style="cursor:pointer;"> 销量 </a> </li>
                
                	<li><a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/20/sort/shop_price/sort_asc/desc" style="cursor:pointer;">价格<span class="icon_s "></span></a></li>
            
                
        <li><a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/20/sort/comment_count" style="cursor:pointer;">评论</a></li>
        <li><a class="col7ac  "  href="/index.php/Home/Goods/goodsList/id/20/sort/is_new" style="cursor:pointer;">新品</a></li>
      </ul>
      <!-- Page -->
      <div class="right text12" id="pagenavi">
        <div class="all-number">
          <span>共21个商品</span>
        </div>
        <p class="pageArea" data-countPage="1"> 
          <!--<a class="bg_img1"></a>-->
          <span class="colf22e01 fontT">1</span>
          /
          <span class="page_count fontT">2</span>
          <!--<a href="" class="bg_img2"></a> </p>-->
      </div>
      <!-- Page End--> 
    </div>
    <!-- list --> 
  </div>
  <!-- searchbox -->
  
  <ul id="cata_choose_product" class="cart_containt clearfix listContainer">
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/56.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/56/goods_thumb_56_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970ffcb99f8.jpg" src="/public/upload/goods/2016/01-14/56970ffcb99f8.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970ffc7cfca.jpg" src="/public/upload/goods/2016/01-14/56970ffc7cfca.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970ffc37d61.jpg" src="/public/upload/goods/2016/01-14/56970ffc37d61.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970ffc0e7ac.jpg" src="/public/upload/goods/2016/01-14/56970ffc0e7ac.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970ffbd4b56.jpg" src="/public/upload/goods/2016/01-14/56970ffbd4b56.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56970fc50a9f3.jpg" src="/public/upload/goods/2016/01-14/56970fc50a9f3.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3699.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/56.html" class="text13">创维（skyworth）55M5 55英寸4K超高清网络智能液晶电视机</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(56,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/57.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/57/goods_thumb_57_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697110e71cca.jpg" src="/public/upload/goods/2016/01-14/5697110e71cca.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697110e518b1.jpg" src="/public/upload/goods/2016/01-14/5697110e518b1.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697110e3e83f.jpg" src="/public/upload/goods/2016/01-14/5697110e3e83f.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697110e25eef.jpg" src="/public/upload/goods/2016/01-14/5697110e25eef.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697110e0658c.jpg" src="/public/upload/goods/2016/01-14/5697110e0658c.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">2799.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/57.html" class="text13">TCL D50A710 50英寸 40万小时视频 全高清 内置WiFi 八核安卓智能LED液晶电视</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(57,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/58.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/58/goods_thumb_58_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569714ad81e71.jpg" src="/public/upload/goods/2016/01-14/569714ad81e71.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569714ad5db16.jpg" src="/public/upload/goods/2016/01-14/569714ad5db16.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569714ad445ad.jpg" src="/public/upload/goods/2016/01-14/569714ad445ad.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569714ad344ce.jpg" src="/public/upload/goods/2016/01-14/569714ad344ce.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569714ad15bd7.jpg" src="/public/upload/goods/2016/01-14/569714ad15bd7.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3199.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/58.html" class="text13">海信彩电LED55EC290N 55英寸 全高清 智能 网络 LED液晶电视</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(58,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/59.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/59/goods_thumb_59_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697492ac6ce6.jpg" src="/public/upload/goods/2016/01-14/5697492ac6ce6.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697492aa9c2a.jpg" src="/public/upload/goods/2016/01-14/5697492aa9c2a.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697492a899e1.jpg" src="/public/upload/goods/2016/01-14/5697492a899e1.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697492a5e300.jpg" src="/public/upload/goods/2016/01-14/5697492a5e300.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">2499.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/59.html" class="text13">酷开(coocaa) K50 50英寸智能网络液晶平板电视 酷开系统WiFi</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(59,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/60.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/60/goods_thumb_60_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697525ce387e.jpg" src="/public/upload/goods/2016/01-14/5697525ce387e.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/5697525cc175c.jpg" src="/public/upload/goods/2016/01-14/5697525cc175c.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569752597836f.jpg" src="/public/upload/goods/2016/01-14/569752597836f.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569752559bdc0.jpg" src="/public/upload/goods/2016/01-14/569752559bdc0.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">2599.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/60.html" class="text13">创维(Skyworth) 50S9 50英寸 全高清 网络 WIFI 智能 LED液晶电视</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(60,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/61.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/61/goods_thumb_61_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56975c9e889f0.jpg" src="/public/upload/goods/2016/01-14/56975c9e889f0.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56975c9e712d2.jpg" src="/public/upload/goods/2016/01-14/56975c9e712d2.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56975c9e5b5e9.jpg" src="/public/upload/goods/2016/01-14/56975c9e5b5e9.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/56975c9e35e62.jpg" src="/public/upload/goods/2016/01-14/56975c9e35e62.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3599.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/61.html" class="text13">海信彩电LED55EC520UA 55英寸 14核 4K智能电视(黑色)</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(61,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/62.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/62/goods_thumb_62_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569769e715c1a.jpg" src="/public/upload/goods/2016/01-14/569769e715c1a.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569769e6f2f82.jpg" src="/public/upload/goods/2016/01-14/569769e6f2f82.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569769e6de4df.jpg" src="/public/upload/goods/2016/01-14/569769e6de4df.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569769e6c5bc5.jpg" src="/public/upload/goods/2016/01-14/569769e6c5bc5.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-14/569769e6ab5fe.jpg" src="/public/upload/goods/2016/01-14/569769e6ab5fe.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3599.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/62.html" class="text13">海信彩电LED55EC520UA 55英寸 14核 4K智能电视(黑色)</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(62,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/63.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/63/goods_thumb_63_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985460def2d.jpg" src="/public/upload/goods/2016/01-15/56985460def2d.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985460be7df.jpg" src="/public/upload/goods/2016/01-15/56985460be7df.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985460a59db.jpg" src="/public/upload/goods/2016/01-15/56985460a59db.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/5698546076f99.jpg" src="/public/upload/goods/2016/01-15/5698546076f99.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3699.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/63.html" class="text13">海力（Horion）55A1华数TV版55英寸 4K轻薄智能网络平板液晶电视</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(63,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/64.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/64/goods_thumb_64_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/5698555a28000.jpg" src="/public/upload/goods/2016/01-15/5698555a28000.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/5698555a0bf59.jpg" src="/public/upload/goods/2016/01-15/5698555a0bf59.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985559dbde4.jpg" src="/public/upload/goods/2016/01-15/56985559dbde4.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985559c2937.jpg" src="/public/upload/goods/2016/01-15/56985559c2937.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/56985559a62a0.jpg" src="/public/upload/goods/2016/01-15/56985559a62a0.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">2098.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/64.html" class="text13">whaley/微鲸 WTV43K1 43吋4K LED液晶平板电视 性能小钢炮</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(64,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/65.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/65/goods_thumb_65_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/569856df42cbd.jpg" src="/public/upload/goods/2016/01-15/569856df42cbd.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/569856df2086d.jpg" src="/public/upload/goods/2016/01-15/569856df2086d.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/569856df05157.jpg" src="/public/upload/goods/2016/01-15/569856df05157.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/569856dedcf84.jpg" src="/public/upload/goods/2016/01-15/569856dedcf84.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/01-15/569856deabb46.jpg" src="/public/upload/goods/2016/01-15/569856deabb46.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">2799.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/65.html" class="text13">长虹(CHANGHONG) 49A1U 49英寸双64位4K超清智能网络LED液晶电视</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(65,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/106.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/106/goods_thumb_106_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715eb1f78393.jpg" src="/public/upload/goods/2016/04-19/5715eb1f78393.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715eb3995d92.png" src="/public/upload/goods/2016/04-19/5715eb3995d92.png" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715eb397e45c.jpg" src="/public/upload/goods/2016/04-19/5715eb397e45c.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715eb396bad3.jpg" src="/public/upload/goods/2016/04-19/5715eb396bad3.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">3399.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/106.html" class="text13">Haier/海尔 BCD-572WDPM 572升 对开门电冰箱 风冷无霜 大容量</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(106,1,0);" ></a></div>
          </div>
        </div>
      </li>
          <li>
        <div class="nosinglemore"></div>
        <div class="listbox clearfix"> 
          <!-- 圖片 -->
          <div class="listPic"> 
          		<a rel="nofollow" target="_blank" href="/index.php/Home/Goods/goodsInfo/id/107.html" style="width:200px;height:200px;">
                	<img width="200" height="200" style="display: block;" src="/public/upload/goods/thumb/107/goods_thumb_107_200_200.jpeg" class="fn_img_lazy"> 
                </a>             
          </div>
          <div class="list-scroll J_scrollBox clearfix"> <a href="javascript:void(0);" class="list-scroll-left cbtn"></a>
            <div class="list-scroll-warp J_hideBox">
              <dl class="J_mBox clearfix">            
                                  <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715efc3bc242.jpg" src="/public/upload/goods/2016/04-19/5715efc3bc242.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715efe45f613.jpg" src="/public/upload/goods/2016/04-19/5715efe45f613.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715efe44e074.jpg" src="/public/upload/goods/2016/04-19/5715efe44e074.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715efe43cc24.jpg" src="/public/upload/goods/2016/04-19/5715efe43cc24.jpg" style="display: block;">
                        </a> 
                    </dd>
                                      <dd>
	                    <a href="javascript:void(0);">
                        	<img width="30"  height="30" data-img="/public/upload/goods/2016/04-19/5715efe42b4d8.jpg" src="/public/upload/goods/2016/04-19/5715efe42b4d8.jpg" style="display: block;">
                        </a> 
                    </dd>
                                </dl>
            </div>
            <a href="javascript:void(0);" class="list-scroll-right cbtn"></a> </div>
          
          <!-- 价格 -->
          <div class="discountPrice">
            <div class="price-cash">
              <span class="text13 colf22e01">¥</span>
              <span class="text18 colf22e01 fontT">1788.00</span>
              <del></del>
              <span class="text12" style="float: right;color: gray;position: relative;top:3px">0人付款</span>
            </div>
          </div>
          <!-- 价格 end--> 
          <!-- 品名 -->
          <div class="listDescript"> <a target="_blank" href="/index.php/Home/Goods/goodsInfo/id/107.html" class="text13">Littleswan/小天鹅 TG70-VT1263ED 7kg/公斤变频滚筒全自动洗衣机</a> </div>
          <!-- 價格及字樣 -->
          <div class="itemPrice" >
            <div class="cart_wrapper" > <a style="cursor:pointer;" class="cartlimit" href="javascript:void(0);" onclick="javascript:AjaxAddCart(107,1,0);" ></a></div>
          </div>
        </div>
      </li>
      </ul>
  
  <!-- Page -->
  <div class="fn-page-css-1 pagintion fix" style="display: block;">
  	<div class="pagenavi text12"><div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/index.php/home/goods/goodsList/m/Home/c/Goods/a/goodsList/id/20/p/2.html">2</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/index.php/home/goods/goodsList/m/Home/c/Goods/a/goodsList/id/20/p/2.html">下一页</a></li> </ul></div></div>
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
                <dl  >
                <dt>售后服务</dt>
                <dd>
                    <ol>
                    	                        <li><a href="/index.php/Home/Article/detail/article_id/1.html" target="_blank">11111111111</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/12.html" target="_blank">保修政策</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/13.html" target="_blank">退换货政策</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/14.html" target="_blank">退换货流程</a></li>
					 	                        
                    </ol>
                </dd>
            </dl>
 	            <dl class="jszc" >
                <dt>关于我们</dt>
                <dd>
                    <ol>
                    	                        <li><a href="/index.php/Home/Article/detail/article_id/154.html" target="_blank">工作机会</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/155.html" target="_blank">合作伙伴</a></li>
					 	                        
                    </ol>
                </dd>
            </dl>
 	            <dl class="jszc" >
                <dt>新手上路 </dt>
                <dd>
                    <ol>
                    	                        <li><a href="/index.php/Home/Article/detail/article_id/1302.html" target="_blank">订单管理</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/1303.html" target="_blank">发货设置</a></li>
					 	                        <li><a href="/index.php/Home/Article/detail/article_id/1304.html" target="_blank">商品评论</a></li>
					 	                        
                    </ol>
                </dd>
            </dl>
 	            <dl class="jszc" >
                <dt>购物指南</dt>
                <dd>
                    <ol>
                    	                        <li><a href="/index.php/Home/Article/detail/article_id/8.html" target="_blank">购物指南</a></li>
					 	                        
                    </ol>
                </dd>
            </dl>
 	            <dl class="jszc" >
                <dt>配送方式 </dt>
                <dd>
                    <ol>
                    	                        <li><a href="/index.php/Home/Article/detail/article_id/9.html" target="_blank">配送方式</a></li>
					 	                        
                    </ol>
                </dd>
            </dl>
 	     </div>
     <div class="keep-on-record">
        <p>
        Copyright © 2016-2025 淘品铺子官方商城  版权所有 保留一切权利 备案号:        
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
 get_parment = {"m":"Home","c":"Goods","a":"goodsList","id":"20"};	
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
</html>";
?>