<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<meta name="Keywords" content="1" />
<meta name="Description" content="2" />
<meta name="WT.sp" content="_china_" />
<meta name="WT.z_locale" content="zh-cn"/ >
<!--这迫使IE 8使用!DOCTYPE声明页面中确定渲染模式。-->
<link href="Content/templete.css" type="text/css" rel="stylesheet" media="all" />
<link href="Content/index.css" type="text/css" rel="stylesheet" media="all" />
<script src="Scripts/jquery-1.11.1.js"  type="text/javascript"></script>
<script src="Scripts/move.js" type="text/javascript"></script>
<script src="Scripts/common.js" type="text/javascript"></script>
<!--[if IE 6]>
<script type="text/javascript" src="Scripts/dd_belatedpng.js"></script>
<script language="javascript" type="text/javascript">
    DD_belatedPNG.fix(".png,#tArticle img,#banner img,.sortElement img,#state img, .sub-nav img");
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
  <div id="banner" class="clearfix"> <a href="javascript:void(0)" id="aPrev" class="ctr_btns left_btn"><img src="Picture/arrowle.png" /></a> <a href="javascript:void(0)" id="aNext" class="ctr_btns right_btn"><img src="Picture/arrowri.png" /></a>
    <ul class="clearfix sp_box">
    	<?php 
			$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE (classid=13 or parentid=13) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,5");
			while($row = $dosql->GetArray())
				{
		?>
           <li><img src="<?php echo $row['picurl'];?>" /></li>
        <?php 
			}
		?>
    </ul>
    <div class="btm_btns"> </div>
  </div>
  <div id="focusElement" class="weblink">
  		<ul><a>友情链接：</a>
            <?php
				$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=1 AND checkinfo=true ORDER BY orderid,id DESC");
				while($row = $dosql->GetArray())
				{
			?>
				<a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a>
			<?php
			}
			?>
        </ul>
	</div>
  </div>
<!--Begin footer-->  
<?php include "myfooter.php"; ?>
<!--End footer--> 



<!--在每个页面引入以下JS代码，每个页面只能添加一次，请勿重复添加--> 
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
