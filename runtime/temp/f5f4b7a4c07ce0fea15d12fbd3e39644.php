<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/index\view\index\index.html";i:1510111660;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/static/bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="/static/swiper/css/swiper.min.css">
    <script src="/static/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/static/swiper/js/swiper.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/static/layer/layer.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".navbar-nav li a").on("click",function () {
                $(".navbar-nav li").css("background-color","#000000");
                $(this).css("background-color","#1F2120");
            });

            layer.photos({
                photos:'.banner',
                area: 'auto',
                maxWidth:330
                ,anim: 1 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
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

<div class="banner">
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide"><img src="upload/<?php echo $banner['img_url']; ?>" class="img-responsive" alt=""></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="studio">
        <div class="studio-content">
            <img src="/static/images/thumb.jpg" alt="" class="img-circle">
            <div class="studio-font">流行声乐</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/gangqin.jpg" alt="" class="img-circle">
            <div class="studio-font">数码键盘</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/youke.jpg" alt="" class="img-circle">
            <div class="studio-font">尤克里里</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/jiazigu.jpg" alt="" class="img-circle">
            <div class="studio-font">架子鼓</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/jita.jpg" alt="" class="img-circle">
            <div class="studio-font">吉他</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/jueshiwu.jpg" alt="" class="img-circle">
            <div class="studio-font">爵士舞</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/beishi.jpg" alt="" class="img-circle">
            <div class="studio-font">贝斯</div>
        </div>
        <div class="studio-content">
            <img src="/static/images/luyinpeng.jpg" alt="" class="img-circle">
            <div class="studio-font">录音棚</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="teachers">
        <div class="teachers-title">
            <div class="teachers-title-left">|&nbsp;&nbsp;师资力量</div>
            <div class="teachers-title-right">
                <div class="teachers-title-font"><a href="<?php echo url('index/Teachers/index/'); ?>"> 全部<?php echo $teacher_count; ?>位老师</a></div>
                <div class="teachers-title-img">
                    <a href="<?php echo url('index/Teachers/index/'); ?>">
                        <img src="/static/images/img.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div class="teachers-list">
            <?php if(is_array($teacher) || $teacher instanceof \think\Collection || $teacher instanceof \think\Paginator): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$teacher): $mod = ($i % 2 );++$i;?>
            <div class="teacher-list">
                <div class="teacher-img">
                    <a href="<?php echo url('index/Teachers/details/',['id' => $teacher['id']]); ?>">
                    <img src="upload/<?php echo $teacher['img_url']; ?>" style="height: 87px;" class="img-responsive" alt="" >
                    </a>
                </div>
                <div class="teacher-name"><a href="<?php echo url('index/Teachers/details/',['id' => $teacher['id']]); ?>"><?php echo $teacher['name']; ?></a></div>
                <div class="teacher-age"><a href="<?php echo url('index/Teachers/details/',['id' => $teacher['id']]); ?>"><?php echo $teacher['t_age']; ?>年教龄</a></div>
                <div class="teacher-job"><a href="<?php echo url('index/Teachers/details/',['id' => $teacher['id']]); ?>"><?php echo $teacher['job']; ?></a></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="video">
        <div class="video-title">
            <div class="video-title-left">|&nbsp;&nbsp;视频合辑</div>
            <div class="video-title-right">
                <div class="video-title-font">更多</div>
                <div class="video-title-img"><img src="/static/images/img.jpg"></div></div>
        </div>
    <div class="wrapper2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/static/images/banner.jpg" class="" alt="Responsive image"></div>
                <div class="swiper-slide"><img src="/static/images/banner.jpg" class="" alt="Responsive image"></div>
                <div class="swiper-slide"><img src="/static/images/banner.jpg" class="" alt="Responsive image"></div>
            </div>
        </div>
    </div>
    </div>
    <div class="information">
        <div class="information-title">
            <div class="information-title-left">|&nbsp;&nbsp;音乐小知识</div>
            <div class="information-title-right">
                <div class="information-title-font"><a href="<?php echo url('index/Information/index/'); ?>"> 更多</a></div>
                <div class="information-title-img">
                    <a href="<?php echo url('index/Information/index/'); ?>">
                        <img src="/static/images/img.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div class="information_news">
            <?php if(is_array($small) || $small instanceof \think\Collection || $small instanceof \think\Paginator): $i = 0; $__LIST__ = $small;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$small): $mod = ($i % 2 );++$i;?>
            <div class="information_list">
                <div class="information_img"><a href="<?php echo url('index/Information/index/',['i' => 1]); ?>"><img src="upload/<?php echo $small['img_url']; ?>"></a></div>
                <div class="information_title"><?php echo mb_substr($small['title'],0,13,'utf-8'); ?></div>
                <div class="information_content"><?php echo mb_substr($small['content'],0,49,'utf-8'); ?></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="ambient">
        <div class="ambient-title">
            <div class="ambient-title-left">|&nbsp;&nbsp;教学环境</div>
            <div class="ambient-title-right">
                <div class="ambient-title-font"><a href="<?php echo url('index/Ambient/index/'); ?>"> 更多</a></div>
                <div class="ambient-title-img"><a href="<?php echo url('index/Ambient/index/'); ?>"><img src="/static/images/bj1.jpg"></a></div></div>
        </div>
        <div class="wrapper3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($ambient) || $ambient instanceof \think\Collection || $ambient instanceof \think\Paginator): $i = 0; $__LIST__ = $ambient;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ambient): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide"><img src="upload/<?php echo $ambient['img_url']; ?>" class="" alt="Responsive image"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="activity">
        <div class="activity-title">
            <div class="activity-title-left">|&nbsp;&nbsp;活动现场</div>
            <div class="activity-title-right">
                <div class="activity-title-font"><a href="<?php echo url('index/Activity/index/'); ?>">更多</a></div>
                <div class="activity-title-img"><a href="<?php echo url('index/Activity/index/'); ?>"><img src="/static/images/bj1.jpg"></a></div></div>
        </div>
        <div class="wrapper4">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if(is_array($activity) || $activity instanceof \think\Collection || $activity instanceof \think\Paginator): $i = 0; $__LIST__ = $activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activity): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide"><img src="upload/<?php echo $activity['img_url']; ?>" class="" alt="Responsive image"></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    </div>
    <div class="contact">
        <div class="ambient-title">
            <div class="ambient-title-left">|&nbsp;&nbsp;联系我们</div>
            <div class="contact-content">
                <div class="address">
                    <div class="address-img">
                        <img src="/static/images/address.jpg">
                    </div>
                    <div class="address-list">
                        <div class="campus"><?php echo $contact[0]["two_title"]; ?>：<?php echo $contact[0]["address"]; ?></div>
                        <div class="campus"><?php echo $contact[1]["two_title"]; ?>：<?php echo $contact[1]["address"]; ?></div>
                    </div>
                </div>
                <div class="tel-list">
                    <div class="tel-img">
                        <img src="/static/images/tel.jpg">
                    </div>
                    <div class="tel">咨询电话：</div><div class="camera"><?php echo $contact[0]["tel"]; ?></div>
                   <div class="camera"><?php echo $contact[1]["tel"]; ?></div>
                </div>
                <div class="tel-list">
                    <div class="tel-img">
                        <img src="/static/images/wechat.jpg">
                    </div>
                    <div class="tel">咨询微信：</div><div class="camera"><?php echo $contact[0]["wechat"]; ?></div>
                    <div class="camera"><?php echo $contact[1]["wechat"]; ?></div>
                </div>
                <div class="tel-list">
                    <div class="tel-img">
                        <img src="/static/images/wechat.jpg">
                    </div>
                    <div class="tel">咨询QQ：</div><div class="camera"><?php echo $contact[0]["qq"]; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="dexter">
        <a href="<?php echo url('index/Bespoke/index/'); ?>"><img src="/static/images/right-1.jpg" class="img-rounded"></a>
        <img src="/static/images/right-2.jpg" class="img-rounded">
    </div>
</div>
</div>


<!-- Swiper JS -->
<script src="/static/swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var banner = new Swiper('.banner .swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 4000,//可选选项，自动滑动
        autoplayDisableOnInteraction : false,
        loop:false,
    });

    var Swiper2 = new Swiper('.wrapper2 .swiper-container', {
        pagination: '.pagination',
        slidesPerView: 2,
        paginationClickable: true,
        spaceBetween: 130,
        freeMode : true,
        freeModeMomentum : true,
        loop : true,

    });
    var Swiper3 = new Swiper('.wrapper3 .swiper-container', {
        pagination: '.pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode : true,
        freeModeMomentum : true,
        loop : true,
    });
    var Swiper4 = new Swiper('.wrapper4 .swiper-container', {
        pagination: '.pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode : true,
        freeModeMomentum : true,
        loop : true,
    });
</script>

</body>
</html>