<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/index\view\about\index.html";i:1510196842;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="/static/css/about.css" type="text/css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
            $(function () {
                $(".navbar-nav li a").on("click",function () {
                    $(".navbar-nav li").css("background-color","#000000");
                    $(this).css("background-color","#1F2120");
                });
            });
    </script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar one"></span>
                <span class="icon-bar two"></span>
                <span class="icon-bar three"></span>
            </button>
            <a class="navbar-brand" href=""><img src="/static/images/logo.jpg"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--li 默认选中样式 active-->
                <li class="">
                    <a href="<?php echo url('index/Index/index/'); ?>">首页</a>
                </li>
                <li><a href="<?php echo url('index/Information/index/'); ?>">音乐咨询</a></li>
                <li><a href="<?php echo url('index/Teachers/index/'); ?>">师资力量</a></li>
                <li><a href="<?php echo url('index/Program/index/'); ?>">教学项目</a></li>
                <li><a href="">视频合集</a></li>
                <li><a href="<?php echo url('index/Ambient/index/'); ?>">教学环境</a></li>
                <li><a href="<?php echo url('index/Activity/index/'); ?>">活动现场</a></li>
                <li><a href="">录音棚</a></li>
                <li><a href="<?php echo url('index/About/index/'); ?>">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div class="nav-centre">
            <div class="nav-title">关于我们</div>
            <div class="nav-en">About Us</div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="about">
    <div class="idea">
        <div class="idea-title">办学理念</div>
        <div class="yuan"><div class="xian"></div></div>
        <div class="idea-content">
            <?php echo $about['idea']; ?>
        </div>

        <div class="idea-title">办学特点</div>
        <div class="yuan"><div class="xian"></div></div>
        <div class="idea-content">
            <?php echo $about['trait']; ?>
        </div>

        <div class="idea-title">机构简介</div>
        <div class="yuan"><div class="xian"></div></div>
        <div class="idea-content">
            <?php echo $about['synopsis']; ?>
        </div>
        <div class="about-title">
            <div class="unit-left">
                <div class="xian-one"></div><div class="yuan-one"></div>
            </div>
            <div class="about-font">
                联系我们
                <span>Contact Us</span>
            </div>
            <div class="unit-right">
                <div class="xian-one"></div><div class="yuan-one-right"></div>
            </div>
        </div>
        <div class="two-img">
            <img src="/static/images/wexin.jpg" class="img-responsive" alt="Responsive image">
            <div class="xian-two"></div>
        </div>
        <div class="contact-content-one">
            <div class="address">
                <div class="address-img">
                    <img src="/static/images/address.jpg">
                </div>
                <div class="address-list">
                    <div class="campus"><?php echo $contact[0]["two_title"]; ?>：<?php echo $contact[0]["address"]; ?></div>
                    <div class="campus"><?php echo $contact[1]["two_title"]; ?>：<?php echo $contact[1]["address"]; ?></div>
                </div>
            </div>
            <div class="tel-list">
                <div class="tel-img">
                    <img src="/static/images/tel.jpg">
                </div>
                <div class="tel">咨询电话：</div><div class="camera"><?php echo $contact[0]["tel"]; ?></div>
                <div class="camera"><?php echo $contact[1]["tel"]; ?></div>
            </div>
            <div class="tel-list">
                <div class="tel-img">
                    <img src="/static/images/wechat.jpg">
                </div>
                <div class="tel">咨询微信：</div><div class="camera"><?php echo $contact[0]["wechat"]; ?></div>
                <div class="camera"><?php echo $contact[1]["wechat"]; ?></div>
            </div>
            <div class="tel-list">
                <div class="tel-img">
                    <img src="/static/images/wechat.jpg">
                </div>
                <div class="tel">咨询QQ：</div><div class="camera"><?php echo $contact[0]["qq"]; ?></div>
            </div>
        </div>
    </div>
</div>