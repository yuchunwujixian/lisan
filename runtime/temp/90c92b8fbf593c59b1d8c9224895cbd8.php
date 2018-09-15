<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"F:\www\lisan\public/../application/admin\view\index\dashboard.html";i:1525182246;s:62:"F:\www\lisan\public/../application/admin\view\public\head.html";i:1525182246;s:68:"F:\www\lisan\public/../application/admin\view\public\javascript.html";i:1525182246;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
        <head>
        <meta charset="utf-8">
        <title>控制台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
        <!-- Loading Bootstrap -->
        <link href="__STATIC__/assets/css/backend.min.css" rel="stylesheet">
        <link href="__STATIC__/assets/css/app.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5shiv.js"></script>
          <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="inside-header inside-aside ">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    控制台                                    <small>Control panel</small>
                                </h1>
                            </section>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> 控制台</a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="javascript:;" data-url="dashboard">控制台</a></li>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <div class="content">
                                <style type="text/css">
                                    .sm-st {
                                        background:#fff;
                                        padding:20px;
                                        -webkit-border-radius:3px;
                                        -moz-border-radius:3px;
                                        border-radius:3px;
                                        margin-bottom:20px;
                                        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
                                        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
                                    }
                                    .sm-st-icon {
                                        width:60px;
                                        height:60px;
                                        display:inline-block;
                                        line-height:60px;
                                        text-align:center;
                                        font-size:30px;
                                        background:#eee;
                                        -webkit-border-radius:5px;
                                        -moz-border-radius:5px;
                                        border-radius:5px;
                                        float:left;
                                        margin-right:10px;
                                        color:#fff;
                                    }
                                    .sm-st-info {
                                        font-size:12px;
                                        padding-top:2px;
                                    }
                                    .sm-st-info span {
                                        display:block;
                                        font-size:24px;
                                        font-weight:600;
                                    }
                                    .orange {
                                        background:#fa8564 !important;
                                    }
                                    .tar {
                                        background:#45cf95 !important;
                                    }
                                    .sm-st .green {
                                        background:#86ba41 !important;
                                    }
                                    .pink {
                                        background:#AC75F0 !important;
                                    }
                                    .yellow-b {
                                        background: #fdd752 !important;
                                    }
                                    .stat-elem {

                                        background-color: #fff;
                                        padding: 18px;
                                        border-radius: 40px;

                                    }

                                    .stat-info {
                                        text-align: center;
                                        background-color:#fff;
                                        border-radius: 5px;
                                        margin-top: -5px;
                                        padding: 8px;
                                        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
                                        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
                                        font-style: italic;
                                    }

                                    .stat-icon {
                                        text-align: center;
                                        margin-bottom: 5px;
                                    }

                                    .st-red {
                                        background-color: #F05050;
                                    }
                                    .st-green {
                                        background-color: #27C24C;
                                    }
                                    .st-violet {
                                        background-color: #7266ba;
                                    }
                                    .st-blue {
                                        background-color: #23b7e5;
                                    }

                                    .stats .stat-icon {
                                        color: #28bb9c;
                                        display: inline-block;
                                        font-size: 26px;
                                        text-align: center;
                                        vertical-align: middle;
                                        width: 50px;
                                        float:left;
                                    }

                                    .stat {
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: inline-block;
                                        margin-right: 10px; }
                                    .stat .value {
                                        font-size: 20px;
                                        line-height: 24px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        font-weight: 500; }
                                    .stat .name {
                                        overflow: hidden;
                                        text-overflow: ellipsis; }
                                    .stat.lg .value {
                                        font-size: 26px;
                                        line-height: 28px; }
                                    .stat.lg .name {
                                        font-size: 16px; }
                                    .stat-col .progress {height:2px;}
                                    .stat-col .progress-bar {line-height:2px;height:2px;}

                                    .item {
                                        padding:30px 0;
                                    }
                                </style>
                                <div class="panel panel-default panel-intro">
                                    <div class="panel-heading">
                                        <div class="panel-lead"><em>控制台（Dashboard）</em>用于展示当前系统中的统计数据、统计报表及重要实时数据</div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#one" data-toggle="tab">控制台</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div id="myTabContent" class="tab-content">
                                            <div class="tab-pane fade active in" id="one">
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-6">
                                                        <div class="sm-st clearfix">
                                                            <span class="sm-st-icon st-red"><i class="fa fa-users"></i></span>
                                                            <div class="sm-st-info">
                                                                <span><?php echo $user; ?></span>
                                                                总会员数
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6">
                                                        <div class="sm-st clearfix">
                                                            <span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>
                                                            <div class="sm-st-info">
                                                                <span><?php echo $goods; ?></span>
                                                                总商品数
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6">
                                                        <div class="sm-st clearfix">
                                                            <span class="sm-st-icon st-blue"><i class="fa fa-shopping-bag"></i></span>
                                                            <div class="sm-st-info">
                                                                <span><?php echo $order; ?></span>
                                                                总订单数
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6">
                                                        <div class="sm-st clearfix">
                                                            <span class="sm-st-icon st-green"><i class="fa fa-cny"></i></span>
                                                            <div class="sm-st-info">
                                                                <span><?php echo $price; ?></span>
                                                                总收入
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div id="echart" style="height:200px;width:100%;">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card sameheight-item stats">
                                                            <div class="card-block">
                                                                <div class="row row-sm stats-container">
                                                                    <div class="col-xs-6 stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $RegisterToday; ?> </div>
                                                                            <div class="name"> 今日注册 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $LoginToday; ?> </div>
                                                                            <div class="name"> 今日登录 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6  stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $OrderToday; ?> </div>
                                                                            <div class="name"> 今日订单 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6  stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $OrderPost; ?> </div>
                                                                            <div class="name"> 未处理订单 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6  stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $OrderWeek; ?> </div>
                                                                            <div class="name"> 近一周订单 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 stat-col">
                                                                        <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                                                        <div class="stat">
                                                                            <div class="value"> <?php echo $OrderMonth; ?> </div>
                                                                            <div class="name"> 近一月订单 </div>
                                                                        </div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hidden">
                                                    <div class="col-lg-4">
                                                        <div class="box">
                                                            <div class="box-header"><h3 class="box-title">温馨设置</h3></div>
                                                            <div class="box-body">test test</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="box">
                                                            <div class="box-header">cccc</div>
                                                            <div class="box-body">test test</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="box">
                                                            <div class="box-header">cccc</div>
                                                            <div class="box-body">test test</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row hidden" style="margin-top:15px;">

                                                    <div class="col-lg-12">
                                                        <h4>详细统计</h4>
                                                    </div>
                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="panel bg-blue">
                                                            <div class="panel-body">
                                                                <div class="panel-title">
                                                                    <span class="label label-success pull-right">管理</span>
                                                                    <h5>教练统计</h5>
                                                                </div>
                                                                <div class="panel-content">
                                                                    <h1 class="no-margins">1234</h1>
                                                                    <div class="stat-percent font-bold text-gray"><i class="fa fa-commenting"></i> 1234</div>
                                                                    <small>总评论数</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="panel bg-aqua-gradient">
                                                            <div class="panel-body">
                                                                <div class="ibox-title">
                                                                    <span class="label label-info pull-right">管理</span>
                                                                    <h5>文章统计</h5>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <h1 class="no-margins">1043</h1>
                                                                    <div class="stat-percent font-bold text-gray"><i class="fa fa-modx"></i> 2592</div>
                                                                    <small>总文章数</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="panel bg-purple-gradient">
                                                            <div class="panel-body">
                                                                <div class="ibox-title">
                                                                    <span class="label label-primary pull-right">管理</span>
                                                                    <h5>动态统计</h5>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h1 class="no-margins">1234</h1>
                                                                            <div class="font-bold text-navy"><i class="fa fa-commenting"></i> <small>总评论数</small></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h1 class="no-margins">6754</h1>
                                                                            <div class="font-bold text-navy"><i class="fa fa-heart"></i> <small>总评论点赞数</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-3">
                                                        <div class="panel bg-green-gradient">
                                                            <div class="panel-body">
                                                                <div class="ibox-title">
                                                                    <span class="label label-primary pull-right">管理</span>
                                                                    <h5>活动统计</h5>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h1 class="no-margins">5302</h1>
                                                                            <div class="font-bold text-navy"><i class="fa fa-commenting"></i> <small>总评论数</small></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h1 class="no-margins">8205</h1>
                                                                            <div class="font-bold text-navy"><i class="fa fa-user"></i> <small>总参与人数</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var Orderdata = <?php echo $OrderData; ?>;
                                    </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript">
    var debug="<?php echo $app_debug; ?>";
    var version="<?php echo VERSION; ?>";
    var root="__STATIC__";
    var jsname="backend/dashboard";
    var controllername="dashboard"
    var actionname="index";
</script>        
<script src="__STATIC__/assets/js/config.js?v=<?php echo VERSION; ?>"></script>
<script src="__STATIC__/assets/js/require.min.js?v=<?php echo VERSION; ?>" data-main="__STATIC__/assets/js/require-backend.min.js?v=<?php echo VERSION; ?>"></script>
    </body>
</html>