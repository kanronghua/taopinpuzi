<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:48:"./template/pc/default/cart\header_cart_list.html";i:1490353006;}*/ ?>
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
                <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
                    <img src="<?php echo goods_thum_images($v['goods_id'],80,80); ?>" alt="">
                </a>
             </div>
             <div class="p-name">
                <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
                    <span class="p-slogan"><?php echo $v[goods_name]; ?></span>
                    <span class="p-promotions hide"></span>
                </a>
             </div>
             <div class="p-status">
                <div class="p-price">
                    <b>¥&nbsp;<?php echo $v[member_goods_price]; ?></b>
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
    <p>共<em><?php echo $cart_total_price[num]; ?></em>件商品，金额合计<b>¥&nbsp;<?php echo $cart_total_price[total_fee]; ?></b></p>
    <a class="js-button" href="<?php echo U('Home/Cart/cart'); ?>">去结算</a>
</div>
<script>
   $(".shopping-num > em").text('<?php echo $cart_total_price[anum]; ?>'); // 购物车的总数量
</script>