<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Karyawan</title>
    <!-- <link rel="icon" type="image/x-icon" href="./starbucks_resource/assets/favicon.ico" /> -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Core theme JS-->
    <!-- <script src="./js/scripts.js "></script> -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Chart.JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Datatables -->
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .chartMenu
        {
            width: 100vw;
            height: 40px;
            background: #1A1A1A;
            color: rgba(255, 26, 104, 1);
        }
        .chartMenu p
        {
            padding: 10px;
            font-size: 20px;
        }
        .chartCard
        {
            width: 100vw;
            height: calc(100vh - 40px);
            background: rgba(255, 26, 104, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .chartBox
        {
            width: 700px;
            padding: 20px;
            border-radius: 20px;
            border: solid 3px rgba(255, 26, 104, 1);
            background: white;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" style="height: 70px;">
        <div class="d-flex align-items-center justify-content-between">
            <img class="img-fluid" src="assets/img/Logo.png" alt="logo" style="width: 80px; height: 50px;" />
            <a class="navbar-brand" href="index_manager.html" style="font-size: 25px;"><b>Starbucks</b></a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">


                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>

                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/foto_alya2.jpeg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Najma Attaqiya Alya</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Najma Attaqiya Alya</h6>
                            <span>Manager</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <!-- End Dashboard Nav -->
            <!-- End Components Nav -->
            <!-- Side Navbar -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/karyawan">
                    <i class="bi bi-person"></i>
                    <span>Chart Karyawan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/produk">
                    <i class="bi bi-cup"></i>
                    <span>Chart Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/cabang">
                    <i class="bi bi-shop"></i>
                    <span>Chart Cabang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/fact_penjualan">
                    <i class="bi bi-activity"></i>
                    <span>Fakta Penjualan</span>
                </a>
            </li>
        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Karyawan</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

       <!-- Left side columns -->
       <div class="col-lg-12">
                    <div class="row">
                        <!-- First Card -->
                        <div class="col-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <!-- ========================= DIM KARYAWAN ========================= -->
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Jumlah Karyawan per
                                                    Cabang</b></p>
                                    </center>
                                    <table class="table display" id="karyawanTable">
                                    <thead>
                                        <tr>
                                        <th>ID Toko</th>
                                        <th>Nama Toko</th>
                                        <th>Jumlah Karyawan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dbKaryawan as $row)
                                        <tr>
                                        <td>{{ $row -> id_toko }}</td>
                                        <td>{{ $row -> nama_toko }}</td>
                                        <td>{{ $row -> jumlahKaryawan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>BarChart Jumlah Karyawan per
                                                    Cabang</b></p>
                                    </center>
                                    <div>
                                    <canvas id="chart_dimKaryawan"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <!-- ========================= DIM JUMLAH KARYAWAN ========================= -->
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Jumlah Karyawan per
                                                    Jabatan</b></p>
                                    </center>
                                    <table class="table display" id="jumlahKaryawan">
                                    <thead>
                                        <tr>
                                        <th>ID Posisi </th>
                                        <th>Posisi Karyawan</th>
                                        <th>Jumlah Karyawan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dbjumlahKaryawan as $row)
                                        <tr>
                                        <td>{{ $row -> id_posisi_karyawan }}</td>
                                        <td> {{ $row -> nama_posisi }}
                                        <td>{{ $row -> jumlahPegawai }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>BarChart Jumlah Karyawan per
                                                    Jabatan</b></p>
                                    </center>
                                    <div>
                                    <canvas id="Chart_JumlahKaryawan"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Right side columns -->
            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- __________________________ Datatable __________________________ -->
    <script>
        $(document).ready( function ()
        {
            $('#karyawanTable').DataTable({
                "pageLength": 5
            });
            $('#jumlahKaryawan').DataTable({
                "pageLength": 5
            });
        } );
    </script>


      <!-- ========================= DIM KARYAWAN CHARTS ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelKaryawan) }};
          var count = {{ Js::from($dataKaryawan) }};
          const chart_dimKaryawan = document.getElementById('chart_dimKaryawan');
        
          new Chart(chart_dimKaryawan, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah karyawan',
                data: count,
                borderWidth: 1,
                backgroundColor:'#189AB4'
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        });
      </script>
      <!-- CHART JUMLAH KARYAWAN PERJABATAN -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($namaPosisi) }};
          var count = {{ Js::from($labelJumlahKaryawan) }};
          const Chart_JumlahKaryawan = document.getElementById('Chart_JumlahKaryawan');
        
          new Chart(Chart_JumlahKaryawan, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah karyawan',
                data: count,
                borderWidth: 1,
                backgroundColor:'#B21368'
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        });
      </script>

</body>

</html>