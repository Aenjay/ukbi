<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Uji Kemahiran Bahasa Indonesia - Kementerian Pendidikan dan Kebudayaan Indonesia</title>

        <meta name="description" content="Uji Kemahiran Bahasa Indonesia - Kementerian Pendidikan dan Kebudayaan Indonesia">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Uji Kemahiran Bahasa Indonesia - Kementerian Pendidikan dan Kebudayaan Indonesia">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Uji Kemahiran Bahasa Indonesia - Kementerian Pendidikan dan Kebudayaan Indonesia">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo site_url() ?>assets/front/images/favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo site_url() ?>assets/front/images/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url() ?>assets/front/images/favicon.ico">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo site_url() ?>assets/front/css/dashmix.min.css">
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/slick-carousel/slick.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/slick-carousel/slick-theme.css">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo site_url() ?>assets/front/css/themes/xwork.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="<?php echo site_url() ?>assets/front/css/themes/xpro.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo site_url() ?>assets/front/custom.css">
        <!-- END Stylesheets -->
        <script src="<?php echo site_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                dataType:'json',
                beforeSend: function (xhr)
                {
                    xhr.setRequestHeader("api_key","<?php echo $this->model->GenerateString(32); ?>"); 
                },
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":"<?php echo $this->security->get_csrf_hash()?>",
                }
            });
        });
        </script>
    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">

            <!-- Sidebar -->
           
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-primary">
                    <!-- Logo -->
                    <a class="text-dual d-inline-block font-w600" href="#">
                        <i class="fa fa-globe-americas mr-1"></i> Dash<span class="font-w700">mix</span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- User Info -->
                <div class="smini-hidden">
                    <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
                        <a class="img-link d-inline-block" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo site_url() ?>assets/front/media/avatars/avatar13.jpg" alt="">
                        </a>
                        <div class="ml-3">
                            <a class="font-w600 text-dual" href="javascript:void(0)">John Doe</a>
                            <div class="font-size-sm font-italic text-dual">Web Developer</div>
                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="#">
                                <i class="nav-main-link-icon far fa-compass"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                                <i class="nav-main-link-icon far fa-user-circle"></i>
                                <span class="nav-main-link-name">Profile</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <i class="nav-main-link-icon far fa-envelope-open"></i>
                                <span class="nav-main-link-name">Messages</span>
                                <span class="nav-main-link-badge badge badge-pill badge-primary">2</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">More</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-briefcase"></i>
                                <span class="nav-main-link-name">Projects</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-check"></i>
                                        <span class="nav-main-link-name">Active</span>
                                        <span class="nav-main-link-badge badge badge-pill badge-success">3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-users"></i>
                                        <span class="nav-main-link-name">Colleagues</span>
                                        <span class="nav-main-link-badge badge badge-pill badge-primary">24</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-cog"></i>
                                        <span class="nav-main-link-name">Manage</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Logo -->
                        <!-- <a class="text-dual link-fx" href="#">
                            <i class="fa fa-home mr-1"></i> Beranda
                        </a> -->
                        <!-- END Logo -->

                        <!-- Menu -->
                        <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ml-4">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?php echo site_url('beranda') ?>">
                                    <i class="nav-main-link-icon fas fa-home"></i>
                                    <span class="nav-main-link-name">Beranda</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?php echo site_url('tentang') ?>">
                                    <i class="nav-main-link-icon fas fa-info-circle"></i>
                                    <span class="nav-main-link-name">Tentang UKBI Adaptif</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?php echo site_url('panduan') ?>">
                                    <i class="nav-main-link-icon fas fa-book"></i>
                                    <span class="nav-main-link-name">Panduan dan Informasi</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?php echo site_url('kontak') ?>">
                                    <i class="nav-main-link-icon fas fa-map-marked-alt"></i>
                                    <span class="nav-main-link-name">Kontak TUKBI</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END Menu -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- END Open Search Section -->
                        <a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i> Pendaftaran Peserta Ujian</a>
                        <a href="<?php echo site_url()?>" class="btn btn-sm btn-primary"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                        <!-- Search form in larger screens -->
                        <!-- <form class="d-none d-lg-inline-block" action="be_pages_generic_search.html" method="POST">
                            <input type="text" class="form-control form-control-sm border-0 rounded-lg px-3" placeholder="Search.." id="page-header-search-input-full" name="page-header-search-input-full">
                        </form> -->
                        <!-- END Search form in larger screens -->

                        <!-- Notifications Dropdown -->
                  
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual d-lg-none ml-1" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-primary">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search your company.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary-darker">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
               
               <div class="bg-image" style="background-image: url('<?php echo site_url() ?>assets/front/images/background.jpg');">
                   <div class="bg-black-75">
                       <div class="content py-6">
                           <div class="row pt-3">
                            <div class="col-md py-3 d-md-flex align-items-md-center text-left">
                              <img src="<?php echo site_url() ?>assets/front/images/logo-tutwuri.png" class="mr-3" alt="" width="75">
                                <h1 class="text-white mb-0" style="font-size: 3.5rem;">
                                    <span class="font-w700">UKBI Adaptif</span>
                                    <span class="font-w400 font-size-lg text-white-75 d-block d-md-inline-block">Ujian Kemahiran Berbahasa Indonesia</span>
                                </h1>
                            </div>
                            <!-- <div class="col-md py-3 d-md-flex align-items-md-center justify-content-md-end text-center">
                                <button type="button" class="btn btn-hero-primary mr-1">
                                    <i class="fa fa-plus mr-1"></i> New Project
                                </button>
                                 <button type="button" class="btn btn-hero-primary">
                                    <i class="fa fa-cog"></i>
                                </button>
                            </div> -->
                        </div>
                       </div>
                   </div>
               </div>