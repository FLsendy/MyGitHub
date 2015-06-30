<?php
/**
 * 建站套餐
 * User: DMMO
 * Date: 14-5-12
 * Time: 下午8:21
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//初始化参数检测正确性
$cid = empty($id) ? 41 : intval($id);
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
            <h1 class="title">关于我们</h1>
            <h1 class="intro">
                建有价值的网站,能带来收益的网站首选<span class="hue">可以啊高端网站建设</span>!<br/>
            </h1>

            <h1 class="intro" style="font-size: 16px;">
                我们坚信技术永无止境, 我们会努力将一些先进高端的技术手段为客户打造一个全新的企业形象.<br/>
                以客户为中心 以技术为基础 以质量求生存 以诚信求发展 优秀的我们 为客户提供一个无懈可击的展示空间。
            </h1>
        </div>
    </div>
</div>

<div class="container wrapper">
    <div class="inner_content">
        <div class="row">
            <!--4-->
            <div class="span6">
                <div class="testimonial3 fadeinup">
                    <p><i class="fa fa-comment fa-4x pull-left magnolia"></i>
                        我们始终认为好作品不仅仅源于思想和创意；更多源自真诚的沟通，不断完善而产生的智慧结晶；是艺术、设计、商业的完美结合！
                        我们专注设计，只做一件事：始终坚持<span style="color:#000;font-weight: 700;">“品质于行 服务于心”</span>的服务理念，持续为客户创造价值。
                    </p>
                </div>
                <div class="center">
                    <p><span class="hue normal">团队理念</span></p>
                </div>
                <div class="pad15"></div>
            </div>
            <!--5-->
            <div class="span6">
                <div class="testimonial1 fadeinup">
                    <p><i class="fa fa-quote-right fa-4x pull-right hue"></i>
                        我们的团队成员由资深设计师、资深前端工程师及技术负责人、开发工程师等组成。团队成员均有在大型互联网工作经验。我们是追求品质与力求不断超越自己的团队，我们尊重每次合作的机会与挑战，力求完美。
                    </p>
                </div>
                <div class="center">
                    <p><span class="hue normal">开发团队</span></p>
                </div>
                <div class="pad15"></div>
            </div>
        </div>

        <div class="row">
            <div class="span8">
                <!--skill bars-->
                <h2>我们的优势</h2>

                <div class="progress">
                    <div class="bar"  data-percentage="85">
                    </div>
                </div>
                <small>网页设计</small>

                <div class="progress">
                    <div class="bar"  data-percentage="90">
                    </div>
                </div>
                <small>编程能力</small>

                <div class="progress">
                    <div class="bar"  data-percentage="99">
                    </div>
                </div>
                <small>服务</small>

                <div class="pad45 hidden-desktop"></div>
            </div>

            <!--testimonial-->
            <div class="span4 pad15">
                <div class="testimonial1">
                    <p>
                        <i class="fa fa-comments fa-4x pull-left hue"></i>
                        我们有理由相信每一公司做的设计不是给自己看的，而是给客户看的，可以啊的长处就在于我们的技术是基础，创意是翅膀，只有充分利用好网络，创意才能把您们的价值体现出来，传播出去。
                        我们不只是为您们的企业披上外衣，我们还通过我们的网络知识，帮助客户优化网站，使网站更显专业，更有竞争力，我们希望客户能够通过网络找到您们。
                        我们不仅仅为您建设网站，我们更将您的网站置于整个营销策略中，我们不仅仅贡献互动产品和技术，我们更为您的营销战略带来互动新思维。
                    </p>
                </div>
                <div class="center">
                    <p><small>可以啊团队</small></p>
                </div>
                <div class="pad45 hidden-desktop"></div></div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
<script>
    //<![CDATA[
    setTimeout(function(){
        $('.progress .bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");
            var current_perc = 0;
            var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }
                me.text((current_perc)+'%');
            }, 1);
        });
    },100);
    //]]>
</script>
</body>
</html>