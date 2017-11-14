<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\tp5\public/../application/index\view\information\index.html";i:1510559846;}*/ ?>
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
    <script type="text/javascript">
        $(function(){
            $(".music-two").on("click",function(){
                $(".music-two").css("background-color","#2F2F2F");
                $(this).css("background-color","#565656");
            })

            $(".affiche-list ul li").on("click",function(){
                $(".affiche-list ul li").css("color","#F1F1F1");
                $(this).css("color","#939292");
            })

            $(".navbar-nav li a").on("click",function () {
                $(".navbar-nav li").css("background-color","#000000");
                $(this).css("background-color","#1F2120");
            });

            var i = $(".i").val();
            if (i == 1){
                $(".music-two:eq(0)").css("background-color","#2F2F2F");
                $(".music-two:eq(1)").css("background-color","#565656");
                $("#home").attr("class","tab-pane");
                $("#profile").attr("class","tab-pane active");
            }

            $(".affiche-list ul li:eq(0)").attr("class","affiche-action");

            $(".affiche-list ul li").click(function () {
                var font_id = $(this).attr("value");
                $.post(
                    "<?php echo url('index/Information/getid'); ?>",
                    {font_id: font_id},
                    function (data) {
                        $(".affiche-cont").html(data.res.content);
                    }, "json");
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
                <li><a href="<?php echo url('index/Program/index/'); ?>">教学项目</a></li>
                <li><a href="">视频合集</a></li>
                <li><a href="<?php echo url('index/Ambient/index/'); ?>">教学环境</a></li>
                <li><a href="<?php echo url('index/Activity/index/'); ?>">活动现场</a></li>
                <li><a href="">录音棚</a></li>
                <li><a href="<?php echo url('index/About/index/'); ?>">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div class="nav-centre">
            <div class="nav-title">音乐资讯</div>
            <div class="nav-en">Music Information</div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<input type="text" value="<?php echo $i; ?>" hidden class="i">
<div class="information_two">
    <div class="music-two active">
        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">行业动态</a>
    </div>
    <div class="music-two">
        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">音乐小知识</a>
    </div>
    <div class="music-two">
        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">公告</a>
    </div>
    <div class="music-two">
        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">招聘</a>
    </div>
</div>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <div role="tabpanel" class="information-content tab-pane active">
            <?php if(is_array($trade) || $trade instanceof \think\Collection || $trade instanceof \think\Paginator): $i = 0; $__LIST__ = $trade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$trade): $mod = ($i % 2 );++$i;?>
            <div class="information-list">
                <div class="information-img"><a href="<?php echo url('index/Information/details/'); ?>"><img src="upload/<?php echo $trade['img_url']; ?>"></a></div>
                <div class="informationtitle"><a href="<?php echo url('index/Information/details/'); ?>"><?php echo mb_substr($trade['title'],0,13,'utf-8'); ?></a></div>
                <div class="informationt-content"><a href="<?php echo url('index/Information/details/'); ?>"><?php echo mb_substr($trade['content'],0,44,'utf-8'); ?></a></div>
                <div class="informationt-time"><a href="<?php echo url('index/Information/details/'); ?>"><?php echo date("Y-m-d",$trade['addtime']); ?></a></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <div class="music-ontent">
            <?php if(is_array($small) || $small instanceof \think\Collection || $small instanceof \think\Paginator): $i = 0; $__LIST__ = $small;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$small): $mod = ($i % 2 );++$i;?>
            <div class="music-list">
                <div class="music-img"><img src="upload/<?php echo $small['img_url']; ?>"></div>
                <div class="music-title"><?php echo $small['title']; ?></div>
                <div class="music-des"><?php echo mb_substr($small['content'],0,70,'utf-8'); ?></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        <div class="affiche-content">
            <div class="affiche-cont">
                <?php echo $affiche_data['content']; ?>
            </div>
            <div class="affiche-list">
                <ul>
                    <?php if(is_array($affiche_list) || $affiche_list instanceof \think\Collection || $affiche_list instanceof \think\Paginator): $i = 0; $__LIST__ = $affiche_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$affiche_list): $mod = ($i % 2 );++$i;?>
                    <li value="<?php echo $affiche_list['id']; ?>"><img src="/static/images/music-img.jpg" /><?php echo $affiche_list['title']; ?><span class="affiche-time"><?php echo date("Y-m-d",$affiche_list['addtime']); ?></span></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
        <div class="recruit">
            <table>
                <tr class="recruit-head">
                    <td class="job">招聘职位</td>
                    <td class="job-describe">职位描述</td>
                </tr>
                <?php if(is_array($recruit) || $recruit instanceof \think\Collection || $recruit instanceof \think\Paginator): $i = 0; $__LIST__ = $recruit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recruit): $mod = ($i % 2 );++$i;?>
                <tr class="recruit-centre">
                    <td class="job-title"><?php echo $recruit['job']; ?></td>
                    <td class="job-content">
                        <?php echo $recruit['job_describe']; ?>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <tr class="recruit-below">
                    <td colspan="2">
                        <div>面试地址：<?php echo $recruit_bottom['address']; ?></div>
                        <div class="recruit-below-tel">联系电话：<?php echo $recruit_bottom['tel']; ?></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>