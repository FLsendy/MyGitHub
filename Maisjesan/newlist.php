<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>致臻致圣（北京）投资管理有限公司</title>
<meta name="Keywords" content="1" />
<meta name="Description" content="2" />
<meta name="WT.sp" content="_china_" />
<meta name="WT.z_locale" content="zh-cn"/ >
<!--这迫使IE 8使用!DOCTYPE声明页面中确定渲染模式。-->

<link href="Content/templete.css" type="text/css" rel="stylesheet" media="all" />
<link href="Content/legal.css" type="text/css" rel="stylesheet" media="all" />
<link href="Content/style.css" type="text/css" rel="stylesheet" media="all" />
<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script src="Scripts/common.js" type="text/javascript"></script>
<!--[if IE 6]>
<script type="text/javascript" src="Scripts/dd_belatedpng.js"></script>
<script language="javascript" type="text/javascript">
    DD_belatedPNG.fix(".png,#tArticle img,#banner img,#focusElement img,#state img, .sub-nav img");
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
  <div class="legalBd">
    <div class="legalWrap legalWrap2" style="background:#fff;">
      <div class="pd18">
        <div class="tip"><?php echo GetPosStr($cid); ?></div>
        <h2> <?php echo GetCatName($cid); ?></h2>
      </div>
      <div class="legalTop pd18">
          	<section id="news">
            <ul class="newsdata">
              <?php
				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",5);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'listshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'listshow-'.$row['classid'].'-'.$row['id'].'.html';
					else $gourl = $row['linkurl'];
				?>
              <li> <a href="<?php echo $gourl; ?>"><img height="100" width="150" alt="<?php echo $row['title']; ?>" src="<?php echo $row['picurl']; ?>"></a>
                <div class="newslist"> <a title="<?php echo ReStrLen($row['title'],25); ?>...." href="<?php echo $gourl; ?>"><?php echo ReStrLen($row['title'],20); ?>...</a> <span>UPTATED:<?php echo GetDateMk($row['posttime']); ?></span>
                  <p><?php echo ReStrLen($row['description'],120); ?>....</p>
                </div>
              </li>
              <?php
				}
				?>
            </ul>
           </section>  
             <?php echo $dopage->GetList(); ?>       
         </div>
     <!-- <ul class="legalUl pd18" style="position:relative; z-index:2;">
        <img src="Picture/bg-legal_top.jpg" class="holdBg" />
                <img style="z-index:-2; height:100%;" src="Picture/bg-legal_btm.jpg" class="holdBg" />
      </ul>-->
    </div>
  </div>
  <!--尾部--> 
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
