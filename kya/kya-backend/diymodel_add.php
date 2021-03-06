<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('diymodel'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加自定义模型</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript">
$(function(){
	$("#modelname").blur(function(){
		var modelname = $(this).val();
		$("#modeltbname").val(modelname);
	});
});
</script>
</head>
<body>
<div class="gray_header"> <span class="title">添加自定义模型</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="diymodel_save.php" onsubmit="return cfm_diymodel();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
		<tr>
			<td width="25%" height="35" align="right">模型标识：</td>
			<td width="75%"><input type="text" name="modelname" id="modelname" class="class_input" />
			<span class="maroon">*</span><span class="cnote">仅由英文字母、数字和下划线组成，并且仅能字母开头，不能以下划线结尾</span></td>
		</tr>
		<tr>
			<td height="35" align="right">模型名称：</td>
			<td><input type="text" name="modeltitle" id="modeltitle" class="class_input" />
				<span class="maroon">*</span><span class="cnote">用于模型名称的显示</span></td>
		</tr>
		<tr>
			<td height="35" align="right">模型表名：</td>
			<td><input type="text" name="modeltbname" id="modeltbname" class="class_input" />
				<span class="maroon">*</span><span class="cnote">模型表名正常情况下可与模型标识相同</span></td>
		</tr>
		<tr>
			<td height="35" align="right">排列排序：</td>
			<td><input type="text" name="orderid" id="orderid" class="input_short" value="<?php echo GetOrderID('#@__diymodel'); ?>" /></td>
		</tr>
		<tr class="nb">
			<td height="35" align="right">审　核：</td>
			<td><input type="radio" name="checkinfo" value="true" checked="checked"  />
				启用&nbsp;
				<input type="radio" name="checkinfo" value="false" />
				禁用</td>
		</tr>
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)" />
		<input type="hidden" name="action" id="action" value="add" />
	</div>
</form>
</body>
</html>