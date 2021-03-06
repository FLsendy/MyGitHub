<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('diymodel');

if(!empty($m))
{
	$r = $dosql->GetOne("SELECT * FROM `#@__diymodel` WHERE `modelname`='$m'");
	if(empty($r) && !is_array($r))
	{
		echo '<script>history.go(-1);</script>';
		exit();
	}
}
else
{
	echo '<script>history.go(-1);</script>';
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加<?php echo $r['modeltitle']; ?></title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/getuploadify.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="templates/js/getjcrop.js"></script>
<script type="text/javascript" src="templates/js/getinfosrc.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
</head>
<body>
<div class="gray_header"> <span class="title">添加<?php echo $r['modeltitle']; ?></span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="modeldata_save.php" onsubmit="return cfm_modeldata();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
		<tr>
			<td width="25%" height="35" align="right">所属栏目：</td>
			<td width="75%">
			<select name="classid" id="classid">
				<option value="-1">请选择所属栏目</option>
				<?php CategoryType($r['id']); ?>
			</select>
			<span class="maroon">*</span><span class="cnote">带<span class="maroon">*</span>号表示为必填项</span></td>
		</tr>
		<tr class="nb">
			<td colspan="2" height="0" id="df"><?php if(isset($cid)) echo GetDiyField($r['id'],$cid); ?></td>
		</tr>
		<tr>
			<td height="35" align="right">缩略图片：</td>
			<td><input type="text" name="picurl" id="picurl" class="class_input" />
				<span class="cnote"><span class="gray_btn" onclick="GetUploadify('uploadify','缩略图上传','image','image',1,<?php echo $cfg_max_file_size; ?>,'picurl')">上 传</span> <span class="reimg">
				<input type="checkbox" name="rempic" id="rempic" value="true" />
				远程</span> <span class="cutimg"><a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;">裁剪</a></span> </span></td>
		</tr>
		<tr>
			<td height="35" align="right">排列排序：</td>
			<td><input type="text" name="orderid" class="input_short" id="orderid" value="<?php echo GetOrderID($r['modeltbname']); ?>" /></td>
		</tr>
		<tr>
			<td height="35" align="right">更新时间：</td>
			<td><input type="text" name="posttime" class="input_short" id="posttime" value="<?php echo GetDateTime(time()); ?>" readonly="readonly" />
				<script type="text/javascript">
				Calendar.setup({
					inputField     :    "posttime",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script></td>
		</tr>
		<tr class="nb">
			<td height="35" align="right">审　核：</td>
			<td><input type="radio" name="checkinfo" value="true" checked="checked"  />
				已审核&nbsp;
				<input type="radio" name="checkinfo" value="false" />
				未审核</td>
		</tr>
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)" />
		<input type="hidden" name="action" id="action" value="add" />
		<input type="hidden" name="m" id="m" value="<?php echo $m; ?>" />
	</div>
</form>
</body>
</html>