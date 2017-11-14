<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\tp5\public/../application/index\view\ambient\index.html";i:1510550909;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/static/swiper/js/swiper.min.js" type="text/javascript"></script>
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
                <li><a href="">教学项目</a></li>
                <li><a href="">视频合集</a></li>
                <li><a href="<?php echo url('index/Ambient/index/'); ?>">教学环境</a></li>
                <li><a href="<?php echo url('index/Activity/index/'); ?>">活动现场</a></li>
                <li><a href="">录音棚</a></li>
                <li><a href="<?php echo url('index/About/index/'); ?>">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div class="nav-centre">
            <div class="nav-title">教学环境</div>
            <div class="nav-en">Teaching Envionment</div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="environment">
    <?php if(is_array($ambient) || $ambient instanceof \think\Collection || $ambient instanceof \think\Paginator): $i = 0; $__LIST__ = $ambient;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ambient): $mod = ($i % 2 );++$i;?>
    <div class="environment-list">
        <a href="<?php echo url('index/Ambient/details/',['id' => $ambient['ambient_id']]); ?>">
            <img src="upload/<?php echo $ambient['img_url']; ?>">
        </a>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>