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
<script src="Scripts/jquery-1.11.1.js"  type="text/javascript"></script>
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
            <?php $row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=".$id); ?>
            	<div class="tip"><?php echo GetPosStr($cid);?></div>
                <div class="ptitle">
                	<h3> 
						<?php echo ReStrLen($row['title'],20); ?>
                    <div class="ptime"><span>UPTATED:<?php echo GetDateMk($row['posttime']); ?></span></div>
                    </h3>
                </div>
            	
            </div>
            <div class="legalTop pd18">
               <?php 
					echo $row['content'];
			    ?>
                <div class="preNext">
				<div class="line"><strong></strong></div>
				<ul class="text">
                <h3> 你可能还对下面的新闻感兴趣
                <div class="share">
                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
                </h3>
				<?php
				//获取上一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '<li>上一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'listshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'listshow-'.$r['classid'].'-'.$r['id'].'.html';

					echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
					echo '<li>下一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'listshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'listshow-'.$r['classid'].'-'.$r['id'].'.html';

					echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				?>
				</ul>
			</div>
            </div>
            <ul class="legalUl pd18" style="position:relative; z-index:2;">
            	
            </ul>
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
