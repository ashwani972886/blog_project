
<!doctype html>
<html lang="en">

<>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin - Vision House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="./main.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tagsinput.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <!--Title Logo-->
    <link rel="shortcut icon" href="assets/images/vh_logo_title1.png">
</head>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<body>
    

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Top Header -->
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <!-- <div class=""><h4 style="font-weight: bold; color: #60CCFF;">College-Connect</h4></div> -->
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-right">
                <ul>
                    <div class="text-center"><a href="?function=logout_admin" class="btn btn-danger" style="margin-top:10px; margin-right: 7px; width: 100px; font-size: 18px; padding: 2px 2px; background-color: red;">Logout</a></div>
                </ul>     
                </div>
            </div>
        </div>
        <!-- Side Bar -->
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <!-- <li class="app-sidebar__heading">Dashboard</li> -->
                            <li class="app-sidebar__heading">
                                <a href="?p=dash" class="mm-active">
                                    <i class="metismenu-icon fas fa-chart-line"></i>
                                    Dashboard
                                </a>
                            </li>
                            
                            <li class="app-sidebar__heading">NAVIGATION</li>
                            <li>
                                
                                <a href="" class="new_post">
                                    <i class="fa fa-fw metismenu-icon" aria-hidden="true"></i>
                                    New Post
                                </a>
                                <a href="?p=post_li">
                                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                                    List Post 
                                </a>
                                <a href="?p=stat">
                                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                                    Stats 
                                </a>
                                <a href="?p=cmnt_li">
                                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                                    Comments 
                                </a>
                                <a href="?p=prof_set">
                                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                                    My Profile 
                                </a>
                                <a href="?p=set">
                                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                                    Settings 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
            <!-- page content -->
        <div class="app-main__outer">
            <div class="app-main__inner">