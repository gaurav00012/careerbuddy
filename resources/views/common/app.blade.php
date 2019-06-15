

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Talk to Angel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://talktoangel.com/wp-content/uploads/2019/02/favicon-32x32.png" type="image/gif">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/career/bootstrap.min.css') }}"/> -->
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
        
       
        <link rel="stylesheet" href="{{ URL::asset('css/career/font-awesome.css') }}"/>
        
   
    <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/owl.carousel.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/career/owl.theme.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/career/owl.transitions.css') }}"/>
    
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/animate.css') }}"/>
  
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/normalize.css') }}"/>
    
    <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/meanmenu.min.css') }}"/>
   
    <!-- main CSS
		============================================ -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/career/main.css') }}"/>
    <!-- educate icon CSS
		============================================ -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/career/educate-custon-icon.css') }}"/>
    <!-- morrisjs CSS
		============================================ -->
  
    <link rel="stylesheet" href="{{ URL::asset('css/career/morris.css') }}"/>
    <!-- mCustomScrollbar CSS
		============================================ -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/career/jquery.mCustomScrollbar.min.css') }}"/>
    <!-- metisMenu CSS
		============================================ -->
    
   
    <link rel="stylesheet" href="{{ URL::asset('css/career/metisMenu-vertical.css') }}"/>
    <!-- calendar CSS
		============================================ -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/career/fullcalendar.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/career/fullcalendar.print.min.css') }}"/>
    <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/style.css') }}"/>
    <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('css/career/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/profile/profile.css') }}" />

    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            
            <!-- <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo.png" alt="" /></a>
            </div> -->
            <div class="menu_profile">
                <div class="profile_img">
                    <img src="../img/product/pro4.jpg" alt="">
                </div>
                <p class="menu_username">{{{ Auth::user()->name}}}</p>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Dashboard" href="http://localhost:8000/dashboard">
                                <span class="fa fa-home"></span>
                                <span>Dashboard</span>
                            </a>
                           
                        </li>
                        <li>
                            <a href="http://localhost:8000/userprofile-getdata" title="My Profile" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-user"></span> 
                            <span>My Profile</span></a>
                        </li>
                        <li>
                            <a title="My Tests" href="carrer-assessment" aria-expanded="false"><span
                            class="fa fa-file-text-o"></span> <span
                                    class="mini-click-non">Tests</span></a>
                        </li>
                        <li>
                            <a title="My Tests" href="http://localhost:8000/quiz" aria-expanded="false"><span
                            class="fa fa-file-text-o"></span> <span
                                    class="mini-click-non">My Tests</span></a>
                        </li>
                        <li>
                            <a title="My Matches" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-bar-chart"></span> <span
                                    class="mini-click-non">My Matches</span></a>
                        </li>
                        <li>
                            <a title="My Report" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-file-text-o" ></span> <span
                                    class="mini-click-non">My Report</span></a>
                        </li>
                        <li>
                            <a title="My Matches" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-shield"></span> <span
                                    class="mini-click-non">My Activities</span></a>
                        </li>
                        <li>
                            <a title="My Matches" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-paper-plane-o"></span> <span
                                    class="mini-click-non">My Session</span></a>
                        </li>
                        <li>
                            <a title="My Matches" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-globe"></span> <span class="mini-click-non">My
                                    Action Plan</span></a>
                        </li>
                        <li>
                            <a title="My Matches" href="refer" aria-expanded="false"><span
                            class="fa fa-users"></span> <span
                                    class="mini-click-non">Refer Friends</span></a>
                        </li>
                        <li><a href="http://localhost:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    </li>
                    
                        <li> 
                            <a title="My Matches" href="javascript:void(0);" aria-expanded="false"><span
                            class="fa fa-question" ></span> <span
                                    class="mini-click-non">Help</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                        class="fa fa-envelope-o"
                                                            aria-hidden="true"></i></span></a>
                                                    <div role="menu"
                                                        class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="../img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name">{{{ Auth::user()->name}}}</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li class="profile_userId"><a href="javascript:void(0);">User
                                                                ID: 98456</a></li>
                                                        <li><a href="#"><span><i class="fa fa-unlock-alt"
                                                                        aria-hidden="true"></i></span>Change
                                                                Password</a>
                                                        </li>
                                                        <li><a href="http://localhost:8000/logout" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                                <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout
                                                            </a>
                                          
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item upgrade_btn">
                                                    <a href="javascript:void(0);">Upgrade</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
           <!--  <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" name="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..."
                                                    class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.html">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Body -->
        <main class="main_body">
        @yield('content')
        </main>
        <!-- //Body -->
       <!--  <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- jquery
        ============================================ -->
    <script type="text/javascript" src="{{ URL::to('js/career/jquery-1.12.4.min.js') }}"></script>
    
    <!-- bootstrap JS
        ============================================ -->
    <script type="text/javascript" src="{{ URL::to('js/career/bootstrap.min.js') }}"></script>
   
    <!-- wow JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/wow.min.js') }}"></script>
    
    <!-- price-slider JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/jquery-price-slider.js') }}"></script>
    
    <!-- meanmenu JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/jquery.meanmenu.js') }}"></script>
   
    <!-- owl.carousel JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/owl.carousel.min.js') }}"></script>
    
    <!-- sticky JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/jquery.sticky.js') }}"></script>

    <!-- scrollUp JS
        ============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/jquery.scrollUp.min.js') }}"></script>
   
    <!-- counterup JS
		============================================ -->
    <script type="text/javascript" src="{{ URL::to('js/career/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/counterup-active.js') }}"></script>
   
    <!-- mCustomScrollbar JS
		============================================ -->
    <script type="text/javascript" src="{{ URL::to('js/career/counterup-active.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/counterup-active.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/counterup-active.js') }}"></script>
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/metisMenu.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/career/metisMenu-active.js') }}"></script>
    
    <!-- morrisjs JS
		============================================ -->
        <script type="text/javascript" src="{{ URL::to('js/career/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/career/morris.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/career/morris-active.js') }}"></script>
    
    <!-- morrisjs JS
		============================================ -->
    <script type="text/javascript" src="{{ URL::to('js/career/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/jquery.charts-sparkline.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/sparkline-active.js') }}"></script>
    
    <!-- calendar JS
		============================================ -->
    
    <script type="text/javascript" src="{{ URL::to('js/career/fullcalendar-active.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/career/moment.min.js') }}"></script>
    <!-- plugins JS
		============================================ -->
  
    <script type="text/javascript" src="{{ URL::to('js/career/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    
    <script type="text/javascript" src="{{ URL::to('js/career/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
     <script src="{{URL('../js/user_profile.js')}}"></script> 
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script type="text/javascript" src="{{ URL::to('js/career/tawk-chat.js') }}"></script> -->
    <!-- <script src="{{URL('../js/user_profile.js')}}"></script>  -->
</body>

</html>
