<!--<div id="state">
        <div class="stateBd stateWidth800 clearfix">
            <dl class="clearfix">
                <dt><img src="Picture/ico-phone.png"></dt>
                <dd>
                    <h4>获取帮助</h4>
                    <p><a onclick="ClickEvent('BUT_/NAVI_F/SERVICE_CONTACTUS');" target="_blank" href="other/contact.html">联系我们 </a>｜ <a onclick="ClickEvent('BUT_/NAVI_F/SERVICE_GROUPPURCHASEVIP');" target="_blank" href="other/group.html">团购VIP</a></p>
                </dd>
            </dl>
            <dl class="clearfix">
                <dt><img src="Picture/ico-query.png"></dt>
                <dd>
                    <h4>防伪查询</h4>
                    <p><a onclick="ClickEvent('BUT_/NAVI_F/SERVICE_ANTIFORGE');" target="_blank" href="other/fwcx.html">输入查询码 </a></p>
                </dd>
            </dl>
            <dl class="clearfix">
                <dt><img src="Picture/ico-service.png"></dt>
                <dd>
                    <h4>售后服务</h4>
                    <p><a onclick="ClickEvent('BUT_/NAVI_F/SERVICE_AFTER-SALE-SERVICE');" target="_blank" href="other/instructions.html">使用说明 </a></p>
                </dd>
            </dl>
        </div>
    </div>-->
<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?> 
    <footer id="footerBd">
    	<div class="footer-inner">
            <p><?php echo $cfg_copyright; ?></p>
            <ul class="clearfix">
				<?php
                $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=26");
				if($cfg_isreurl != 'Y') $gourl = 'history.php?id='.$row['id'];
					else $gourl = 'history-'.$row['id'].'.html';
                ?>
                <li><a href="<?php echo $gourl; ?>" target="_blank"><?php echo $row['classname']; ?></a></li>
                <?php
                $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=25");
				if($cfg_isreurl != 'Y') $gourl = 'common.php?cid='.$row['id'];
					else $gourl = 'common-'.$row['id'].'.html';
                ?>
                <li><a href="<?php echo $gourl; ?>" target="_blank"> <?php echo $row['classname']; ?> </a></li>
                <li><a class="hotLine">客服热线&nbsp;&nbsp;&nbsp; <span><?php echo $cfg_hotline; ?></span></a></li>
            </ul>
        </div>
    </footer>