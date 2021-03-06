<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\tp5\public/../application/index\view\teachers\details.html";i:1510026647;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="/static/css/tdetails.css" type="text/css">
    <link rel="stylesheet" href="/static/swiper/css/swiper.min.css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/static/swiper/js/swiper.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/static/Jqthumb/jqthumb.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".navbar-header img").click(function () {
                history.back();
            })
        });
    </script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand"><img src="/static/images/left.jpg"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="nav-centre">
            <div class="nav-title">老师介绍</div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo url('index/Index/index/'); ?>">首页</a>
                </li>
                <li><a href="<?php echo url('index/Information/index/'); ?>">音乐咨询</a></li>
                <li><a href="<?php echo url('index/Teachers/index/'); ?>">师资力量</a></li>
                <li><a href="">教学项目</a></li>
                <li><a href="">视频合集</a></li>
                <li><a href="<?php echo url('index/Ambient/index/'); ?>">教学环境</a></li>
                <li><a href="<?php echo url('index/Activity/index/'); ?>">活动现场</a></li>
                <li><a href="">录音棚</a></li>
                <li><a href="<?php echo url('index/About/index/'); ?>">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="introduce">
<div class="det-summary-img">
    <img src="/static/images/det-img.jpg" class="img-responsive" alt="Responsive image">
</div>
<div class="det-summary-info">
    <div class="det-summary-info-img">
        <img src="upload/<?php echo $data['img_url']; ?>" alt="" class="img-circle">
    </div>
    <div class="det-summary-info-name"><?php echo $data['name']; ?></div>
    <div class="det-summary-info-job"><?php echo $data['job']; ?><span>|</span>教年<?php echo $data['t_age']; ?>年</div>
    <div class="det-summary-info-right"><img src="/static/images/info-right.jpg" alt="" class="img-circle"></div>
</div>
<div class="subject">
    <div class="subject-title">所授科目<label><?php echo $data['t_subject']; ?></label></div>
</div>
<div class="subject">
    <div class="subject-title">个人经历<label><?php echo $data['undergo']; ?></label></div>
</div>
<div class="synopsis">
    <div class="synopsis-title">个人简介</div>
    <div class="synopsis-content">
        <?php echo $data['content']; ?>
    </div>
</div>
</div>