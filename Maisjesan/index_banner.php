<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Content-Language" content="zh-CN"/>
<title>致臻致圣（北京）投资管理有限公司</title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<meta property="qc:admins" content="151754653764161673072436375"/>
<meta property="wb:webmaster" content="bebfa4568578b1d6"/>
<meta http-equiv="cache-control" content="max-age=1800"/>
<!--解决IE6不支持png图片透明问题-->
<!--[if IE 6]>
    <script type="text/javascript" src="Scripts/dd_belatedpng.js"></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('*');
	</script>
<![endif]-->
<!--/解决IE6不支持png图片透明问题-->
<link type="text/css" href="Content/comm_header.css" rel="stylesheet"/>
<link href="Content/new_index.css" rel="stylesheet" type="text/css">
<div id="float_head" style="min-width:1260px;width:100%;z-index:800;">
  <div id="note_list" style="z-index:800;">
    <div id="lining_common_top">
      <div class="top_list_title">
        <div class="list_title_inner">
          <div class="navigation_left">
            <div class="logochar"></div>
            <div class="welcome" id="welcome"></div>
            <div class="shop-cart" id="" style="margin-left:0px;">
              <div class="cart-list" id="cart_list"></div>
            </div>
            <div class="clear_both"></div>
          </div>
          <div class="navigation_center">
          		<?php
                	$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=26");
					if($cfg_isreurl!='Y') $gourl = 'history.php?cid='.$row['id'];
                      else $gourl = 'history-'.$row['id'].'.html';
                ?>
            <div class="top_left_title"> <a href="<?php echo $gourl; ?>" title="<?php echo $row['classname']; ?>" target="_blank"><?php echo $row['classname']; ?></a>
              <div class="top_inter"></div>
              <?php
                	$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=24");
					if($cfg_isreurl!='Y') $gourl = 'common.php?cid='.$row['id'];
                      else $gourl = 'common-'.$row['id'].'.html';
                ?>
              <a href="<?php echo $gourl; ?>" title="联系我们" target="_blank"><?php echo $row['classname']; ?></a> </div>
            <div class="clear_both"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 公用尾部用法 --> 
<!-- 公共javascript文件 --> 
<script type="text/javascript" src="Scripts/jquery.js"></script> 
<script type="text/javascript" src="Scripts/global.js"></script>