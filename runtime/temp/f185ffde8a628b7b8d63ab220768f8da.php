<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\xampp\htdocs\tp5\public/../application/admin\view\tape\index.html";i:1510561881;}*/ ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/H+/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/H+/css/font-awesome.min.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/static/H+/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/static/H+/css/animate.min.css" rel="stylesheet">
    <link href="/static/H+/css/style.min.css" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>录音棚列表</h5>
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
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>缩略图</td>
                            <td>标题</td>
                            <td>英文标题</td>
                            <td>添加时间</td>
                            <td>内容</td>
                            <td>状态</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr class="grade">
                            <td><?php echo $vo['id']; ?></td>
                            <td>
                                <img src="upload/<?php echo $vo['img_url']; ?>"/>
                            </td>
                            <td><?php echo $vo['title']; ?></td>
                            <td><?php echo $vo['en_title']; ?></td>
                            <td>
                                <?php echo date("Y-m-d H:i:s",$vo['addtime']); ?>
                            </td>
                            <td>
                                <?php echo mb_substr(strip_tags($vo['content']),0,10,'utf-8'); ?>
                            </td>
                            <td>
                                <?php if($vo['status'] == 0): ?>显示
                                <?php else: ?> 不显示
                                <?php endif; ?>

                            </td>
                            <td>
                                <a target="_self" href="<?php echo url('admin/Tape/mod',['id' => $vo['id']]); ?>">修改</a>
                                <a class="del" target="_self" value="<?php echo $vo['id']; ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                    <?php echo $page; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/H+/js/jquery.min.js"></script>
<script src="/static/H+/js/bootstrap.min.js"></script>
<script src="/static/H+/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="/static/H+/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/static/H+/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/static/H+/js/content.min.js"></script>
<script src="/static/Jqthumb/jqthumb.js"></script>
<script src="/static/Jqthumb/jqthumb.min.js"></script>
<script src="/static/layer/layer.js"></script>
<script>
    $(function () {
        $('.grade td img').jqthumb({
            width:150,
            height:150
        });

        $(".del").click(function () {
            var tid  =   $(this).attr('value');
            $.post(
                "<?php echo url('admin/Tape/del'); ?>",
                {tid: tid},
                function (data) {
                    console.log(data);
                    if (data.res == 1) {
                        layer.alert("删除录音棚成功！",{
                            icon: 6,
                            btn: ['确认', '取消'],
                            yes: function() {
                                window.location.href="<?php echo url('admin/Tape/index'); ?>";
                            }
                        });
                    }
                }, "json");
        });
    });
</script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:02 GMT -->
</html>
