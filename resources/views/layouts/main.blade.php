<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <p class="animation__shake">Admin Panel</p>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-bold">ADMIN PANEL</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('order.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>Заказы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('camera.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>IP Камеры</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('recorder.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>Регистраторы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('hdd.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>HDD</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pppoe.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>PPPoe</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('service.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>Услуги</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cable.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>Кабель</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('intercom.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shoe-prints"></i>
                            <p>Домофон</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>Категории</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Пользователи</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
@yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-{{now()->year}} <a href="{{route('main.index')}}">Shop by Thera1ddd</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Select2 -->
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>

<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $('.tags').select2()
    $('.colors').select2()
</script>



</body>
</html>
