<!doctype html>
<html lang="en">

<head>
    @include('admin.layouts.style')
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>

<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">

    @include('admin.layouts.navbar')

    @include('admin.layouts.left_sidebar')

    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        @yield('content')

        @include('admin.layouts.footer')
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->

@include('admin.layouts.script')
</body>

</html>
