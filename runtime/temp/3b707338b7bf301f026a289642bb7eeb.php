<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\tp5\public/../application/index\view\bespoke\index.html";i:1509607629;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="/static/css/bespoke.css" type="text/css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/static/Jqthumb/jqthumb.min.js"></script>
    <script src="/static/laydate/laydate.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".navbar-header img").click(function () {
                history.back();
            });

            laydate.render({
                elem: '.demo-input'
                ,type: 'datetime'
            });
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
            <div class="nav-title">免费预约</div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
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
    </div><!-- /.container-fluid -->
</nav>
<div class="bespoke-big">
<div class="bespoke">
    <div class="bespoke-title">
        请填写完整资料，可享受一对一60分钟免费专业课程一节。
    </div>
    <div class="bespoke-name">
        <input type="text" class="uname" value="请输入您的姓名" onfocus="if(value=='请输入您的姓名')  {value=''}" onblur="if (value=='') {value='请输入您的姓名'}">
        <span class="name-xian">|</span>
        <img src="/static/images/kuang1.jpg" class="name-img">
    </div>
    <div class="bespoke-name">
        <input type="text" class="utel" value="请输入手机号" onfocus="if(value=='请输入手机号')  {value=''}" onblur="if (value=='') {value='请输入手机号'}">
        <span class="name-xian">|</span>
        <img src="/static/images/kuang2.jpg" class="name-img">
    </div>
</div>
<div class="usex">
    <label class="usex-title">性别：</label>
    <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 男
    </label>
    <label class="radio-inline usex-right">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 女
    </label>
</div>
<div class="subjects-title">感兴趣的科目：</div>
<ul class="subjects-list">
    <li>
        <label class="checkbox-inline">
            <input type="checkbox"  value="架子鼓">架子鼓
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="流行声乐唱法">流行声乐唱法
        </label>
    </li>
    <li>
        <label class="checkbox-inline">
            <input type="checkbox"  value="吉他">吉他 &nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="尤克里里">尤克里里
        </label>
    </li>
    <li>
        <label class="checkbox-inline">
            <input type="checkbox"  value="爵士舞">爵士舞
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="数码键盘">数码键盘
        </label>
    </li>
    <li>
        <label class="checkbox-inline">
            <input type="checkbox"  value="录音棚">录音棚
        </label>
        <label class="checkbox-inline">
            <input type="checkbox"  value="贝斯">贝斯
        </label>
    </li>
</ul>
<div class="order-time">
    <div class="order-title">预约时间：</div>
    <input type="text" class="demo-input" placeholder="请选择日期">
</div>
<div class="bottom">
    <button type="submit" class="btn btn-danger">提交</button>
</div>
</div>
</body>
</html>