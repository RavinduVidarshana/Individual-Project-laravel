<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->

    @yield('css-content')
</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <header class="main-header hidden-print"><a class="logo" href="#">Temple Assistance</a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->
                    <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                                              aria-expanded="false"><i
                                class="fa fa-bell-o fa-lg"></i></a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have 4 new notifications.</li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span
                                            class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                                class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                            class="text-muted block">2min ago</span></div>
                                </a></li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span
                                            class="fa-stack fa-lg"><i
                                                class="fa fa-circle fa-stack-2x text-danger"></i><i
                                                class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span
                                            class="text-muted block">2min ago</span></div>
                                </a></li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span
                                            class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i
                                                class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span
                                            class="text-muted block">2min ago</span></div>
                                </a></li>
                            <li class="not-footer"><a href="#">See all notifications.</a></li>
                        </ul>
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                            <li><a href="/templeProfile"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                            <li><a href="/"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img class="img-circle"
                                                  src="images/user.png"
                                                  alt="User Image"></div>
                <div class="pull-left info">
                    <p><a href="/templeProfile">Temple Name</a></p>
                    <p class="designation">Main Monk Name</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">

                <li class="active"><a href="/templeDashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a href="/templeDaneSchedule"><i class="fa fa-calendar"></i><span>Dane Schedule</span></a></li>
                <li><a href="/templeEventManage"><i class="fa fa-globe"></i><span>Events</span></a></li>
                <li><a href="/templeNews"><i class="fa fa-info-circle"></i><span>News</span></a></li>


                <li class="treeview"><a href="#"><i class="fa fa-book"></i><span>Dhamma School</span><i
                            class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/templeDhammaSchool"><i class="fa fa-circle-o"></i>Management</a>
                        <li><a href="/templeDhammaEvent"><i class="fa fa-square-o"></i>Events</a></li>
                    </ul>
                </li>

                <li class="treeview"><a href="#"><i class="fa fa-users"></i><span>Welfare Society</span><i
                            class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="templeWelfareEvent"><i class="fa fa-circle-o"></i>Management</a>
                        <li><a href=" /templeWelfareSociety"><i class="fa fa-square-o"></i>Events</a></li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>


@yield('body-content')





<!-- Javascripts-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script src="js/main.js"></script>
@yield('js-content')

</div>

</body>
</html>
