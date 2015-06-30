<!-- footer -->
<div id="footer">
    <h1>客户为根 服务为本</h1>
    <h3 class="center follow">
        感激客户给我们为其提供优质产品和服务的每一个机会，当我们为顾客创造实实在在的价值的时候，客户才会选择和喜欢我们，并成为企业忠臣的伙伴。通过我们不懈努力赢得客户的认可和支持，我们的事业才有了生存、发展和壮大的基础。
    </h3>

    <div class="follow_us">
        <a href="http://weibo.com/kyacc" target="_blank" class="icon weibo"></a>
        <a href="javascript:{}" class="icon weixin"></a>
        <a href="http://wpa.qq.com/msgrd?v=3&uin=4778289&site=qq&menu=yes" target="_blank" class="icon tencent"></a>
    </div>
</div>

<!-- footer 2 -->
<div id="footer2">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="copyright">
                    KYA.CC
                    &copy;
                    <script type="text/javascript">
                        //<![CDATA[
                        var d = new Date()
                        document.write(d.getFullYear())
                        //]]>
                    </script>
                    - All Rights Reserved :
                    版权所有 <a href="http://www.kya.cc">可以阿</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- up to top -->
<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
<!--//end-->

<?php
echo GetQQ();
//将流量统计代码放在页面最底部
$cfg_countcode;
?>
<script type="text/javascript" src="templates/default/js/webscript.min.js"></script>
<script>
    $(function(){
        var isInit = true;

        $('#main_menu>.nav-collapse>.nav>li').each(function(){
            var url = (location.href.indexOf('?')>-1) ? location.href.split('?')[0] : location.href;
            if($(this).children('a.one').prop('href') == url) $(this).addClass('active');

            if($(this).hasClass('active')) isInit = false;
        });
        if(isInit) $('#main_menu>.nav-collapse>.nav>li').eq(0).addClass('active');
    });
</script>

