<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Fakta Penjualan</title>
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
                    <li class="breadcrumb-item"><a href="index.html">Fakta Penjualan</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <!-- Row Tipe Pembayaran -->
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- First Card -->
                        <div class="col-5" style='padding-top:65px;'>
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <!-- ========================= DIM CABANG ========================= -->
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Metode Pembayaran</b></p>
                                    </center>
                                    <table class="table display" id="tipePembayaranTable">
                                    <thead>
                                        <tr>
                                        <th>Tipe Pembayaran</th>
                                        <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dbTipePembayaran as $row)
                                        <tr>
                                        <td>{{ $row -> tipe_pembayaran }}</td>
                                        <td>{{ $row -> jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="col-7">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <!-- ========================= Chart tipe Pembayaran ========================= -->
                                    <div class="row">
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Pie Chart Metode Pembayaran</b></p>
                                    </center>
                                    </div>
                                    <div class="row">
                                        <center>
                                        <div class='Chart' style='width:350px;'>
                                            <canvas id="chart_tipePembayaran">
                                            </canvas>
                                        </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Right side columns -->
            </div>
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Second Card -->
                        <div class="col-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                <!-- <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Metode Pembayaran</b></p>
                                    </center>
                                    <table class="table display" id="tipePembayaranTable">
                                    <thead>
                                        <tr>
                                        <th>Tipe Pembayaran</th>
                                        <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dbTipePembayaran as $row)
                                        <tr>
                                        <td>{{ $row -> tipe_pembayaran }}</td>
                                        <td>{{ $row -> jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                <center> -->
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Line Chart Jumlah Pembelian per
                                                    Waktu</b></p>
                                    </center>
                                    <div>
                                        <canvas id="chart_skwaktu"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Second Card -->
                        <div class="col-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Pemasukan per Tipe Produk</b></p>
                                    </center>
                                    <table class="table display" id="pemasukanProduk">
                                    <thead>
                                        <tr>
                                        <th>ID Tipe Produk</th>
                                        <th>Nama Tipe Produk</th>
                                        <th>Total Pemasukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dbPemasukan as $row)
                                        <tr>
                                        <td>{{ $row -> id_tipe_produk }}</td>
                                        <td>{{ $row -> nama_tipe_produk }}</td>
                                        <td>{{ $row -> totalPemasukan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    
                                <center>
                                    <p class="card-title" style='font-size:25px'><b>Barchart Pemasukan per Tipe Produk</b></p>
                                    </center>
                                    <div>
                                        <canvas id="chart_pemasukan"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        $(document).ready( function () {
            $('#pembelianTable').DataTable({
                "pageLength": 5
            });
            $('#pemasukanProduk').DataTable({
                "pageLength": 5
            });
        } );
      </script>

    <!-- ========================= TIPE PEMBAYARAN CHARTS ========================= -->
    <script>
        $(function()
        {
          var labels = {{ Js::from($labelTipePembayaran) }};
          var count = {{ Js::from($dataTipePembayaran) }};
          const chartTipePembayaran = document.getElementById('chart_tipePembayaran');
          new Chart(chartTipePembayaran, {
            type: 'pie',
            data: {
              labels: ['Tunai', 'Debit', 'Membership'],
              datasets: [{
                label: 'jumlah',
                data: count,
                borderWidth: 1,
                backgroundColor: ["#E8B4B8", "#EED6D3", "#A49393"],
              }]
            },
            options: {
              scales: {
                y: {
                }
              }
            }
          });
        });
      </script>
      <!-- Line Chart Jumlah Pembelian -->
      <script>
        $(function()
        {
          var count1 = {{ Js::from($dataPembelian2021) }};
          var count2 = {{ Js::from($dataPembelian2020) }};
          var count3 = {{ Js::from($dataPembelian2019) }};
          const chart_skwaktu = document.getElementById('chart_skwaktu');
        
          new Chart(chart_skwaktu, {
            type: 'line',
            data:
            {
              labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
              datasets:
              [
                {
                  label: 'Produk Terjual 2021',
                  data: count1,
                  borderWidth: 3,
                  borderColor: '#01949A'
                },
                {
                  label: 'Produk Terjual 2020',
                  data: count2,
                  borderWidth: 3,
                  borderColor: '#FA53A0'
                },
                {
                  label: 'Produk Terjual 2019',
                  data: count3,
                  borderWidth: 3,
                  borderColor: '#F9D030'
                }
              ]
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
        <!-- Pemasukan per produk -->
        <script>
        $(function()
        {
          var labels = {{ Js::from($labelPemasukan) }};
          var count = {{ Js::from($dataPemasukan) }};
          const chart_pemasukan = document.getElementById('chart_pemasukan');
        
          new Chart(chart_pemasukan, {
            type: 'bar',
            data:
            {
              labels: labels,
              datasets:
              [
                {
                  label: 'Tipe Produk',
                  data: count,
                  borderWidth: 1,
                  backgroundColor:'#F4B9B8'
                }
              ]
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
</html>