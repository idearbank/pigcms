<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset={:C('DEFAULT_CHARSET')}" />
		<title>网站后台管理 Powered by weiwino2o</title>
		<script type="text/javascript">
			if(self==top){window.top.location.href="<?php echo U('Index/index');?>";}
			var kind_editor=null,static_public="<?php echo ($static_public); ?>",static_path="<?php echo ($static_path); ?>",system_index="<?php echo U('Index/index');?>",choose_province="<?php echo U('Area/ajax_province');?>",choose_city="<?php echo U('Area/ajax_city');?>",choose_area="<?php echo U('Area/ajax_area');?>",choose_circle="<?php echo U('Area/ajax_circle');?>",choose_map="<?php echo U('Map/frame_map');?>",get_firstword="<?php echo U('Words/get_firstword');?>",frame_show=<?php if($_GET['frame_show']): ?>true<?php else: ?>false<?php endif; ?>;
 var  meal_alias_name = "<?php echo ($config["meal_alias_name"]); ?>";
		</script>
		<link rel="stylesheet" type="text/css" href="<?php echo ($static_path); ?>css/style.css" />
		<script type="text/javascript" src="<?php echo C('JQUERY_FILE');?>"></script> 
		<script type="text/javascript" src="<?php echo ($static_public); ?>js/jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo ($static_public); ?>js/jquery.cookie.js"></script>
		<script type="text/javascript" src="<?php echo ($static_public); ?>js/jquery.validate.js"></script> 
		<script type="text/javascript" src="<?php echo ($static_public); ?>js/date/WdatePicker.js"></script> 
		<script type="text/javascript" src="<?php echo ($static_public); ?>js/jquery.colorpicker.js"></script>
		<script type="text/javascript" src="<?php echo ($static_path); ?>js/common.js"></script>
	</head>
	<body width="100%" <?php if($bg_color): ?>style="background:<?php echo ($bg_color); ?>;"<?php endif; ?>>		<div class="mainbox">			<div id="nav" class="mainnav_title">				<ul>					<a href="<?php echo U('Meal/index');?>">分类列表</a>|					<?php if($category): ?><a href="<?php echo U('Meal/index',array('parentid'=>$category['cat_id']));?>" class="on"><?php echo ($category["cat_name"]); ?> - 子分类列表</a>|<?php endif; ?>					<a href="javascript:void(0);" onclick="window.top.artiframe('<?php echo U('Meal/cat_add', array('parentid' => $parentid));?>','添加分类',480,260,true,false,false,addbtn,'add',true);">添加<?php if($category): ?>子<?php else: ?>主<?php endif; ?>分类</a>				</ul>			</div>			<form name="myform" id="myform" action="" method="post">				<div class="table-list">					<table width="100%" cellspacing="0">						<colgroup>							<col/>							<col/>							<col/>							<col/>							<col/>							<col width="180" align="center"/>						</colgroup>						<thead>							<tr>								<th>排序</th>								<th>编号</th>								<th>名称</th>								<th>短标记(url)</th>								<?php if(empty($parentid)): ?><th>查看子分类</th><?php endif; ?>								<th>状态</th>								<th class="textcenter">操作</th>							</tr>						</thead>						<tbody>							<?php if(is_array($category_list)): if(is_array($category_list)): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>										<td><?php echo ($vo["cat_sort"]); ?></td>										<td><?php echo ($vo["cat_id"]); ?></td>										<td><?php echo ($vo["cat_name"]); ?></td>										<td><?php echo ($vo["cat_url"]); ?></td>										<?php if(empty($parentid)): ?><td><a href="<?php echo U('Meal/index',array('parentid'=>$vo['cat_id']));?>">查看子分类</a></td><?php endif; ?>										<td><?php if($vo['cat_status'] == 1): ?><font color="green">启用</font><?php elseif($vo['cat_status'] == 2): ?><font color="red">待审核</font><?php else: ?><font color="red">关闭</font><?php endif; ?></td>										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('<?php echo U('Meal/cat_edit',array('cat_id'=>$vo['cat_id'],'frame_show'=>true));?>','查看分类信息',480,260,true,false,false,false,'detail',true);">查看</a> | <a href="javascript:void(0);" onclick="window.top.artiframe('<?php echo U('Meal/cat_edit',array('cat_id'=>$vo['cat_id'], 'parentid'=>$vo['cat_fid']));?>','编辑分类信息',480,260,true,false,false,editbtn,'edit',true);">编辑</a> | <a href="javascript:void(0);" class="delete_row" parameter="cat_id=<?php echo ($vo["cat_id"]); ?>" url="<?php echo U('Meal/cat_del');?>">删除</a></td>									</tr><?php endforeach; endif; else: echo "" ;endif; ?>							<?php else: ?>								<tr><td class="textcenter red" colspan="6">列表为空！</td></tr><?php endif; ?>						</tbody>					</table>				</div>			</form>		</div>	</body>
</html>