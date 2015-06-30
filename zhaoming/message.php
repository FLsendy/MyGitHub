
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线留言-巴汉</title>
<meta name="keywords" content="蓝科企业网站管理系统V2013" />
<meta name="description" content="蓝科企业网站管理系统V2013" />
<link href="Content/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="Content/jquery.jslides.css"/>
<script type="text/javascript" src="Scripts/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.jslides.js"></script>
</head>
<body>

<?php include "header.php"; ?>
<!-- end of header -->

<div id="main">

<div id="center">


    <div id="left">
        <div class="category_title">产品分类</div>
        <ul class="category">
	<li><a href='/C13/products/?id=4'>汽车保险杠系列</a></li>
	<li><a href='/C13/products/?id=8'>汽车车灯系列</a></li>
	<li><a href='/C13/products/?id=10'>汽车座椅系列</a></li>
	<li><a href='/C13/products/?id=44'>汽车刹车盘系列</a></li>
	<li><a href='/C13/products/?id=45'>汽车电子系列</a></li>
	<li><a href='/C13/products/?id=54'>齿轮零件系列</a></li>
	<li><a href='/C13/products/?id=55'>轴承零件系列</a></li>

        </ul>
        
        <div class="category_title">产品搜索</div>
        <div class="left_search">
            <p>请输入产品关键字：</p>
            <form id="search" name="search" method="get" action="/C13/search/search.asp">
                <input class="search_text" type="text" name="search1" onfocus="this.value=''" />
                <input type="image" src="/C13/images/search5.gif" >
            </form>
        </div>
        
        <div class="category_title">联系我们</div>
        <ul class="contact">
            <li>地址：广东省广州市天河区天平架沙太路沙太路</li>
            <li>电 话：020-879618142</li>
            <li>传 真：020-879618142</li>
            <li>邮 箱：593036114@qq.com</li>
            <li>联系人：钟若天</li>
        </ul>
    </div>
    <!-- end of left -->
    
    <div id="right">
    
        <div class="path_title">您现在的位置：<a href="/C13/index.html">网站首页</a> > 在线留言</div>

        <form id="form1" name="form1" method="post" action="ly_ok.asp">
        <dl class="table">
            <dt>留言标题：</dt>
            <dd><input name="title" type="text" size="50"/></dd>
            <dt>留言性质：</dt>
            <dd id="lyxz">
            <select name="xz" id="xz">
                <option value="普通留言">普通留言</option>
                <option value="建议">建议</option>
                <option value="咨询">咨询</option>
                <option value="合作">合作</option>
                <option value="其它">其它</option>
            </select>
            </dd>
            <dt>您的姓名：</dt>
            <dd><input name="name" type="text" size="50"/></dd>
            <dt>联系电话：</dt>
            <dd><input name="tel" type="text" size="50"/></dd>
            <dt>电子邮箱：</dt>
            <dd><input name="mail" type="text" size="50"/></dd>
            <dt>留言内容：</dt>
            <dd class="biezhu"><textarea name="body" cols="50" rows="8"></textarea></dd>
            <dt>验证码：</dt>
            <dd><input name="VerifyCode" class="box" style="width:50px;">&nbsp;<img id="vcodeImg" src="about:blank" onerror="this.onerror=null;this.src='../Inc/VerifyCode.asp?s='+Math.random();" alt="验证码" title="看不清楚?换一张" style="margin-right:8px;cursor:pointer;" onClick="src='../Inc/VerifyCode.asp?s='+Math.random()"/></dd>
            <dt> </dt>
            <dd><input type="submit" name="button" id="button" value="提交留言" /></dd>
        </dl>
        </form>
     
    </div>
    <!-- end of right -->
    
<div class="clear"></div>  
</div>

<?php include "footer.php"; ?>

<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&img=5&pos=left&uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":144};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

</div>
</body>
</html>