<?php
/**
 * 建站套餐
 * User: DMMO
 * Date: 14-5-12
 * Time: 下午8:21
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//初始化参数检测正确性
$cid = empty($id) ? 36 : intval($id);
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
            <h1 class="title">建站套餐</h1>
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
<div class="pad30"></div>
<div class="row">

    <?php
        $dosql->Execute("Select * From `#@__infoclass` Where `parentid`=36 And `checkinfo`='true' Order By `orderid`");
        while($row = $dosql->GetArray()){
            $info = $dosql->GetOne("Select * From `#@__info` Where `classid`={$row['id']}");
    ?>
        <div class="span3 pricing-table tile <?php echo (isset($info['ishot']) && $info['ishot']==1) ? "tile-hot":""; ?>">
            <ul>
                <li class="pricing-header-row-1">
                    <h4><span><?php echo $row['classname'];?></span></h4>
                    <b>最新优惠</b>
                </li>
                <li class="pricing-header-row-2">
                    原价:<del><?php echo (isset($info['pre_price']) && $info['pre_price'] != '')?$info['pre_price']:"提供需求后报价";?></del>
                    <h3 class="price"><?php echo (isset($info['now_price']) && $info['now_price'] != '')?$info['now_price']:"提供需求后报价";?></h3>
                </li>
                <?php
                    echo (isset($info['content']))?$info['content']:"";
                ?>
                <li class="pricing-footer">
                    <a class="btn btn-small btn-primary btn-rounded but-price" href="contact.php">
                        <h5><span>提交需求</span></h5></a>
                </li>
            </ul>
        </div>
    <?php
        }
    ?>
</div>

<div class="pad30"></div>
    <div class="row">
        <h1 class="center" style="padding:20px 0;">网站建设流程</h1>
        <hr class="team-line">
        <!--1-->
        <div class="span3">
            <div class="quote_sections_hue fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc3 cont-large testimonial-icon rotate"><i class="fa fa-paste testimonial-icon-large asphalt"></i>
                </div>
                <p class="white" style="text-align: left;margin-top:15px;">
                    1.了解客户的初步需求及需要达到的效果;<br/>
                    2.根据需求提供相应建议;<br/>
                    3.客户提供相关文本及图片资料.<br/>
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="white normal">- 壹。客户需求分析 - </small></p>
            </div>
            <div class="pad45"></div>
        </div>

        <!--2-->
        <div class="span3">
            <div class="quote_sections_light fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc2 cont-large testimonial-icon rotate"><i class="fa fa-pencil testimonial-icon-large magnolia"></i></div>
                <p style="text-align: left;margin-top:15px;">
                    1.公司的特色进行初步分析;<br/>
                    2.双方协商网站建设内容达成共识;<br/>
                    3.根据分析结果量身定做方案.<br/>
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="colour normal">- 贰。根据需求量身定做方案 - </small></p>
            </div>
            <div class="pad45"></div>
        </div>
        <!--3-->
        <div class="span3">
            <div class="quote_sections_dark fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc3 cont-large testimonial-icon rotate"><i class="fa fa-tags testimonial-icon-large asphalt"></i>
                </div>
                <p class="grey" style="text-align: left;margin-top:15px;">
                    1. 双方签订《网站建设协议》;<br/>
                    2. 客户支付预付款;<br/>
                    3. 客户提供网站相关内容资料.<br/>
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="muted normal">- 叁。签订合作意向书 - </small></p></div>
            <div class="pad45"></div>
        </div>
        <!--4-->
        <div class="span3">
            <div class="quote_sections fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc cont-large testimonial-icon rotate"><i class="fa fa-copy testimonial-icon-large white"></i>
                </div>
                <p style="text-align: left;margin-top:15px;">
                    1. 收集网站建设所需资料信息;<br/>
                    2. 收集网站备案所需资料信息;<br/>
                    3. 确定域名注册人、网站负责人及相应拍照（网站备案所用）;<br/>
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="colour normal">- 肆。收集网站相关资料 - </small></p></div>
        </div>
        <div class="pad45"></div>
    </div>

    <div class="row">

        <!--1-->
        <div class="span3">
            <div class="quote_sections fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc cont-large testimonial-icon rotate"><i class="fa fa-magic testimonial-icon-large white"></i>
                </div>
                <p style="text-align: left;margin-top:15px;">
                    1. 整体策划、设计制作;<br/>
                    2. 网站首页策划、设计、修改、确认;<br/>
                    3. 网站内页策划、设计、修改、确认;<br/>
                    4. 网站程序开发、修改、确认。<br/>
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="colour normal">- 伍。网站视觉设计及程序开发 - </small></p></div>
        </div>

        <div class="span3">
            <div class="quote_sections_dark fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc3 cont-large testimonial-icon rotate"><i class="fa fa-code testimonial-icon-large asphalt"></i>
                </div>
                <p class="grey" style="text-align: left;margin-top:15px;">
                    1. 给客户浏览初步完成的样稿;<br/>
                    2. 结合客户提出的意见来修改;<br/>
                    3. 完成网站测试双方协商完善;<br/>
                    4. 网站本地测试通过客户确认.
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="muted normal">- 陆。测试、修改、完稿 - </small></p></div>
            <div class="pad45"></div>
        </div>

        <div class="span3">
            <div class="quote_sections_light fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc2 cont-large testimonial-icon rotate"><i class="fa fa-check-square-o testimonial-icon-large magnolia"></i></div>
                <p style="text-align: left;margin-top:15px;">
                    1. 根据合同内容进行网站验收;<br/>
                    2. 客户签发《网站建设验收合格确认书》 <br/>
                    3. 客户支付余款，网站开通; <br/>
                    4. 将成功的案例录入我公司精品案例中;
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="colour normal">- 柒。交付完成 - </small></p>
            </div>
            <div class="pad45"></div>
        </div>

        <div class="span3">
            <div class="quote_sections_hue fadeindown" style="height:240px;position:relative;">
                <div class="testimonial-icon-disc3 cont-large testimonial-icon rotate"><i class="fa fa-heart testimonial-icon-large asphalt"></i>
                </div>
                <p class="white" style="text-align: left;margin-top:15px;">
                    1.网站备案（从签订合同之日起开始）;<br/>
                    2.网站内容维护及修改;<br/>
                    3.网站安全及日常护理服务;<br/>
                    4.网站免费优化服务。
                </p>
                <p style="position: absolute;bottom: 25px;left: 0px;width: 100%;"><small class="white normal">- 玖。后期维护 - </small></p>
            </div>
            <div class="pad45"></div>
        </div>

        <div class="pad45"></div>
    </div>
</div>
</div>
<!--//page-->

<?php require_once('footer.php'); ?>
</body>
</html>