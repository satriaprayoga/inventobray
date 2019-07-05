<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <!-- Styles -->
    </head>
<body class="fix-header card-no-border fix-sidebar">
    <div id="app">
        <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./images/lotte-corporation.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                        
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="./images/lotte-corporation-logo.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            
                            </span>
                        </a>
                    </div>
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i
                            class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark"
                            href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item hidden-sm-down"></li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                class="ti-close"></i></a> 
                                </form>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
        <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <!-- <li class="user-profile">
                                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Steave Jobs </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="javascript:void()">My Profile </a></li>
                                        <li><a href="javascript:void()">My Balance</a></li>
                                        <li><a href="javascript:void()">Inbox</a></li>
                                        <li><a href="javascript:void()">Account Setting</a></li>
                                        <li><a href="javascript:void()">Logout</a></li>
                                    </ul>
                                </li>
                                <li class="nav-devider"></li> -->
                                <li class="nav-small-cap">PERSONAL</li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                                    class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="index.html">Minimal </a></li>
                                        <li><a href="index2.html">Analytical</a></li>
                                        <li><a href="index3.html">Demographical</a></li>
                                        <li><a href="index4.html">Modern</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span
                                class="hide-menu">Apps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li><a href="app-chat.html">Chat app</a></li>
                                    <li><a href="app-ticket.html">Support Ticket</a></li>
                                    <li><a href="app-contact.html">Contact / Employee</a></li>
                                    <li><a href="app-contact2.html">Contact Grid</a></li>
                                    <li><a href="app-contact-detail.html">Contact Detail</a></li>
                                </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span
                                        class="hide-menu">Inbox</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="app-email.html">Mailbox</a></li>
                                        <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                        <li><a href="app-compose.html">Compose Mail</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                        class="hide-menu">Ui Elements <span class="label label-rouded label-danger pull-right">25</span></span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="ui-cards.html">Cards</a></li>
                                        <li><a href="ui-user-card.html">User Cards</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-tab.html">Tab</a></li>
                                        <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                        <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                        <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                        <li><a href="ui-notification.html">Notification</a></li>
                                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                                        <li><a href="ui-nestable.html">Nestable</a></li>
                                        <li><a href="ui-range-slider.html">Range slider</a></li>
                                        <li><a href="ui-timeline.html">Timeline</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                        <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                        <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                        <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                        <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                        <li><a href="ui-list-media.html">List Media</a></li>
                                        <li><a href="ui-ribbons.html">Ribbons</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-carousel.html">Carousel</a></li>
                                        <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                        <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                                    </ul>
                                </li>
                    </nav>
                <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
            <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Starter kit</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Starter kit</li>
                        </ol>
                    </div>
                    <div>
                    <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                    class="ti-settings text-white"></i></button> -->
                    </div>
                </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <app-democounter></app-democounter>
                                    This is some text within a card block.
                                <app-comment-widget></app-comment-widget>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- <div class="right-sidebar">
        <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
        </div>
        <div class="r-panel-body">
        <ul id="themecolors" class="m-t-20">
        <li><b>With Light sidebar</b></li>
        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
        </ul>
        
        </div>
        </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        </div>
        
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Admin Pro by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    
        <!-- built files will be auto injected -->
</body>
    <script src="/js/app.js"></script>
</html>
