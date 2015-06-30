<?php
/**
 * 联系我们
 * User: DMMO
 * Date: 14-5-12
 * Time: 下午8:21
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//初始化参数检测正确性
$cid = empty($id) ? 41 : intval($id);

//留言内容处理
if(isset($action) and $action=='add')
{
    if(empty($name) or
        empty($content) or empty($phone))
    {
        ShowMsg('您好 你是否信息没有提交完整呢，必填项目不可以为空喔~','contact.php');
        exit();
    }
    $nickname = htmlspecialchars($name);
    $contact  = htmlspecialchars($phone);
    $email    = htmlspecialchars($email);
    $title    = htmlspecialchars($title);
    $content  = htmlspecialchars($content);
    $posttime = GetMkTime(time());
    $ip       = gethostbyname($_SERVER['REMOTE_ADDR']);


    $sql = "INSERT INTO `#@__message` (siteid, nickname, title, email, contact, content, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$nickname', '$title', '$email', '$contact', '$content', '$posttime', '', '', 'false', '$ip')";
    if($dosql->ExecNoneQuery($sql))
    {
        ShowMsg('留言成功，感谢您的支持！','contact.php');
        exit();
    }
}
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
<!--//GOOGLE MAP - ADD YOUR ADDRESS AT THE BOTTOM OF THE PAGE -->
<div id="map" style="width:100%; height:350px;" data-company-address="深圳市宝安区西乡街道双龙花园34栋115" data-company-name="可以啊中高端网站建设" data-company-contact="15327881475" data-company-contact-person="郭先生" data-position-latitude="22.581650824536275" data-position-longitude="113.87533485889435" data-marker-img="/templates/default/img/marker.png"></div>
<div class="pad10"></div>
<div class="container wrapper">
    <div class="inner_content">
        <div class="pad10"></div>
        <div class="row">
            <div class="span4">
                <h3>关于建站及技术方面的咨询建议请给我留言，或者给我们发送邮件 kf@kya.cc</h3>

                <h5>
                    <span>地址</span><br>
                    深圳市 宝安区<br>
                    西乡街道办,<br>
                    双龙花园34栋115
                </h5>

                <h5>
                    <i class="fa fa-envelope colour"></i>&nbsp;E-mail : <a href="mailto:kf@kya.cc">kf@kya.cc</a><br>
                    <i class="fa fa-phone colour"></i>&nbsp;Phone : +86 131 3818 7515, 0755-36937358
                </h5>
            </div>

            <div class="span8 ">
                <div class="contact_form">
                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" method="post" action="">
                            <input type="hidden" name="action" id="action" value="add" />
                            <p class="form_info" style="font-size: 14px;"><i class="fa fa-user colour"></i>&nbsp;姓名 <span class="required">*</span></p>
                            <input class="span5" type="text" name="name" id="name" value="" />
                            <p class="form_info" style="font-size: 14px;"><i class="fa fa-phone colour"></i>&nbsp;联系方式(手机/固话) <span class="required">*</span></p>
                            <input class="span5" type="text" name="phone" id="phone" value="" />
                            <p class="form_info" style="font-size: 14px;"><i class="fa fa-desktop colour"></i>&nbsp;email</p>
                            <input class="span5" type="text" name="email" value="" />
                            <p class="form_info" style="font-size: 14px;"><i class="fa fa-tag colour"></i>&nbsp;标题</p>
                            <input class="span5" type="text" name="title" value="" /><br>
                            <p class="form_info" style="font-size: 14px;"><i class="fa fa-pencil colour"></i>&nbsp;内容 <span class="required">*</span></p>
                            <textarea name="content" id="content" class="span8" ></textarea>
                            <div class="clear"></div>

                            <input type="submit" class="btn  btn-primary btn-form marg-right5" value="发送您的需求" />
<!--                            <input type="reset"  class="btn  btn-primary btn-form" value="重置" />-->
                            <div class="clear pad45 hidden-desktop"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>
<!-- This page Script Begin -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcHj1lysxhQ1DAwAGfTceyZx7PILwAc3o&sensor=true"></script>
<script type="text/javascript">
    (function ( $ ) {
        $.fn.CustomMap = function( options ) {
            var posLatitude = $('#map').data('position-latitude'),
                posLongitude = $('#map').data('position-longitude');

            var settings = $.extend({
                home: { latitude: posLatitude, longitude: posLongitude },
                //text: '<div class="map-popup"><span style="font-size: 16px; font-weight: bold;">'+$('#map').data('company-name')+'</span><br/>详细地址:'+$('#map').data('company-address')+'<br/>联系方式:'+$('#map').data('company-contact')+'<br/>联系人:'+$('#map').data('company-contact-person')+'</div>',
                icon_url: $('#map').data('marker-img'),
                zoom: 16
            }, options );

            var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

            return this.each(function() {
                var element = $(this);

                var options = {
                    zoom: settings.zoom,
                    center: coords,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    panControl: true,
                    disableDefaultUI: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT
                    },
                    overviewMapControl: true
                };

                var map = new google.maps.Map(element[0], options);

                var icon = {
                    url: settings.icon_url,
                    origin: new google.maps.Point(0, 0)
                };

                var marker = new google.maps.Marker({
                    position: coords,
                    map: map,
                    icon: icon,
                    draggable: false
                });

                var info = new google.maps.InfoWindow({
                    content: settings.text
                });

                google.maps.event.addListener(marker, 'click', function() {
                    info.open(map, marker);
                });
                info.open(map, marker);
                var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];

                map.setOptions({styles: styles});
            });

        };
    }( jQuery ));

    jQuery(document).ready(function() {
        jQuery('#map').CustomMap();


        $('#ajax-contact-form').submit(function(){



            if($('#name').val() == ''){
                alert('亲~ 请告诉我们您的尊姓大名~'); return false;
            }

            if($('#phone').val() == ''){
                alert('亲~ 没有填写联系方式我们是无法与您取得联系的喔.'); return false;
            }

            if($('#content').val() == ''){
                alert('亲~ 您可以简单描述下您的需求喔.');
            }

            if($('#name').val()=='' || $('#phone').val()=='' || $('#content').val() =='') return false;
        });
    });
</script>
</body>
</html>