<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"./application/admin/view2/wechat\index.html";i:1490352994;s:44:"./application/admin/view2/public\layout.html";i:1490352994;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="__PUBLIC__/static/css/main.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/css/page.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="__PUBLIC__/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>

<script type="text/javascript" src="__PUBLIC__/static/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="__PUBLIC__/static/js/admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/flexigrid.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.mousewheel.js"></script>
<script src="__PUBLIC__/js/myFormValidate.js"></script>
<script src="__PUBLIC__/js/myAjax2.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
//   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    					layer.closeAll();
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
</script>  

</head>

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>公众号管理</h3>
        <h5>管理公众号</h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
    <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span title="收起提示" id="explanationZoom" style="display: block;"></span>
    </div>
     <ul>
      <li>在使用公众号之前, 会员必须先在此配置好公众号之后才可以使用后面的功能</li>
    </ul>
  </div>
  <div class="flexigrid">
    <div class="mDiv">
      <div class="ftitle">
        <h3>公众号列表</h3>
        <h5>(共<?php echo count($lists); ?>条记录)</h5>
      </div>
      <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
	  <form class="navbar-form form-inline"  method="post" name="search-form2" id="search-form2">  
      <div class="sDiv">
      </div>
     </form>
    </div>
    <div class="hDiv">
      <div class="hDivBox">
        <table cellspacing="0" cellpadding="0">
          <thead>
	        	<tr>
	              <th class="sign" axis="col0">
	                <div style="width: 24px;"><i class="ico-check"></i></div>
	              </th>
	              <th align="left" abbr="order_sn" axis="col3" class="">
	                <div style="text-align: left; width: 260px;" class="">公众号</div>
	              </th>
	              <th align="center" abbr="article_time" axis="col6" class="">
	                <div style="text-align: left; width: 220px;" class="">创建时间</div>
	              </th>
	              <th align="center" abbr="article_time" axis="col6" class="">
	                <div style="text-align: left; width: 160px;" class=""> 操作</div>
	              </th>
	              <th style="width:100%" axis="col7">
	                <div></div>
	              </th>
	            </tr>
	          </thead>
        </table>
      </div>
    </div>
    <?php if(empty($lists) == true): ?>
    <div class="tDiv">
      <div class="tDiv2">
        <div class="fbutton"> <a href="<?php echo U('Admin/Wechat/setting'); ?>">
          <div class="add" title="选定行数据导出excel文件,如果不选中行，将导出列表所有数据">
            <span><i class="fa fa-plus"></i>添加公众号</span>
          </div>
          </a> 
          </div>
      </div>
      <div style="clear:both"></div>
    </div>
    <?php endif; ?>
    <div class="bDiv" style="height: auto;">
      <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
      <table>
		 	<tbody>
		 	<?php if(empty($lists) == true): ?>
		 		<tr data-id="0">
			        <td class="no-data" align="center" axis="col0" colspan="50">
			        	<i class="fa fa-exclamation-circle"></i>没有符合条件的记录
			        </td>
			     </tr>
			<?php else: if(is_array($lists) || $lists instanceof \think\Collection): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
			  	<tr data-id="<?php echo $list['id']; ?>">
			        <td class="sign" axis="col0">
			          <div style="width: 24px;"><i class="ico-check" ></i></div>
			        </td>
			        <td align="left" abbr="username" axis="col3" class="">
			          <div style="text-align: left; width: 260px;" class=""><?php echo $list['wxname']; ?></div>
			        </td>
			        <td align="left" abbr=content axis="col4" class="">
			          	<div style="text-align: left; width: 220px;" class=""><?php echo date('Y-m-d H:i:s',$list['create_time']); ?></div>
			        </td>
			        <td align="center" abbr="article_time" axis="col6" class="">
			               <div style="text-align: left; width: 160px;" class="">
			       			<a class="btn green" href="<?php echo U('Admin/Wechat/setting',array('id'=>$list['id'])); ?>"><i class="fa fa-pencil-square-o"></i>编辑</a>
			       			<a class="btn red"  href="javascript:void(0);" data-href="<?php echo U('Admin/Wechat/del',array('id'=>$list['id'])); ?>" onclick="del('<?php echo $list[id]; ?>',this)"><i class="fa fa-trash-o"></i>删除</a> 
			       		</div>
			           </td>
			         <td align="" class="" style="width: 100%;">
			            <div>&nbsp;</div>
			          </td>
			      </tr>
			      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
		    </tbody>
		</table>
		<div class="row">
		    <div class="col-sm-6 text-left"></div>
		    <div class="col-sm-6 text-right"><?php echo $page; ?></div>
		</div>
      </div>
      <div class="iDiv" style="display: none;"></div>
    </div>
    <!--分页位置--> 
   	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	 
	 	//点击刷新数据
		$('.fa-refresh').click(function(){
			location.href = location.href;
		});
	 
		$('.ico-check ' , '.hDivBox').click(function(){
			$('tr' ,'.hDivBox').toggleClass('trSelected' , function(index,currentclass){
	    		var hasClass = $(this).hasClass('trSelected');
	    		$('tr' , '#flexigrid').each(function(){
	    			if(hasClass){
	    				$(this).addClass('trSelected');
	    			}else{
	    				$(this).removeClass('trSelected');
	    			}
	    		});  
	    	});
		});
	});
 
	// 删除操作
    function del(id,t) {
		layer.confirm('确定要删除吗?', function(){
			location.href = $(t).data('href');  
		});
	}
	 
</script>
</body>
</html>