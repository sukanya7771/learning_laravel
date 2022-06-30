<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper_2/saas/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 21:13:16 GMT -->
<head>
        <meta charset="utf-8" />
        <title>@yield('page_title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

         <!-- third party css -->
        <link href="{{asset('admin_assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/vendor/buttons.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/vendor/fixedHeader.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/vendor/fixedColumns.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
         <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{asset('admin_assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>
    <style>
       .field_error{
        color: red;
        font-weight: 20px;
       } 
   </style>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper"> 
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
   
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('admin_assets/images/logo.png')}}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('admin_assets/images/logo_sm.png')}}" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('admin_assets/images/logo-dark.png')}}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('admin_assets/images/logo_sm_dark.png')}}" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="{{url('/oyzer/admin/list')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <!--<span class="badge bg-success float-end">4</span>-->
                                <span> Dashboard </span>
                            </a>
                           <!-- <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="dashboard-analytics.html">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-crm.html">CRM</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-projects.html">Projects</a>
                                    </li>
                                </ul>
                            </div>-->
                        </li>

                     

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                                <i class="uil-document-layout-center"></i>
                                <span> Vendor details </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/list')}}">Registration Details</a>
                                    </li>
                                   <!-- <li>
                                        <a href="form-advanced.html">Form Advanced</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="form-fileuploads.html">File Uploads</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.html">Editors</a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>

                       

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            
                            <li class="notification-list mt-3">
                                <a href="#" class="nav-link">
                                    <span><i class="dripicons-wallet wallet-icon"></i> <small>Wallet</small><b class="mx-2 text-success">₹{{session('wallet')}}</b></span>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{asset('admin_assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name" style="line-height: 19px;">{{session('first')}} <br>{{session('last')}}</span>
                                        <!-- <span class="account-position">Founder</span> -->
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="{{url('/admin/logout')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="right_col" role="main">
                     <div class="">
                      @section('container')
                      @show
                     </div>
                    </div>
                    <!--<div class="container-fluid">-->
                        
                        <!-- start page title -->
                        <!--<div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Elements</h4>
                                </div>
                            </div>
                        </div>-->    
                        <!-- end page title --> 

                  <!-- content -->
                </div>
            
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

           </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
    
        <!-- END wrapper -->


       
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="{{asset('admin_assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/app.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('admin_assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/buttons.flash.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/dataTables.select.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/fixedColumns.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/vendor/fixedHeader.bootstrap5.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('admin_assets/js/pages/demo.datatable-init.js')}}"></script>
        <!-- end demo js-->
        <!-- Swal -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Swal -->
        <script type="text/javascript">
        function checkfunc(e){

                var pass_1 = $("#password_1").val();
                var pass_2 = e.value;
                if(pass_2 !== pass_1){
                    swal("Passwords don't match!");
                } 
                else{
                    swal("Passwords matched!"); 
                }
            
            } 
        </script>
        
    </body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 21:13:17 GMT -->
</html>
