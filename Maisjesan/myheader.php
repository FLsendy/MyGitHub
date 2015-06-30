<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<div id="tArticle" class="clearfix">
  <iframe frameborder=0 width=100% height=30 marginheight=0 marginwidth=0 scrolling=no src="index_banner.php"></iframe>
  <div class="tNav clearfix">
    <ul class=" parent-nav clearfix">
      <li class="parent-menu"> <a href="<?php if($cfg_isreurl != 'Y') $gourl='index.php'; else $gourl='index.html'; echo $gourl; ?>"  class="pNavA logoArea"> <b><span><img  src="Picture/mlogo.png"/></span></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
      <li   class="parent-menu"> <a href="http://www.allzp.cn" target="_blank" class=" pNavA "> <b><span class="font"><?php echo GetCatName(1); ?></span></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
      <li   class="hasChild parent-menu" data-index ="0"> <a href="javascript:void(0)"  class="childA pNavA" > <b><span class="font"><?php echo GetCatName(2); ?></span><i></i></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
      <li   class="hasChild parent-menu" data-index ="1"> <a href="javascript:void(0)"  class="childA pNavA" > <b><span class="font"><?php echo GetCatName(5); ?></span><i></i></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
      <li  class="hasChild parent-menu" data-index ="2"> <a href="javascript:void(0)"  class="childA pNavA" > <b><span class="font"><?php echo GetCatName(4); ?></span><i></i></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
      		<?php
                $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE ( id=9) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,4");
                    while($row = $dosql->GetArray())
                    {
                        if($cfg_isreurl!='Y') $gourl = 'newlist.php?cid='.$row['id'];
                        else $gourl = 'newlist-'.$row['id'].'.html';
             ?>
                <li   class=" parent-menu"> <a href="<?php echo $gourl; ?>" class=" pNavA"> <b>
                <t class ='wade'></t>
                <span class="font"><?php echo $row['classname']; ?></span></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
            <?php 
				} 
			?>
			<?php
                $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE ( id=8 or id = 12) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,4");
                    while($row = $dosql->GetArray())
                    {
                        if($cfg_isreurl!='Y') $gourl = 'common.php?cid='.$row['id'];
                        else $gourl = 'common-'.$row['id'].'.html';
             ?>
                <li   class=" parent-menu"> <a href="<?php echo $gourl; ?>" class=" pNavA"> <b>
                <t class ='wade'></t>
                <span class="font"><?php echo $row['classname']; ?></span></b> <em ></em> <span class="ts5"></span> <span class="tsdel5"></span> </a> </li>
            <?php 
				} 
			?>
      
      
      
      <!--<li   class=" parent-menu">
                     <a href="http://www.lining.com/other/shop-lining.html"  target="_blank" class=" pNavA" onclick="ClickEvent('BUT_/NAVI_T/Agency');">
                        <b> <t class ='shop'></t> <span class="font">门店查询</span></b>
                        <em ></em>
                        <span class="ts5"></span>
                        <span class="tsdel5"></span>
                    </a>
                </li>-->
      
    </ul>
    <div class="lSearch clearfix"> 
      <!--<form id="search_form" method='get' target="_blank">
                    <label class="sBd clearfix">
                            <input type="text" class="search_form_subTxt"  />
                            <img class="search_form_subBtn serchBtn" src="Picture/ico-search.png" onclick="ClickEvent('BUT_/NAVI_T/SITE_SEARCH_REFERTO_ESHOP');"/>
                        </label>
                </form>--> 
    </div>
  </div>
</div>
<!--头部下拉菜单-->
<div class="sub-nav  childPosition"  id="hideBlock">
  <div class="sub-bg-top">
    <div class="sub-container  clearfix" >
      <div class="subnav-section clearfix aLinkSportStyle" >
        <?php 
			$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE ( parentid=2) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,5");
			while($row = $dosql->GetArray()){
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
		?>
            <div class="nav-list l-w5"> <a href="<?php echo $gourl; ?>" target="_blank"><img src="<?php echo $row['picurl']; ?>" />
            <p><?php echo $row['classname']; ?></p>
            </a> </div>
        <?php 
			}
		?>
      </div>
      <div class="subnav-section clearfix aLinkSportStyle" >
        <?php 
			$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE ( parentid=5) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,5");
			while($row = $dosql->GetArray()){
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
		?>
            <div class="nav-list l-w5"> <a href="<?php echo $gourl; ?>" target="_blank"><img src="<?php echo $row['picurl']; ?>" />
            <p><?php echo $row['classname']; ?></p>
            </a> </div>
        <?php 
			}
		?>
      </div>
      <div class="subnav-section subnav-noBoder clearfix " >
			<?php
            $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE ( parentid=4) AND checkinfo=true ORDER BY orderid,id DESC LIMIT 0,4");
                while($row = $dosql->GetArray())
                {
					if($cfg_isreurl!='Y') $gourl = 'common.php?cid='.$row['id'];
					else $gourl = 'common-'.$row['id'].'.html';
            ?>
                <div class="nav-list l-w4 subnav-noBoder">
                <h4><?php echo $row['classname']; ?><span> <?php echo $row['description']; ?></span></h4>
                <a href="<?php echo $gourl; ?>" target="_blank" class="otherLink"><img src="<?php echo $row['picurl']; ?>" class="normal" /> <img src="<?php echo $row['picurl']; ?>" class="hover" /></a> </div>
			<?php
            }
            ?>
      </div>
      
    </div>
  </div>
</div>