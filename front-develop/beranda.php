<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/xpro.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header


        Footer

            ''                                          Static Footer if no class is added
            'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-dark'                          Dark themed Header
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="page-header-dark main-content-boxed">

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Logo -->
                        <a class="link-fx font-size-lg font-w600 text-white" href="beranda.php">
                            <img src="assets/images/logo-tutwuri.png" class="mr-2" alt="" width="35">
                            <span class="text-white-75">UKBI</span> <span class="text-white">Apps</span>
                        </a>
                        <!-- END Logo -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual dropdown-toggle" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                <span class="d-none d-sm-inline ml-1">John Smith</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="rounded-top font-w600 text-white text-center bg-image" style="background-image: url('assets/media/photos/photo16.jpg');">
                                    <div class="p-3">
                                        <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="p-3 bg-primary-dark-op">
                                        <a class="text-white font-w600" href="be_pages_generic_profile.html">John Smith</a>
                                        <div class="text-white-75">j.smith@example.com</div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                        Profile
                                        <i class="fa fa-fw fa-user-circle text-black-50 ml-1"></i>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="login.php">
                                        Log Out
                                        <i class="fa fa-fw fa-sign-out-alt text-danger ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-header-dark">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search your websites.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-spinner fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Navigation -->
                <div class="bg-white">
                    <div class="content">
                        <!-- Toggle Main Navigation -->
                        <div class="d-lg-none push">
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                                Menu
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- END Toggle Main Navigation -->

                        <!-- Main Navigation -->
                        <div id="main-navigation" class="d-none d-lg-block push">
                            <ul class="nav-main nav-main-horizontal nav-main-hover">
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="beranda.php">
                                        <i class="nav-main-link-icon fa fa-home"></i>
                                        <span class="nav-main-link-name">Beranda</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="beranda.php">
                                        <i class="nav-main-link-icon fa fa-edit"></i>
                                        <span class="nav-main-link-name">Ujian</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="beranda.php">
                                        <i class="nav-main-link-icon fa fa-home"></i>
                                        <span class="nav-main-link-name">Riwayat Ujian</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Main Navigation -->
                    </div>
                </div>
                <!-- END Navigation -->

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Overview -->
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <h2 class="h3 font-w400 mb-0">Riwayat Ujian</h2>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                30 Hari Terakhir<i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                                <a class="dropdown-item" href="javascript:void(0)">Pekan ini</a>
                                <a class="dropdown-item" href="javascript:void(0)">Pekan lalu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Bulan ini</a>
                                <a class="dropdown-item" href="javascript:void(0)">Bulan lalu</a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-deck">
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-primary-lighter mx-auto my-3">
                                        <i class="fa fa-users text-primary"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">35.8k</div>
                                    <div class="text-muted mt-1">Nilai</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                                        <i class="fa fa-eye text-xinspire-dark"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">98.5k</div>
                                    <div class="text-muted mt-1">Nilai</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                                        <i class="fa fa-columns text-xsmooth"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">25</div>
                                    <div class="text-muted mt-1">Nilai</div>
                                 
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xplay-lighter mx-auto my-3">
                                        <i class="fa fa-level-up-alt text-xplay"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">12.5%</div>
                                    <div class="text-muted mt-1">Nilai</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Overview -->

                    
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/dashmix.core.min.js"></script>

        <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/dashmix.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/db_analytics.min.js"></script>

        <!-- Page JS Helpers (Easy Pie Chart Plugin) -->
        <script>jQuery(function(){ Dashmix.helpers('easy-pie-chart'); });</script>
    </body>
</html>

