<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\tp5\public/../application/admin\view\activity\add.html";i:1507705520;}*/ ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 基本表单</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/H+/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/H+/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/H+/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/H+/css/animate.min.css" rel="stylesheet">
    <link href="/static/H+/css/style.min.css" rel="stylesheet">
    <link href="/static/H+/css/style.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>活动现场添加</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">活动图片</label>

                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">活动标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">活动详情</label>
                            <div class="col-sm-10">
                                <script id="editor" type="text/plain"></script>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">状态</label>

                            <div class="radio i-checks" >
                                <label style="margin-left: 1%">
                                    <input type="radio" class="status" name="status" value="0" checked> <i></i> 显示</label>
                                <label style="margin-left: 1%">
                                    <input type="radio" class="status" name="status" value="1" > <i></i> 不显示</label>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-w-m btn-info"  type="submit">保存内容</button>
                                <button class="btn btn-white" type="reset">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/H+/js/jquery.min.js"></script>
<script src="/static/H+/js/bootstrap.min.js"></script>
<script src="/static/H+/js/content.min.js"></script>
<script src="/static/H+/js/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    ue.addListener("ready", function () {
        ue.setHeight(350);
        // editor准备好之后才可以使用

    });
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
</html>
