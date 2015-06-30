<?php
/**
 * 业务介绍
 * User: DMMO
 * Date: 14-5-12
 * Time: 下午8:21
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//初始化参数检测正确性
$cid = empty($id) ? 15 : intval($id);
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
            <h1 class="title">网站建设</h1>

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

        <?php
            $dosql->Execute("Select * From `#@__infoclass` Where `parentid`={$cid} And `checkinfo`='true' Order By `orderid`");
            while($row=$dosql->GetArray()){
        ?>
                <div class="row">
                    <div class="span12 well">
                        <h2><?php echo $row['classname'];?></h2>
                        <div class="item_description" style="font-size: 14px; text-align: left;">
                            <h1 class="intro" style="font-size: 14px;">
                                <?php echo Info($row['id']);?>
                            </h1>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
</div>
<?php require_once('footer.php'); ?>
</body>
</html>