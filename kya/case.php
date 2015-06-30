<?php
/**
 * 建站套餐
 * User: DMMO
 * Date: 14-5-12
 * Time: 下午8:21
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//初始化参数检测正确性
$cid = empty($id) ? 19 : intval($id);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    echo GetHeader(1,$cid);
    // Header
    require_once('header.php');
    ?>
<div id="banner">
    <div class="container intro_wrapper">
        <div class="inner_content">
            <h1 class="title">案例展示</h1>
            <h1 class="intro">
                建有价值的网站,能带来收益的网站首选<span class="hue">可以啊高端网站建设</span>!
            </h1>

            <h1 class="intro" style="font-size: 16px;">
                我们拥有一批专业的技术团队，量身为您打造属于自己的品牌形象。<br/>我们将从市场的角度和客户需求出发，融合视觉美学及有效策略，完美展现企业与产品的内在品质。
            </h1>
        </div>
    </div>
</div>
<div class="container wrapper">
    <div class="inner_content">

        <div id="options">
            <ul id="filters" class="option-set" data-option-key="filter">
                <li><a href="#filter" data-option-value="*" class=" selected">All</a></li>
                <?php
                    $dosql->Execute("Select * From `#@__infoclass` Where `parentid`=19 And `checkinfo`='true' Order By `orderid`");
                    while($row=$dosql->GetArray()){
                ?>
                        <li><a href="#filter" data-option-value=".category<?php echo $row['id'];?>"><?php echo $row['classname'];?></a></li>
                <?php
                    }
                ?>
            </ul>
            <div class="clear"></div>
        </div>
        <!-- portfolio_block -->
        <div class="row">
            <div class="projects">

                <?php
                    $dosql->safecheck=false;
                    $dosql->Execute("Select * From `#@__infoimg` Where `checkinfo`='true' And `delstate`='' And `deltime`=0 And `classid` in ( Select `id` From `#@__infoclass` Where `parentid`=19 And `checkinfo`='true' Order By `orderid`) Order By `orderid` Desc");
                    $dosql->safecheck=true;
                    while($row= $dosql->GetArray()){
                ?>
                        <div class="span3 element category<?php echo $row['classid'];?>" data-category="category<?php echo $row['classid'];?>">
                            <div class="hover_img">
                                <a href="<?php echo $row['largepic'];?>" data-rel="prettyPhoto[portfolio<?php echo $row['classid'];?>]">
                                    <img src="<?php echo $row['picurl'];?>" alt="<?php echo $row['title'];?>" /></a>
                            </div>
                            <div class="item_description">
                                <span><?php echo GetCatName($row['classid']);?></span><br/>
                                <?php echo $row['title'];?>
                            </div>
                        </div>
                <?php
                    }
                ?>
                <div class="clear"></div>
            </div>
            <!-- //portfolio_block -->
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function(){
        $('.hover_img img').css('width','100%');
        $('.projects').isotope({
            layoutMode: 'fitRows'
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    $(function () {
        $('div.element').hide();
    });
    var i = 0;//initialize
    var int=0;
    $(window).bind("load", function() {
        var int = setInterval("doThis(i)",100);//fade in speed in milliseconds
    });
    function doThis() {
        var imgs = $('div.element').length;
        if (i >= imgs) {
            clearInterval(int);
        }
        $('div.element:hidden').eq(0).fadeIn(100);
        i++;//add 1 to the count
    }
    //]]>
</script>
</body>
</html>