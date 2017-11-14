<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/admin\view\index\login.html";i:1508488130;}*/ ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:23 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo $data['title']; ?></title>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>">
    <meta name="description" content="<?php echo $data['qyxdescribe']; ?>">

    <link rel="shortcut icon" href="/static/H+/img/favicon.ico">
    <link href="/static/H+/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/H+/css/font-awesome.min.css" rel="stylesheet">

    <link href="/static/H+/css/animate.min.css" rel="stylesheet">
    <link href="/static/H+/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">H+</h1>

        </div>
        <h3>欢迎使用 H+</h3>

        <form class="m-t" role="form" action="http://www.zi-han.net/theme/hplus/index.html">
            <div class="form-group">
                <input type="text" class="form-control uname" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control upwd" placeholder="密码" required="">
            </div>
            <button type="button" class="btn btn-primary block full-width m-b">登 录</button>


            <!--<p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a></p>-->

        </form>
    </div>
</div>
<script src="/static/H+/js/jquery.min.js"></script>
<script src="/static/H+/js/bootstrap.min.js"></script>
<script src="/static/layer/layer.js"></script>
<script type="text/javascript">

    $('.btn-primary').on('click', function(){
        var uname   =   $.trim($(".uname").val());
        var upwd    =   $.trim($(".upwd").val());
        if (uname == ''){
            layer.msg('用户名不能为空', function(){
            });
            $(".uname").focus();
            return false;
        }else if(upwd == ''){
            layer.msg('密码不能为空', function(){
            });
            $(".upwd").focus();
            return false;
        }
        $.post(
            "<?php echo url('admin/Index/login'); ?>",
            {uname: uname, upwd: upwd},
            function (data) {
                console.log(data);
                if (data.res == 1) {
                    layer.alert('登录成功！', {
                        icon: 6,
                        btn: ['确认', '取消'],
                        yes: function() {
                            window.location.href="<?php echo url('admin/index/index'); ?>";
                        }
                    });
                }else {
                    layer.alert('登录失败，请检查用户名和密码！', {
                        icon: 5,
                        btn: ['确认', '取消'],
                    });
                }
            }, "json");
    });
</script>
</body>
</html>
