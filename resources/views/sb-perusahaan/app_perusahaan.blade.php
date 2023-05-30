<!DOCTYPE html>
<html lang="en">

@include('sb-perusahaan/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('sb-perusahaan/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('sb-perusahaan/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('sb-perusahaan/footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('sb-perusahaan/button-topbar')

    <!-- Logout Modal-->
    @include('sb-perusahaan/logout-modal')

    {{-- javascript --}}
    @include('sb-perusahaan/javascript')

</body>

</html>