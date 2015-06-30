<link href="templates/default/style/webstyle.developer.css" type="text/css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
<script type="text/javascript" src="templates/default/js/html5.js"></script>
<![endif]-->
</head>
<body>

<div class="header">
    <div class="container">
        <!--logo-->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="fa fa-bars"></i></button>
        <div class="logo">
            <a href="index.html"><img src="templates/default/img/logo.png" alt="" class="animated bounceInDown" /></a>
        </div>
        <!--menu-->
        <nav id="main_menu">
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills">
                    <?php
                        $dosql->Execute("Select * From `#@__nav` Where `parentid`=1 And `checkinfo`='true' Order By `orderid`");
                        while($row = $dosql->GetArray()){
                    ?>
                            <li class="dropdown"><a class="one" href="<?php echo $row['linkurl'];?>"><?php echo $row['classname'];?></a>

                            </li>
                    <?php
                        }
                    ?>
<!--                    <li class="dropdown active"><a href="javascript:{}">首页</a>-->
<!---->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="javascript:{}">网站建设</a>-->
<!---->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="javascript:{}">建站套餐</a>-->
<!---->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="javascript:{}">案例展示</a>-->
<!---->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="javascript:{}">关于可以阿</a>-->
<!---->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="javascript:{}">博客</a>-->
<!---->
<!--                    </li>-->
<!--                    <li><a href="javascript:{}">联系我们</a></li>-->
                </ul>
            </div>
        </nav>
    </div>
</div>