<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\tp5\public/../application/admin\view\about\contact_mod.html";i:1508492031;}*/ ?>
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
                    <h5>联系我们修改</h5>
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
                            <label class="col-sm-2 control-label">Id</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control aid" value="<?php echo $data['id']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">校区</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b two_name">
                                    <?php if(is_array($twonav) || $twonav instanceof \think\Collection || $twonav instanceof \think\Paginator): $i = 0; $__LIST__ = $twonav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$twonav): $mod = ($i % 2 );++$i;if($twonav['two_id'] == $data['two_id']): ?>
                                    <option value="<?php echo $data['two_id']; ?>" selected="selected"><?php echo $twonav['two_title']; ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $twonav['two_id']; ?>"><?php echo $twonav['two_title']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">校区地址</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control address" value="<?php echo $data['address']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">咨询电话</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control tel" value="<?php echo $data['tel']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">咨询微信</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control wechat" value="<?php echo $data['wechat']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系QQ</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control qq" value="<?php echo $data['qq']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网址</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control url" value="<?php echo $data['url']; ?>">
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
<script src="/static/layer/layer.js"></script>
<script>
    //    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    $(".btn-info").click(function() {
        var aid         =   $(".aid").val();
        var two_id      =   $(".two_name").find("option:selected").val();
        var address     =   $.trim($(".address").val());
        var tel         =   $.trim($(".tel").val());
        var wechat      =   $.trim($(".wechat").val());
        var qq          =   $.trim($(".qq").val());
        var url         =   $.trim($(".url").val());
        var status      = $(':radio[name="status"]:checked').val();
        $.post(
            "<?php echo url('admin/About/contact_mod'); ?>",
            {aid: aid, two_id: two_id, address: address, tel: tel, wechat: wechat, qq: qq, url: url, status:status},
            function (data) {
                console.log(data);
                if (data.res == 1) {
                    layer.alert('修改联系我们成功！', {
                        icon: 6,
                        btn: ['确认', '取消'],
                        yes: function () {
                            window.location.href = "<?php echo url('admin/About/contact'); ?>";
                        }
                    });
                }else {
                    layer.alert('修改联系我们失败！', {
                        icon: 5,
                        btn: ['确认', '取消'],
                    });
                }
            }, "json");
    });
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
</html>
