﻿<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$id); ?>
<meta name="Keywords" content="1" />
<meta name="Description" content="2" />
<meta name="WT.sp" content="_china_" />
<meta name="WT.z_locale" content="zh-cn"/ >
<!--这迫使IE 8使用!DOCTYPE声明页面中确定渲染模式。-->

<link href="Content/templete.css" type="text/css" rel="stylesheet" media="all" />
<link href="Content/history.css" type="text/css" rel="stylesheet" media="all" />
<script src="Scripts/jquery-1.11.1.js"  type="text/javascript"></script>
<script src="Scripts/common.js" type="text/javascript"></script>
<script src="Scripts/history.js" type="text/javascript"></script>
<!--[if IE 6]>
<script type="text/javascript" src="Scripts/dd_belatedpng.js"></script>
<script language="javascript" type="text/javascript">
    DD_belatedPNG.fix(".png,#tArticle img,#banner img,#focusElement img,#state img, .sub-nav img,#brandLogo img");
    </script>
<![endif]-->

<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script type="text/javascript" src="Scripts/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
    <script type="text/javascript" src="Scripts/respond.js"></script>  
<![endif]-->

</head>

<body>
 
<!--Begin header-->
<?php include "myheader.php"; ?>
<!--End header-->

<!--hodeplace_main-->
<div id="wrapTop">
    <!--banner-->
  <img src="Picture/20150519fniryu.jpg"style="width:100%;"/>
<!--主体内容-->
	<div class="summy" id="summy">
    	<h3><?php echo GetCatName($id); ?></h3>
        <dl class="clearfix">
        	<dt><img src="<?php echo InfoPic($id); ?>" /></dt>
            <dd>
              <?php echo Info($id); ?>
              <div  class="btnAClick"><a href="javascript:ClickEvent('BUT_/HOMEPAGE/LN_BRAND_History/readmore')" id="btnAClick">展开阅读更多 <i></i></a></div>
            </dd>
        </dl>
    </div>    
<!--Begin footer-->
<?php include "myfooter.php"; ?>
<!--End footer-->
</div>
<!--在每个页面中引入以下JS代码：-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28132552-3']);
//  _gaq.push(['_setDomainName', 'li-ning.com.cn']);
 _gaq.push(['_addOrganic','baidu','word']);
 _gaq.push(['_addOrganic','soso','w']);
 _gaq.push(['_addOrganic','sogou','query']);
 _gaq.push(['_addOrganic','youdao','q']);
 _gaq.push(['_addOrganic','360','q']);
 _gaq.push(['_addOrganic','haosou','q']);

  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

function ClickEvent(event) {
    event = event.toUpperCase();
    if (event.indexOf("BUT_") != -1) {
     _gaq.push(['_trackEvent', 'BUT', event]);
    }
    else {
    _gaq.push(['_trackPageview', event]);
    }
}
</script>


</body>
</html>
