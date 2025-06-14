<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')
    </title>

    <!-- Custom fonts for this template-->
    <link href="/sbAdmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="/sbAdmin2/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/sbAdmin2/css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="\dashboard">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img src="/front/img/logo-nobg (Custom).png" alt="" class="logo">
                </div>
                <!-- <div class="sidebar-brand-text mx-3">THE</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Data Master -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster"
                    aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kategori">Data kategori</a>
                        <a class="collapse-item" href="/subkategori">Data Subkategori</a>
                        <a class="collapse-item" href="/slider">Data Slider</a>
                        <a class="collapse-item" href="/barang">Data Barang</a>
                        <a class="collapse-item" href="/testimoni">Data Testimoni</a>
                    </div>
                </div>
            </li>

            <!-- Data Pesanan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pesanan"
                    aria-expanded="true" aria-controls="pesanan">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Data Pesanan</span>
                </a>
                <div id="pesanan" class="collapse" aria-labelledby="headingPesanan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pesanan/baru">Pesanan Baru</a>
                        <a class="collapse-item" href="/pesanan/dikonfirmasi">Pesanan Dikonfirmasi</a>
                        <a class="collapse-item" href="/pesanan/dikemas">Pesanan Dikemas</a>
                        <a class="collapse-item" href="/pesanan/dikirim">Pesanan Dikirim</a>
                        <a class="collapse-item" href="/pesanan/diterima">Pesanan Diterima</a>
                        <a class="collapse-item" href="/pesanan/selesai">Pesanan Selesai</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/payment">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>Pembayaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laporan">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Laporan Pesanan</span></a>
            <li class="nav-item">
                <a class="nav-link" href="/tentang">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Tentang</span></a>
            </li>
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mirsab Anwar</span>
                                <img class="img-profile rounded-circle" src="/sbAdmin2/img/undraw_profile.svg">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">@yield('tittle')</h1>

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Tugas PemWeb 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="/sbAdmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/sbAdmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/sbAdmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sbAdmin2/js/sb-admin-2.min.js"></script>
    {{-- <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');

            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1, c.length);
                }
                if (c.indexOf(nameEQ) === 0) {
                    return c.substring(nameEQ.length, c.length);
                }
            }

            return null;
        }
    </script> --}}
    @stack('js')


</body>

</html>
