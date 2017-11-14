<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\tp5\public/../application/admin\view\index\index.html";i:1510557597;}*/ ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo $data['title']; ?></title>

    <meta name="keywords" content="<?php echo $data['keywords']; ?>">
    <meta name="description" content="<?php echo $data['qyxdescribe']; ?>">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="/static/H+/img/favicon.ico">

    <link href="/static/H+/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/H+/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/H+/css/animate.min.css" rel="stylesheet">
    <link href="/static/H+/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/iconfont/iconfont.css">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/static/H+/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo $name; ?></strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!--<li><a class="J_menuItem" href="form_avatar.html">修改头像</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="profile.html">个人资料</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="contacts.html">联系我们</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="mailbox.html">信箱</a>-->
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo url('admin/Index/quit'); ?>">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">主页</span>
                    </a>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-user"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo url('admin/User/index'); ?>">用户列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo url('admin/User/add'); ?>">添加用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-daohang"></i> <span class="nav-label">导航管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Nav/index'); ?>">一级导航列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Twonav/index'); ?>">二级导航列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-1"></i> <span class="nav-label">音乐资讯</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Information/index'); ?>">行业动态列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Information/ongaku'); ?>">音乐小知识列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Information/affiche'); ?>">公告列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Information/recruit'); ?>">招聘列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-environment"></i> <span class="nav-label">教学环境管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Ambient/index'); ?>">江北校区</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Ambient/nindex'); ?>">南坪校区</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Ambient/ambienttype'); ?>">教学环境分类管理</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-huodong"></i> <span class="nav-label">活动现场管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Activity/index'); ?>">活动现场列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Activity/add'); ?>">活动现场添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-luyinpeng"></i> <span class="nav-label">录音棚</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Tape/index'); ?>">录音棚列表</a>
                        </li>
                        <li>
                        <a class="J_menuItem" href="<?php echo url('admin/Tape/add'); ?>">录音棚添加</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Tape/tape_assistant'); ?>">录音棚图片管理</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-jiaoshi"></i> <span class="nav-label">师资力量</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Teachers/index'); ?>">师资列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Teachers/add'); ?>">师资添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-guanyuwomen"></i> <span class="nav-label">关于我们管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/About/index'); ?>">关于我们</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/About/contact'); ?>">联系我们</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-guanyuwomen"></i> <span class="nav-label">banner管理</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Banner/index'); ?>">banner列表</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo url('admin/Banner/add'); ?>">banner添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="icon iconfont icon-shezhi"></i> <span class="nav-label">网站设置</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo url('admin/Intercalate/index'); ?>">网站设置详情</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">


                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">

                    <li class="J_tabCloseAll"><a>关闭当前选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo url('admin/Index/quit'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2017-2018 <a href="" target="_blank">PineHU</a>
            </div>
        </div>
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    <div id="right-sidebar">
        <div class="sidebar-container">

            <ul class="nav nav-tabs navs-3">

                <li class="active" style="width:100%;">
                    <a data-toggle="tab" href="#tab-1">
                        <i class="fa fa-gear"></i> 主题
                    </a>
                </li>


            </ul>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                        <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                    </div>
                    <div class="skin-setttings">
                        <div class="title">主题设置</div>
                        <div class="setings-item">
                            <span>收起左侧菜单</span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                    <label class="onoffswitch-label" for="collapsemenu">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>固定顶部</span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                    <label class="onoffswitch-label" for="fixednavbar">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                    <label class="onoffswitch-label" for="boxedlayout">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="title">皮肤选择</div>
                        <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                        </div>
                        <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                        </div>
                        <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--右侧边栏结束-->
    <!--mini聊天窗口开始-->
<script src="/static/H+/js/jquery.min.js"></script>
<script src="/static/H+/js/bootstrap.min.js"></script>
<script src="/static/H+/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/static/H+/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/H+/js/plugins/layer/layer.min.js"></script>
<script src="/static/H+/js/hplus.min.js"></script>
<script type="text/javascript" src="/static/H+/js/contabs.min.js"></script>
<script src="/static/H+/js/plugins/pace/pace.min.js"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:17:11 GMT -->
</html>
