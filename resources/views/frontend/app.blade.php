<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Support Forum Front End Theme</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/frontend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/frontend/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/style.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="/frontend/assets/css/theme/default.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/frontend/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    @yield('css')

</head>
<body>
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <span class="navbar-logo"></span>
                <span class="brand-text">
                        Support Forum
                    </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin #header-navbar -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Keywords..." />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li><a href="javascript:;">Create Account</a></li>
                <li><a href="javascript:;">Sign In</a></li>
            </ul>
        </div>
        <!-- end #header-navbar -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->

@yield('content')

<!-- begin #footer -->
<div id="footer" class="footer">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>About Color Admin</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices ipsum in elementum porttitor.
                        Cras porttitor fermentum nisl non elementum. Nulla in placerat libero. Nulla pharetra purus eget diam dictum
                        ullamcorper nec et eros. Suspendisse consectetur nulla ut volutpat aliquam.
                    </p>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>Latest Post</h4>
                    <ul class="latest-post">
                        <li>
                            <h4 class="title"><a href="#">Consectetur adipiscing elit ultrices</a></h4>
                            <p class="time">yesterday 10:42am</p>
                        </li>
                        <li>
                            <h4 class="title"><a href="#">Fusce ultrices ipsum porttitor</a></h4>
                            <p class="time">10/04/2015</p>
                        </li>
                        <li>
                            <h4 class="title"><a href="#">Cras porttitor fermentum adipiscing</a></h4>
                            <p class="time">02/04/2015</p>
                        </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>New Users</h4>
                    <ul class="new-user">
                        <li><a href="#"><img src="/frontend/assets/img/user-1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-2.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-3.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-4.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-5.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-6.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-7.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-8.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="/frontend/assets/img/user-9.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #footer -->
<!-- begin #footer-copyright -->
<div id="footer-copyright" class="footer-copyright">
    <div class="container">
        &copy; 2014 - 2018 SeanTheme All Right Reserved
        <a href="#">Contact Us</a>
        <a href="#">Knowledge Base</a>
    </div>
</div>
<!-- end #footer-copyright -->
<!-- begin theme-panel -->
<div class="theme-panel">
    <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
    <div class="theme-panel-content">
        <ul class="theme-list clearfix">
            <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
            <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
        </ul>
    </div>
</div>
<!-- end theme-panel -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="/frontend/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="/frontend/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="/frontend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="/frontend/assets/crossbrowserjs/html5shiv.js"></script>
<script src="/frontend/assets/crossbrowserjs/respond.min.js"></script>
<script src="/frontend/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="/frontend/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="/frontend/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

@yield('js')

</body>
</html>
