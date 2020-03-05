<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 29-Feb-20
 * Time: 4:51 AM
 */
//echo asset('/assets/');
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    {{--Admin TLE styles-start--}}
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/assets/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/assets/')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{--Admin TLE styles-end--}}

    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/assets/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div id="app">


    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    {{-- <input class="form-control form-control-navbar" type="search" placeholder="Search"
                           aria-label="Search">

                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div> --}}
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                                class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('/assets/')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">Anifco</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('/assets/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{route('companies')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>

                                <p>
                                    CE/FDA/ISO/EC
                                    {{--<span class="right badge badge-danger">New</span>--}}
                                </p>
                            </a>
                        </li>




                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Related Certificates
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('testimonial') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Testimonial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Commercial Legal Docs
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('listofKeyTechnician') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>List of Key Technician</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('technicalTrainingCertificates') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Technical Training Certificates</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('listofEquipmentUsers') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>List of Equipment Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        {{--Specifications--}}

                        <li class="nav-item">
                            <a href="{{route('specifications')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>

                                <p>
                                    Specifications
                                    {{--<span class="right badge badge-danger">New</span>--}}
                                </p>
                            </a>
                        </li>


                        {{--Authorization Format--}}
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Specification Supporting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('comparison') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Comparison</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('lockKeyFeatures') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lock Key Features</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="{{route('specificationChangeBeforeSubmitting')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>

                                <p>
                                    Change Before Submitting

                                    {{--<span class="right badge badge-danger">New</span>--}}
                                </p>
                            </a>
                        </li>



                        {{--Specifications Submitted--}}
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Specifications Submitted
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('institutionWithDateofSubmission') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Institution List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('productListWithQuotedPrices') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                       

                        <li class="nav-item">
                            <a href="{{route('catalogues')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>

                                <p>
                                    Catalogues
                                    {{--<span class="right badge badge-danger">New</span>--}}
                                </p>
                            </a>
                        </li>


                        {{--Authorization Format--}}
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Authorization Format
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('private') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Private</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('government') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Government</p>
                                    </a>
                                </li>
                            </ul>
                        </li>





                        <hr>


                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>


                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{--<h1 class="m-0 text-dark">Starter Page</h1>--}}
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                                {{--<li class="breadcrumb-item active">Starter Page</li>--}}
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <main class="py-4">
                @yield('content')
            </main>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>

                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2020 <a href="#">Demo</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->




</div>




<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/assets/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/assets/')}}/dist/js/adminlte.min.js"></script>


<!-- DataTables -->
<script src="{{asset('/assets/')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('/assets/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

</body>
</html>



