<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/admin\view\about\index.html";i:1510196079;}*/ ?>
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
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>关于我们</h5>
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
                                <input type="text" class="form-control aid" value="<?php echo $data['id']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">办学理念</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control idea" value="<?php echo $data['idea']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">办学特点</label>
                            <div class="col-sm-10">
                                <textarea class="form-control trait" style="height: 200px;" rows="3" cols="200">
                                    <?php echo $data['trait']; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">结构简介</label>
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
    var ue  =   UE.getEditor('editor');
    var content     =   '<?php echo $data['synopsis']; ?>';
    ue.addListener("ready", function () {
        ue.setHeight(350);
        ue.setContent(content);
    });
    //    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    $(".btn-info").click(function() {

        var aid             =   $(".aid").val();
        var idea            =   $.trim($(".idea").val());
        var trait           =   $(".trait").val();
        var synopsis        =   ue.getContent();

        $.post(
            "<?php echo url('admin/About/mod'); ?>",
            {aid: aid, idea:idea, trait:trait, synopsis:synopsis},
            function (data) {
                console.log(data);
                if (data.res == 1) {
                    layer.alert('修改关于我们成功！', {
                        icon: 6,
                        btn: ['确认', '取消'],
                        yes: function() {
                            window.location.href="<?php echo url('admin/About/index'); ?>";
                        }
                    });
                }else {
                    layer.alert('修改关于我们失败！', {
                        icon: 5,
                        btn: ['确认', '取消'],
                    });
                }
            }, "json");
    })
</script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
</html>
