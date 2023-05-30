<!DOCTYPE html>
<html lang="en">

@include('sb-alumni/head_alumni')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('sb-alumni/sidebar_alumni')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('sb-alumni/topbar_alumni')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('sb-alumni/footer_alumni')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('sb-alumni/button-topbar_alumni')

    <!-- Logout Modal-->
    @include('sb-alumni/logout-modal_alumni')

    {{-- javascript --}}
    @include('sb-alumni/javascript_alumni')

</body>

</html>