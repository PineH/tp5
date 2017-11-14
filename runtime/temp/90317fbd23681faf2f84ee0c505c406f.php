<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/admin\view\ambient\mod.html";i:1506741006;}*/ ?>
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
    <script src="/static/H+/js/jquery.min.js"></script>
    <script src="/static/Jqthumb/jqthumb.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.col-sm-10 img').jqthumb({
                width:150,
                height:150
            });
        });
    </script>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>教学环境修改</h5>
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
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group" hidden>
                            <label class="col-sm-2 control-label">id</label>

                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="aid" value="<?php echo $data['id']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <img src="upload/<?php echo $data['img_url']; ?>">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">校区</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b" name="two_id">

                                    <?php if(is_array($two_nav) || $two_nav instanceof \think\Collection || $two_nav instanceof \think\Paginator): $i = 0; $__LIST__ = $two_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$two_nav): $mod = ($i % 2 );++$i;if($two_nav['two_id'] == $data['two_id']): ?>
                                    <option value="<?php echo $two_nav['two_id']; ?>" selected="selected"><?php echo $two_nav['two_title']; ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $two_nav['two_id']; ?>"><?php echo $two_nav['two_title']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">状态</label>

                            <div class="radio i-checks" >
                                <label style="margin-left: 1%">
                                    <input type="radio" value="0" name="status" checked> <i></i> 显示</label>
                                <label style="margin-left: 1%">
                                    <input type="radio" value="1" name="status"> <i></i> 不显示</label>
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
<script src="/static/H+/js/bootstrap.min.js"></script>
<script src="/static/H+/js/content.min.js"></script>
<script src="/static/H+/js/plugins/iCheck/icheck.min.js"></script>
<script>
    //    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
</html>
