<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"./template/pc/default/goods\ajax_consult.html";i:1490353006;}*/ ?>
    <div class="spxqer-top">
        <span class="colo-ora">温馨提示：</span>
        因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
    </div>
    <div class="spxqer-cen">
    <?php if(is_array($consultList) || $consultList instanceof \think\Collection): $i = 0; $__LIST__ = $consultList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <div class="qerst-wy">
            <div class="wy1">
                <span>网友：</span><span><?php echo $v['username']; ?></span>
                <s><i></i></s>
                <em><?php echo date("Y-m-d",$v['add_time']); ?></em>
            </div>
            <div class="wy2">
                <span>咨询内容：</span><span><?php echo $v['content']; ?></span>
            </div>
            <?php if(is_array($replyList) || $replyList instanceof \think\Collection): if( count($replyList)==0 ) : echo "" ;else: foreach($replyList as $key=>$v3): if($v3['parent_id']  == $v['id']): ?>            
                    <div class="wy3">
                        <span>回复：</span><span><?php echo $v3['content']; ?></span>
                        <em><?php echo date("Y-m-d",$v3['add_time']); ?></em>
                    </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            
        </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>          
    </div>
    <div class="spxqer-bot">
        <div class="spxqer-bo-le">共<em><?php echo $consultCount; ?></em>条</div>
        <div class="spxqer-bo-ri fr di-in-bl ov-hi">
            <!--------分页开始-------------->
                       <?php echo $page; ?>
            <!--------分页结束-------------->
        </div>
    </div>
<script>
    // 点击分页触发的事件
    $("#ajax_consult_return .pagination  a").click(function(){
        cur_page = $(this).data('p');
         ajaxConsult(consult_type,cur_page);
    });
</script>