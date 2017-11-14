<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\tp5\public/../application/admin\view\intercalate\index.html";i:1508490449;}*/ ?>
<!DOCTYPE html>
<html>
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

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站设置</h5>
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
                    <form method="" class="form-horizontal">
                        <div class="form-group" hidden>
                            <label class="col-sm-2 control-label">id</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control iid" value="<?php echo $data['id']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control title" value="<?php echo $data['title']; ?>">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站关键字</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control keywords" value="<?php echo $data['keywords']; ?>">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站描述</label>
                            <div class="col-sm-10">
                                <script id="editor" type="text/plain"></script>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-w-m btn-info"  type="button">保存内容</button>
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
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
<script src="/static/layer/layer.js"></script>
<script>
        var ue = UE.getEditor('editor');
        ue.addListener("ready", function () {
            ue.setHeight(350);
            var content = '<?php echo $data['qyxdescribe']; ?>';
            ue.setContent(content);
        });

    $(".btn-info").click(function() {
        var iid             =   $(".iid").val();
        var title           =   $.trim($(".title").val());
        var keywords        =   $.trim($(".keywords").val());
        var qyxdescribe      =   ue.getContentTxt();
        $.post(
            "<?php echo url('admin/Intercalate/mod'); ?>",
            {iid: iid, title: title, keywords: keywords, qyxdescribe:qyxdescribe},
            function (data) {
                console.log(data);
                if (data.res == 1) {
                    layer.alert('修改网站设置成功！', {
                        icon: 6,
                        btn: ['确认', '取消'],
                        yes: function() {
                            window.location.href="<?php echo url('admin/Intercalate/index'); ?>";
                        }
                    });
                }else {
                    layer.alert('修改网站设置失败！', {
                        icon: 5,
                        btn: ['确认', '取消'],
                    });
                }
            }, "json");
});
</script>
</body>

</html>
