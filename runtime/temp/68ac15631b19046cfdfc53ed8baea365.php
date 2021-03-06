<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\tp5\public/../application/index\view\ambient\details.html";i:1510555727;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="/static/css/amdetails.css" type="text/css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        $(function () {
            /*
            * 点击.navbar-header img 返回上一页
            * */
            $(".navbar-header img").click(function () {
                history.back();
            })

            /*
            * 获取.ambient-content img 下以偶数 并改变样式
            * */
            $(".ambient-content img:even").attr("class","ambient-right");

            /*
            * 获取.ambient-content img下元素为4的图片 为偶数 改变其样式
            * */
            $(".ambient-content img:eq(3):even").attr("class","ambient-centre");
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
            <div class="nav-title">江北校区</div>
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
<div class="ambient-one">
    <div class="ambient-content">
        <?php if(is_array($ambient) || $ambient instanceof \think\Collection || $ambient instanceof \think\Paginator): $i = 0; $__LIST__ = $ambient;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ambient): $mod = ($i % 2 );++$i;?>
            <img class="ambient-left" src="upload/<?php echo $ambient['img_url']; ?>">
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
