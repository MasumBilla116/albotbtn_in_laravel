<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('/storage/logo/fav-icon.png')}}" rel="icon">
    <title>@yield('title')</title>
    <script src="{{url('/assets/vendor/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/vendor/css/style.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/assets/vendor/css/cust.style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/assets/vendor/css/float-chart.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/assets/vendor/css/aos.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/assets/vendor/css/editor.css')}}" />

</head>

<body>
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- start right nav wheel -->
    <div class="position-fixed mini-aside-nav-toggle">
    </div>
    <!-- end right nav wheel -->
    <!-- start right nav -->
    <div class="right-nav">
        <!-- header -->
        <div class="text-center  p-4 pb-0 pt-2 position-relative">
            <button type="button" class="btn position-absolute top-0 start-0 fs-3 text-white close">&times;</button>
            <i class="fas fa fa-thin fa-gear mr-2 spinner-border text-warning"></i>
            <h5 class="fw-bold fs-normal text-warning d-inline-block ">Control</h5>
        </div>
        <!-- left aside bg controller -->
        <hr class="mt-0" />
        <div class="row">
            <div class="col-lg-12">
                <div class="form-check ps-0">
                    <h5 class="fw-lighter ps-2 text-white border-white border-bottom ">Change Background color
                    </h5>
                    <input type="color" value="#313845" class="color-picker form-control" data-color="bg">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-check ps-0">
                    <h5 class="fw-lighter ps-2 text-white border-white border-bottom ">Change Aside color</h5>
                    <input type="color" value="#313845" class="color-picker form-control" data-color="aside">
                </div>
            </div>

        </div>
    </div>
    <!-- end right nav -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <!-- Topbar header - style you can find in pages.scss -->

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- Logo -->

                    <a class="navbar-brand" href="{{action('App\Http\Controllers\usersController@dashboard')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2 fs-sm">
                            <i class=" fa fa-brands fa-sellcast fs-3 text-primary"></i>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text fs-2">
                            <!-- dark Logo text -->
                            <img src="{{url('/storage/logo/albotbn155X33.png')}}" alt="logo" title="albotbn" />
                        </span>
                    </a>

                    <!-- End Logo -->


                    <!-- Toggle which is visible on mobile only -->

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none"
                        href="{{action('App\Http\Controllers\usersController@dashboard')}}">
                        <i class="ti-menu ti-close"> </i>
                    </a>
                </div>

                <!-- End Logo -->

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- toggle and nav items -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="#"
                                data-sidebartype="mini-sidebar">
                                <i class="fas fa fa-thin fa-bars font-24"></i>
                            </a>
                        </li>

                        <!-- create new -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <!-- Search -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="#"><i
                                    class="fas fa fa-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="fas fa fa-thin fa-xmark"></i></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- Right side toggle and nav items -->
                    <ul class="navbar-nav float-end">
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa fa-thin fa-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa fa-thin fa-comment-dots font-24"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="#" class="link border-top ps-2">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle">
                                                        <i class="fas fa fa-duotone fa-calendar-days"></i>
                                                    </span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="link border-top  ps-2">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle">
                                                        <i class="fas fa fa-thin fa-gear"></i>
                                                    </span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="link border-top  ps-2">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle">
                                                        <i class="fas fa fa-thin fa-user"></i>
                                                    </span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="link border-top  ps-2">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>

                        <!-- End Messages -->

                        <!-- User profile and search -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img alt="img" src="{{url(session('profile'))}}" alt="user" class="rounded-circle"
                                    width="31" height="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/admin/profile">
                                    <i class="fas fa fa-user-o me-1 ms-1"></i>
                                    My Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa fa-thin fa-envelope me-1 ms-1"></i>
                                    Inbox
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa fa-thin fa-gear me-1 ms-1"></i>
                                    Account Setting
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin/logout">
                                    <i class="fa fa-power-off me-1 ms-1"></i>
                                    Logout
                                </a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10">
                                    <a href="#" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                </div>
                            </ul>
                        </li>
                        <!-- User profile and search -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar overflow-y-scroll" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                aria-expanded="false">
                                <i class="fa-solid fa-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa fa-solid fa-user-gear"></i>
                                <span class="hide-menu">Admin</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@newAdmin')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-plus"></i>
                                        <span class="hide-menu">Add admin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/profile" class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-gears"></i>
                                        <span class="hide-menu">Admin profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa fa-users"></i>
                                <span class="hide-menu">Users </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@allUser')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-globe"></i>
                                        <span class="hide-menu">All Users</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@editUser')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fa fa-solid fa-pen"></i>
                                        <span class="hide-menu">Edit User</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@activeUser')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-circle"></i>
                                        <span class="hide-menu">Active Users</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@disabledUser')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-xmark"></i>
                                        <span class="hide-menu">Disabled Users</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\usersController@deleteUser')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <span class="hide-menu">Delete Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa  fa-duotone fa-photo-film"></i>
                                <span class="hide-menu">Video content</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\VideoContentController@allVideo')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-globe"></i>
                                        <span class="hide-menu">All videos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\VideoContentController@AddVideo')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-plus"></i>
                                        <span class="hide-menu">Add Video</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\VideoContentController@editVideos')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fa fa-solid fa-pen"></i>
                                        <span class="hide-menu">Edite Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa fa-solid fa-book-atlas"></i>
                                <span class="hide-menu">Course </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\ExamController@addCourse')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-plus"></i>
                                        <span class="hide-menu">Add Course</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa  fa-solid fa-newspaper"></i>
                                <span class="hide-menu">Post </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\postController@allPost')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-clipboard"></i>
                                        <span class="hide-menu">All post</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\postController@addPost')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-plus"></i>
                                        <span class="hide-menu">Add post</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa fa-book"></i>
                                <span class="hide-menu">Exams</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\ExamController@allQuestionAndAns')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-solid fa-question"></i>
                                        <span class="hide-menu">All ques&colon; ans&colon;</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\ExamController@addQuestionsAndAns')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa fa-thin fa-plus"></i>
                                        <span class="hide-menu">Add Question</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{action('App\Http\Controllers\ExamController@editQuestionAndAns','1')}}"
                                        class="sidebar-link sidebar-link-expand">
                                        <i class="fas fa  fa-solid fa-newspaper"></i>
                                        <span class="hide-menu">Edite Question</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="fas fa fa-thin fa-gear"></i>
                                <span class="hide-menu">Settings </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-emoticon"></i>
                                        <span class="hide-menu"> Material Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-emoticon-cool"></i>
                                        <span class="hide-menu"> Font AwesomeIcons </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper pb-4">
            @yield("content")
        </div>
        <!-- End Page wrapper  -->
    </div>
    <script src="{{url('/assets/vendor/js/jquery.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/sparkline.js')}}"></script>
    <script src="{{url('/assets/vendor/js/waves.js')}}"></script>
    <script src="{{url('/assets/vendor/js/sidebarmenu.js')}}"></script>
    <script src="{{url('/assets/vendor/js/custom.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/excanvas.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.pie.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.time.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.stack.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.crosshair.js')}}"></script>
    <script src="{{url('/assets/vendor/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/chart-page-init.js')}}"></script>
    <script src="{{url('/assets/vendor/js/font.js')}}"></script>
    <script src="{{url('/assets/vendor/js/aos.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{url('/assets/vendor/js/sweetalert.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/alert.js')}}"></script>

    <script>
    AOS.init();
    // first editor
    </script>
</body>

</html>