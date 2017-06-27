<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./template/pc/default/goods\ajaxComment.html";i:1490353006;}*/ ?>
<?php if(is_array($commentlist) || $commentlist instanceof \think\Collection): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <div class="pro-comment-item po-re pa-bo-20 di-ta">
        <div class="pro-comment-user fl te-al pa-0-15 wi90 po-re">
            <p class="procomment-img">
                <img alt="" src="<?php echo (isset($v['head_pic']) && ($v['head_pic'] !== '')?$v['head_pic']:'__STATIC__/images/defaultface_user_small.png'); ?>" />
            </p>
            <p class="procomment-name"><?php echo $v['username']; ?></p>
            <s class="procomment-tag">
              <!--  <i></i>-->
            </s>
        </div>
        <div class="pro-user-comment-main ma-0-25-0-0 ov-hi">
            <div class="pro-user-comment">
                <div class="comm-t1 ov-hi">
                    <div class="pro-user-score fl">
                        <em>发货速度</em>  
                        <span class="starRating-area">
                          <s style="width:<?php echo ($v['deliver_rank'] / 5 * 100); ?>%"></s>
                        </span>
                        <em>客服态度</em>  
                        <span class="starRating-area">
                          <s style="width:<?php echo ($v['service_rank'] / 5 * 100); ?>%"></s>
                        </span>
                        <em>商品质量</em>  
                        <span class="starRating-area">
                          <s style="width:<?php echo ($v['goods_rank'] / 5 * 100); ?>%"></s>
                        </span>      
                    </div>                
                    <div class="pro-user-impre fl ov-hi">
                    <!--
                        <ul>
                            <li>不错</li>
                            <li>大屏幕</li>
                            <li>流畅</li>
                        </ul>
                      -->  
                    </div>
                    <div class="pro-user-time wh-sp"><?php echo date("Y-m-d",$v['add_time']); ?></div>
                </div>
                <div class="comm-t2">
	                <?php echo htmlspecialchars_decode($v['content']); ?> 
                    <!--htmlspecialchars_decode   html_entity_decode-->
                    <br/>            
                    <!--晒单-->
                    <?php if(is_array($v['img']) || $v['img'] instanceof \think\Collection): if( count($v['img'])==0 ) : echo "" ;else: foreach($v['img'] as $key=>$v2): ?>
	                    <a href="<?php echo $v2; ?>" target="_blank"><img alt="" src="<?php echo $v2; ?>" width="120" height="120" /></a>&nbsp;&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--商家回复-->                    
                    <?php if(is_array($replyList) || $replyList instanceof \think\Collection): if( count($replyList)==0 ) : echo "" ;else: foreach($replyList as $key=>$v3): if($v3['parent_id']  == $v['comment_id']): ?>
	                    <p class="salesperson"><span>商家回复：</span><?php echo $v3['content']; ?></p>
                       <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="arrow"></div>
        </div>
    </div>
<?php endforeach; endif; else: echo "" ;endif; ?>

<div class="eval-cen-ri fr pa-to-17 pa-ri-25 te-al-ri di-bl"><?php echo $page; ?></div>
<script>
    // 点击分页触发的事件
    $("#ajax_comment_return .pagination  a").click(function(){
        cur_page = $(this).data('p');
        ajaxComment(commentType,cur_page);
    });
</script>