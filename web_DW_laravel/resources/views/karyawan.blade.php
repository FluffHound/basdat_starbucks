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
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
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
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        
        .chartMenu {
            width: 100vw;
            height: 40px;
            background: #1A1A1A;
            color: rgba(255, 26, 104, 1);
        }
        
        .chartMenu p {
            padding: 10px;
            font-size: 20px;
        }
        
        .chartCard {
            width: 100vw;
            height: calc(100vh - 40px);
            background: rgba(255, 26, 104, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chartBox {
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
                <div class='row'>
                    <div class="col-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <!-- ========================= DIM KARYAWAN ========================= -->
                                <!-- <center>
                                    <p class="card-title" style='font-size:25px'><b>Tabel Jumlah Karyawan per Cabang</b></p>
                                </center> -->
                                <!-- <table class="table display" id="karyawanTable">
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
                                </table> -->
                                <center>
                                    <p class="card-title" style='font-size:25px'><b>Bar Chart Jumlah Karyawan per Cabang</b></p>
                                </center>
                                <div>
                                    <div id="chart_dimKaryawan"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <!-- ========================= DIM KARYAWAN ========================= -->
                                <center>
                                    <p class="card-title" style='font-size:25px'><b>Jumlah Karyawan Starbucks per Provinsi</b></p>
                                </center>
                                <center>
                                    <br>
                                    <div class='Chart' style='height:350px'>
                                        <div id="karyawanperprovinsi"></div>
                                    </div>
                                </center>
                                <!-- <div>
                                    <div id="karyawanperprovinsi"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-5">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <!-- ========================= DIM JUMLAH KARYAWAN ========================= -->
                                <center>
                                    <p class="card-title" style='font-size:22px'><b>Tabel Jumlah Karyawan per
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
                                            <td> {{ $row -> nama_posisi }} </td>
                                            <td>{{ $row -> jumlahPegawai }}</td>
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
                                        <p class="card-title" style='font-size:25px'><b>Bar Chart Jumlah Karyawan per Jabatan</b></p>
                                    </center>
                                </div>
                                <center>
                                    <br>
                                    <div class='Chart' style='height:350px'>
                                        <canvas id="Chart_JumlahKaryawan"></canvas>
                                    </div>
                                </center>
                            </div>
                        </div>
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
        $(document).ready(function() {
            $('#karyawanTable').DataTable({
                "pageLength": 5
            });
            $('#jumlahKaryawan').DataTable({
                searching: false,
                paging: false,
                info: false
            });
        });
    </script>
    <!-- ========================= DIM KARYAWAN CHARTS ========================= -->
    <!-- <script>
        $(function() {
            var labels = {{Js::from($labelKaryawan)}};
            var count = {{Js::from($dataKaryawan)}};
            const chart_dimKaryawan = document.getElementById('chart_dimKaryawan');

            new Chart(chart_dimKaryawan, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'jumlah karyawan',
                        data: count,
                        borderWidth: 1,
                        backgroundColor: '#189AB4'
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
    </script> -->

    <!-- MANUAL CHART KARYAWAN PERCABANG -->
    <script>
                    Highcharts.chart('chart_dimKaryawan', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: ' '
            },
            accessibility: {
                announceNewData: {
                enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                text: 'Jumlah Karyawan'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            series: [{
                name: "Provinsi",
                colorByPoint: true,
                data: [{
                    name: "Sumatera Utara",
                    y: 65,
                    drilldown: "Sumatera Utara"
                },
                {
                    name: "Sumatera Selatan",
                    y: 61,
                    drilldown: "Sumatra Selatan"
                },
                {
                    name: "Sumatera Barat",
                    y: 90,
                    drilldown: "Sumatera Barat"
                },
                {
                    name: "Sulawesi Utara",
                    y: 89,
                    drilldown: "Sulawesi Utara"
                },
                {
                    name: "Sulawesi Tenggara",
                    y: 64,
                    drilldown: "Sulawesi Tenggara"
                },
                {
                    name: "Sulawesi Tengah",
                    y: 85,
                    drilldown: "Sulawesi Tengah"
                },
                {
                    name: "Sulawesi Selatan",
                    y: 57,
                    drilldown: "Sulawesi Selatan"
                },
                {
                    name: "Sulawesi Barat",
                    y: 100,
                    drilldown: "Sulawesi Barat"
                },
                {
                    name: "Riau",
                    y: 85,
                    drilldown: "Riau"
                },
                {
                    name: "Papua Barat",
                    y: 46,
                    drilldown: "Papua Barat"
                },
                {
                    name: "Papua",
                    y: 40,
                    drilldown: "Papua"
                },
                {
                    name: "Nusa Tenggara Timur",
                    y: 74,
                    drilldown: "Nusa Tenggara Timur"
                },
                {
                    name: "Nusa Tenggara Barat",
                    y: 61,
                    drilldown: "Nusa Tenggara Barat"
                },
                {
                    name: "Nanggroe Aceh Darussalam",
                    y: 57,
                    drilldown: "Nanggroe Aceh Darussalam"
                },
                {
                    name: "Maluku Utara",
                    y: 42,
                    drilldown: "Maluku Utara"
                },
                {
                    name: "Maluku",
                    y: 44,
                    drilldown: "Maluku"
                },
                {
                    name: "Lampung",
                    y: 92,
                    drilldown: "Lampung"
                },
                {
                    name: "Kepulauan Riau",
                    y: 89,
                    drilldown: "Kepulauan Riau"
                },
                {
                    name: "Kalimantan Utara",
                    y: 73,
                    drilldown: "Kalimantan Utara"
                },
                {
                    name: "Kalimantan Timur",
                    y: 63,
                    drilldown: "Kalimantan Timur"
                },
                {
                    name: "Kalimantan Tengah",
                    y: 90,
                    drilldown: "Kalimantan Tengah"
                },
                {
                    name: "Kalimantan Selatan",
                    y: 67,
                    drilldown: "Kalimantan Selatan"
                },
                {
                    name: "Kalimantan Barat",
                    y: 89,
                    drilldown: "Kalimantan Barat"
                },
                {
                    name: "Jawa Timur",
                    y: 90,
                    drilldown: "Jawa Timur"
                },
                {
                    name: "Jawa Tengah",
                    y: 92,
                    drilldown: "Jawa Tengah"
                },
                {
                    name: "Jawa Barat",
                    y: 108,
                    drilldown: "Jawa Barat"
                },
                {
                    name: "Jambi",
                    y: 58,
                    drilldown: "Jambi"
                },
                {
                    name: "Gorontalo",
                    y: 102,
                    drilldown: "Gorontalo"
                },
                {
                    name: "DKI Jakarta",
                    y: 90,
                    drilldown: "DKI Jakarta"
                },
                {
                    name: "DI Yogyakarta",
                    y: 89,
                    drilldown: "DI Yogyakarta"
                },
                {
                    name: "Bengkulu",
                    y: 62,
                    drilldown: "Bengkulu"
                },
                {
                    name: "Banten",
                    y: 68,
                    drilldown: "Banten"
                },
                {
                    name: "Bangka Belitung",
                    y: 67,
                    drilldown: "Bangka Belitung"
                },
                {
                    name: "Bali",
                    y: 71,
                    drilldown: "Bali"
                }
                ]
            }],
            drilldown: {
                breadcrumbs: {
                position: {
                    align: 'right'
                }
                },
                series: [{
                    name: "Sumatera Utara",
                    id: "Sumatera Utara",
                    data: [
                    [
                        "5",
                        16
                    ],
                    [
                        "6",
                        14
                    ],
                    [
                        "116",
                        1
                    ],
                    [
                        "169",
                        6
                    ],
                    [
                        "182",
                        5
                    ],
                    [
                        "350",
                        7
                    ],
                    [
                        "4",
                        16
                    ]
                    ]
                },
                {
                    name: "Sumatera Selatan",
                    id: "Sumatera Selatan",
                    data: [
                    [
                        "181",
                        4
                    ],
                    [
                        "316",
                        1
                    ],
                    [
                        "317",
                        5
                    ],
                    [
                        "348",
                        6
                    ],
                    [
                        "391",
                        2
                    ],
                    [
                        "7",
                        15
                    ],
                    [
                        "8",
                        15
                    ],
                    [
                        "9",
                        13
                    ]
                    ]
                },
                {
                    name: "Sumatera Barat",
                    id: "Sumatera Barat",
                    data: [
                    [
                        "358",
                        7
                    ],
                    [
                        "364",
                        6
                    ],
                    [
                        "10",
                        16
                    ],
                    [
                        "11",
                        12
                    ],
                    [
                        "12",
                        12
                    ],
                    [
                        "366",
                        4
                    ],
                    [
                        "132",
                        8
                    ],
                    [
                        "139",
                        3
                    ],
                    [
                        "144",
                        6
                    ],
                    [
                        "150",
                        1
                    ],
                    [
                        "320",
                        5
                    ],
                    [
                        "326",
                        3
                    ],
                    [
                        "338",
                        7
                    ]
                    ]
                },
                {
                    name: "Sulawesi Utara",
                    id: "Sulawesi Utara",
                    data: [
                    [
                        "395",
                        10
                    ],
                    [
                        "73",
                        13
                    ],
                    [
                        "74",
                        14
                    ],
                    [
                        "75",
                        15
                    ],
                    [
                        "114",
                        2
                    ],
                    [
                        "119",
                        5
                    ],
                    [
                        "185",
                        5
                    ],
                    [
                        "193",
                        4
                    ],
                    [
                        "325",
                        5
                    ],
                    [
                        "327",
                        6
                    ],
                    [
                        "356",
                        4
                    ]
                    ]
                },
                {
                    name: "Sulawesi Tenggara",
                    id: "Sulawesi Tenggara",
                    data: [
                    [
                        "85",
                        13
                    ],
                    [
                        "86",
                        18
                    ],
                    [
                        "87",
                        12
                    ],
                    [
                        "113",
                        4
                    ],
                    [
                        "197",
                        4
                    ],
                    [
                        "303",
                        2
                    ],
                    [ "341",
                        5
                    ],
                    [
                        "373",
                        6
                    ]
                    ]
                },
                {
                    name: "Sulawesi Tengah",
                    id: "Sulawesi Tengah",
                    data: [
                    [
                        "81",
                        15
                    ],
                    [
                        "138",
                        6
                    ],
                    [
                        "141",
                        6
                    ],
                    [
                        "160",
                        3
                    ],
                    [
                        "178",
                        5
                    ],
                    [
                        "194",
                        7
                    ],
                    [
                        "382",
                        9
                    ],
                    [
                        "79",
                        17
                    ],
                    [
                        "80",
                        17
                    ]
                    ]
                },
                {
                    name: "Sulawesi Selatan",
                    id: "Sulawesi Selatan",
                    data: [
                    [
                        "88",
                        21
                    ],
                    [
                        "89",
                        16
                    ],
                    [
                        "90",
                        14
                    ],
                    [
                        "111",
                        2
                    ],
                    [
                        "333",
                        4
                    ]
                    ]
                },
                {
                    name: "Sulawesi Barat",
                    id: "Sulawesi Barat",
                    data: [
                    [
                        "76",
                        16
                    ],
                    [
                        "77",
                        18
                    ],
                    [
                        "78",
                        16
                    ],
                    [
                        "134",
                        5
                    ],
                    [
                        "147",
                        8
                    ],
                    [
                        "151",
                        3
                    ],
                    [
                        "158",
                        3
                    ],
                    [
                        "170",
                        7
                    ],
                    [
                        "171",
                        2
                    ],
                    [
                        "176",
                        7
                    ],
                    [
                        "307",
                        5
                    ],
                    [
                        "334",
                        5
                    ],
                    [
                        "393",
                        5
                    ]
                    ]
                },
                {
                    name: "Riau",
                    id: "Riau",
                    data: [
                    [
                        "16",
                        13
                    ],
                    [
                        "17",
                        15
                    ],
                    [
                        "18",
                        16
                    ],
                    [
                        "121",
                        7
                    ],
                    [
                        "162",
                        12
                    ],
                    [
                        "164",
                        3
                    ],
                    [
                        "183",
                        8
                    ],
                    [
                        "187",
                        3
                    ],
                    [
                        "330",
                        5
                    ],
                    [
                        "331",
                        3
                    ]
                    ]
                },
                {
                    name: "Papua Barat",
                    id: "Papua Barat",
                    data: [
                    [
                        "97",
                        15
                    ],
                    [
                        "98",
                        17
                    ],
                    [
                        "99",
                        14
                    ]
                    ]
                },
                {
                    name: "Papua",
                    id: "Papua",
                    data: [
                    [
                        "100",
                        12
                    ],
                    [
                        "101",
                        13
                    ],
                    [
                        "102",
                        15
                    ]
                    ]
                },
                {
                    name: "Nusa Tenggara Timur",
                    id: "Nusa Tenggara Timur",
                    data: [
                    [
                        "155",
                        8
                    ],
                    [
                        "189",
                        8
                    ],
                    [
                        "199",
                        4
                    ],
                    [
                        "315",
                        4
                    ],
                    [
                        "369",
                        2
                    ],
                    [
                        "70",
                        19
                    ],
                    [
                        "71",
                        11
                    ],
                    [
                        "72",
                        14
                    ],
                    [
                        "120",
                        4
                    ]
                    ]
                },
                {
                    name: "Nusa Tenggara Barat",
                    id: "Nusa Tenggara Barat",
                    data: [
                    [
                        "67",
                        18
                    ],
                    [
                        "68",
                        15
                    ],
                    [
                        "69",
                        15
                    ],
                    [
                        "127",
                        3
                    ],
                    [
                        "309",
                        7
                    ],
                    [
                        "312",
                        3
                    ]
                    ]
                },
                {
                    name: "Nanggroe Aceh Darussalam",
                    id: "Nanggroe Aceh Darussalam",
                    data: [
                    [
                        "1",
                        11
                    ],
                    [
                        "2",
                        14
                    ],
                    [
                        "3",
                        12
                    ],
                    [
                        "354",
                        7
                    ],
                    [
                        "363",
                        8
                    ],
                    [
                        "367",
                        5
                    ]
                    ]
                },
                {
                    name: "Maluku Utara",
                    id: "Maluku Utara",
                    data: [
                    [
                        "91",
                        14
                    ],
                    [
                        "92",
                        15
                    ],
                    [
                        "93",
                        12
                    ]
                    ]
                },
                {
                    name: "Maluku",
                    id: "Maluku",
                    data: [
                    [
                        "94",
                        17
                    ],
                    [
                        "95",
                        14
                    ],
                    [
                        "96",
                        13
                    ]
                    ]
                },
                {
                    name: "Lampung",
                    id: "Lampung",
                    data: [
                    [
                        "27",
                        13
                    ],
                    [
                        "109",
                        3
                    ],
                    [
                        "117",
                        10
                    ],
                    [
                        "145",
                        7
                    ],
                    [
                        "165",
                        7
                    ],
                    [
                        "177",
                        6
                    ],
                    [
                        "192",
                        4
                    ],
                    [
                        "195",
                        4
                    ],
                    [
                        "385",
                        6
                    ],
                    [
                        "397",
                        5
                    ],
                    [
                    "25",
                        13
                    ],
                    [
                    "26",
                    4
                    ]
                ]
                },
                {
                name: "Kepulauan Riau",
                id: "Kepulauan Riau",
                data: [
                    [
                    "149",
                    6
                    ],
                    [
                    "154",
                    6
                    ],
                    [
                    "306",
                    4
                    ],
                    [
                    "314",
                    1
                    ],
                    [
                    "368",
                    4
                    ],
                    [
                    "390",
                    5
                    ],
                    [
                    "399",
                    4
                    ],
                    [
                    "19",
                    17
                    ],
                    [
                    "20",
                    15
                    ],
                    [
                    "21",
                    18
                    ],
                    [
                    "110",
                    4
                    ],
                    [
                    "128",
                    5
                    ]
                ]
                },
                {
                name: "Kalimantan Utara",
                id: "Kalimantan Utara",
                data: [
                    [
                    "383",
                    7
                    ],
                    [
                    "384",
                    6
                    ],
                    [
                    "388",
                    6
                    ],
                    [
                    "43",
                    19
                    ],
                    [
                    "44",
                    12
                    ],
                    [
                    "45",
                    15
                    ],
                    [
                    "362",
                    8
                    ]
                ]
                },
                {
                name: "Kalimantan Timur",
                id: "Kalimantan Timur",
                data: [
                    [
                    "31",
                    15
                    ],
                    [
                    "32",
                    14
                    ],
                    [
                    "33",
                    14
                    ],
                    [
                    "159",
                    7
                    ],
                    [
                    "168",
                    3
                    ],
                    [
                    "173",
                    6
                    ],
                    [
                    "301",
                    2
                    ],
                    [
                    "370",
                    5
                    ]
                ]
                },
                {
                name: "Kalimantan Tengah",
                id: "Kalimantan Tengah",
                data: [
                    [
                    "148",
                    2
                    ],
                    [
                    "340",
                    6
                    ],
                    [
                    "352",
                    5
                    ],
                    [
                    "360",
                    5
                    ],
                    [
                    "381",
                    4
                    ],
                    [
                    "394",
                    5
                    ],
                    [
                    "37",
                    18
                    ],
                    [
                    "38",
                    13
                    ],
                    [
                    "39",
                    14
                    ],
                    [
                    "105",
                    5
                    ],
                    [
                    "129",
                    9
                    ],
                    [
                    "136",
                    4
                    ]
                ]
                },
                {
                name: "Kalimantan Selatan",
                id: "Kalimantan Selatan",
                data: [
                    [
                    "40",
                    14
                    ],
                    [
                    "41",
                    14
                    ],
                    [
                    "42",
                    22
                    ],
                    [
                    "106",
                    8
                    ],
                    [
                    "323",
                    6
                    ],
                    [
                    "357",
                    3
                    ]
                ]
                },
                {
                name: "Kalimantan Barat",
                id: "Kalimantan Barat",
                data: [
                    [
                    "35",
                    16
                    ],
                    [
                    "36",
                    13
                    ],
                    [
                    "131",
                    6
                    ],
                    [
                    "161",
                    8
                    ],
                    [
                    "184",
                    3
                    ],
                    [
                    "198",
                    8
                    ],
                    [
                    "302",
                    4
                    ],
                    [
                    "310",
                    7
                    ],
                    [
                    "343",
                    6
                    ],
                    [
                    "344",
                    6
                    ],
                    [
                    "34",
                    12
                    ]
                ]
                },
                {
                name: "Jawa Timur",
                id: "Jawa Timur",
                data: [
                    [
                    "181",
                    4
                    ],
                    [
                    "61",
                    14
                    ],
                    [
                    "62",
                    19
                    ],
                    [
                    "63",
                    14
                    ],
                    [
                    "123",
                    5
                    ],
                    [
                    "133",
                    3
                    ],
                    [
                    "175",
                    2
                    ],
                    [
                    "180",
                    5
                    ],
                    [ "186",
                    1
                    ],
                    [
                    "318",
                    4
                    ],
                    [
                    "324",
                    2
                    ],
                    [
                    "328",
                    6
                    ],
                    [
                    "332",
                    2
                    ],
                    [
                    "342",
                    5
                    ],
                    [
                    "345",
                    6
                    ],
                    [
                    "371",
                    2
                    ]
                ]
                },
                {
                name: "Jawa Tengah",
                id: "Jawa Tengah",
                data: [
                    [
                    "55",
                    18
                    ],
                    [
                    "56",
                    12
                    ],
                    [
                    "57",
                    17
                    ],
                    [
                    "122",
                    9
                    ],
                    [
                    "137",
                    3
                    ],
                    [
                    "152",
                    2
                    ],
                    [
                    "153",
                    5
                    ],
                    [
                    "191",
                    7
                    ],
                    [
                    "347",
                    4
                    ],
                    [
                    "349",
                    3
                    ],
                    [
                    "377",
                    4
                    ],
                    [
                    "389",
                    9
                    ]
                ]
                },
                {
                name: "Jawa Barat",
                id: "Jawa Barat",
                data: [
                    [
                    "337",
                    10
                    ],
                    [
                    "353",
                    9
                    ],
                    [
                    "392",
                    6
                    ],
                    [
                    "52",
                    19
                    ],
                    [
                    "53",
                    15
                    ],
                    [
                    "54",
                    15
                    ],
                    [
                    "124",
                    3
                    ],
                    [
                    "125",
                    8
                    ],
                    [
                    "135",
                    3
                    ],
                    [
                    "140",
                    3
                    ],
                    [
                    "142",
                    5
                    ],
                    [
                    "305",
                    5
                    ],
                    [
                    "319",
                    7
                    ]
                ]
                },
                {
                name: "Jambi",
                id: "Jambi",
                data: [
                    [
                    "22",
                    15
                    ],
                    [
                    "23",
                    14
                    ],
                    [
                    "112",
                    5
                    ],
                    [
                    "115",
                    3
                    ],
                    [
                    "118",
                    4
                    ],
                    [
                    "387",
                    4
                    ]
                ]
                },
                {
                name: "Gorontalo",
                id: "Gorontalo",
                data: [
                    [
                    "308",
                    2
                    ],
                    [
                    "321",
                    4
                    ],
                    [
                    "329",
                    5
                    ],
                    [
                    "335",
                    6
                    ],
                    [
                    "376",
                    5
                    ],
                    [
                    "82",
                    18
                    ],
                    [
                    "83",
                    18
                    ],
                    [
                    "84",
                    15
                    ],
                    [
                    "103",
                    6
                    ],
                    [
                    "157",
                    3
                    ],
                    [
                    "163",
                    6
                    ],
                    [
                    "188",
                    4
                    ],
                    [
                    "200",
                    2
                    ],
                    [
                    "304",
                    8
                    ]
                ]
                },
                {
                name: "DKI Jakarta",
                id: "DKI Jakarta",
                data: [
                    [
                    "46",
                    17
                    ],
                    [
                    "47",
                    14
                    ],
                    [
                    "48",
                    17
                    ],
                    [
                    "107",
                    5
                    ],
                    [
                    "130",
                    8
                    ],
                    [
                    "172",
                    7
                    ],
                    [
                    "361",
                    5
                    ],
                    [
                    "380",
                    8
                    ],
                    [
                    "386",
                    8
                    ],
                    [
                    "400",
                    1
                    ]
                ]
                },
                {
                name: "DI Yogyakarta",
                id: "DI Yogyakarta",
                data: [
                    [
                    "58",
                    17
                    ],
                    [
                    "59",
                    13
                    ],
                    [
                    "60",
                    13
                    ],
                    [
                    "108",
                    6
                    ],
                    [
                    "126",
                    6
                    ],
                    [
                    "146",
                    5
                    ],
                    [
                    "167",
                    9
                    ],
                    [
                    "313",
                    6
                    ],
                    [
                    "322",
                    8
                    ],
                    [
                    "379",
                    6
                    ]
                ]
                },
                {
                name: "Bengkulu",
                id: "Bengkulu",
                data: [
                    [
                    "378",
                    3
                    ],
                    [
                    "13",
                    14
                    ],
                    [
                    "14",
                    16
                    ],
                    [
                    "15",
                    16
                    ],
                    [
                    "179",
                    6
                    ],
                    [
                    "190",
                    4
                    ],
                    [
                    "359",
                    3
                    ]
                ]
                },
                {
                name: "Banten",
                id: "Banten",
                data: [
                    [
                    "104",
                    4
                    ],
                    [
                    "156",
                    4
                    ],
                    [
                    "174",
                    5
                    ],
                    [
                    "311",
                    4
                    ],
                    [
                    "365",
                    5
                    ],
                    [
                    "375",
                    4
                    ],
                    [
                    "49",
                    15
                    ],
                    [
                    "50",
                    11
                    ],
                    [
                    "51",
                    16
                    ]
                ]
                },
                {
                name: "Bangka Belitung",
                id: "Bangka Belitung",
                data: [
                    [
                    "29",
                    15
                    ],
                    [
                    "30",
                    15
                    ],
                    [
                    "28",
                    14
                    ],
                    [
                    "336",
                    4
                    ],
                    [
                    "346",
                    5
                    ],
                    [
                    "351",
                    3
                    ],
                    [
                    "355",
                    7
                    ],
                    [
                    "372",
                    5
                    ]
                ]
                },
                {
                name: "Bali",
                id: "Bali",
                data: [
                    [
                    "65",
                    18
                    ],
                    [
                    "66",
                    17
                    ],
                    [
                    "64",
                    14
                    ],
                    [
                    "143",
                    5
                    ],
                    [
                    "166",
                    5
                    ],
                    [
                    "196",
                    3
                    ],
                    [
                    "396",
                    9
                    ]
                ]
                }
            ]
            }
            });
    </script>


    <!-- CHART JUMLAH KARYAWAN PERJABATAN -->
    <script>
        $(function() {
            var labels = {{Js::from($namaPosisi)}};
            var count = {{Js::from($labelJumlahKaryawan)}};
            const Chart_JumlahKaryawan = document.getElementById('Chart_JumlahKaryawan');

            new Chart(Chart_JumlahKaryawan, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'jumlah karyawan',
                        data: count,
                        borderWidth: 1,
                        backgroundColor: '#B21368'
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
    <!-- Manual -->
    <script>
        Highcharts.chart('karyawanperprovinsi', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: ' '
            },
            // subtitle: {
            //     align: 'left',
            //     text: 'Click the columns to view versions.'
            // },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah Karyawan'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },
            
            series: [
                {
                    name: "Pulau",
                    colorByPoint: true,
                    data: [
                        {
                            name: "Jawa",
                            y: 743,
                            drilldown: "Jawa"
                        },
                        {
                            name: "Sumatera",
                            y: 726,
                            drilldown: "Sumatra"
                        },
                        {
                            name: "Sulawesi",
                            y: 583,
                            drilldown: "Sulawesi"
                        },
                        {
                            name: "Papua",
                            y: 86,
                            drilldown: "Papua"
                        },
                        {
                            name: "Kalimantan",
                            y: 382,
                            drilldown: "Kalimantan"
                        }
                    ]
                }
            ],
            drilldown: {
                breadcrumbs: {
                    position: {
                        align: 'right'
                    }
                },
                series: [
                    {
                        name: "Jawa",
                        id: "Jawa",
                        data: [
                            [
                                "Bali",
                                71
                            ],
                            [
                                "Banten",
                                68
                            ],
                            [
                                "DI Yogyakarta",
                                89
                            ],
                            [
                                "DKI Jakarta",
                                90
                            ],
                            [
                                "Jawa Barat",
                                108
                            ],
                            [
                                "Jawa Timur",
                                90
                            ],
                            [
                                "Jawa Tengah",
                                92
                            ],
                            [
                                "Nusa Tenggara Barat",
                                61
                            ],
                            [
                            "Nusa Tenggara Timur",
                                74
                            ]
                        ]
                    },
                    {
                        name: "Sumatera",
                        id: "Sumatera",
                        data: [
                            [
                                "Bangka Belitung",
                                67
                            ],
                            [
                                "Bengkulu",
                                62
                            ],
                            [
                                "Jambi",
                                58
                            ],
                            [
                                "Kepulauan Riau",
                                89
                            ],
                            [
                                "Riau",
                                85
                            ],
                            [
                                "Lampung",
                                92
                            ],
                            [
                                "Nanggroe Aceh Darussalam",
                                57
                            ],
                            [
                                "Sumatera Barat",
                                90
                            ],
                            [
                                "Sumatera Selatan",
                                61
                            ],
                            [
                                "Sumatera Utara",
                                65
                            ]
                        ]
                    },
                    {
                        name: "Sulawesi",
                        id: "Sulawesi",
                        data: [
                            [
                                "Gorontalo",
                                102
                            ],
                            [
                                "Maluku",
                                44
                            ],
                            [
                                "Maluku Utara",
                                42
                            ],
                            [
                                "Sulawesi Barat",
                                100
                            ],
                            [
                                "Sulawesi Selatan",
                                57
                            ],
                            [
                                "Sulawesi Tengah",
                                85
                            ],
                            [
                                "Sulawesi Tenggara",
                                64
                            ],
                            [
                                "Sulawesi Utara",
                                89
                            ]
                        ]
                    },
                    {
                        name: "Kalimantan",
                        id: "Kalimantan",
                        data: [
                            [
                                "Kalimantan Barat",
                                89
                            ],
                            [
                                "Kalimantan Selatan",
                                67
                            ],
                            [
                                "Kalimantan Tengah",
                                90
                            ],
                            [
                                "Kalimantan Timur",
                                63
                            ],
                            [
                                "Kalimantan Utara",
                                73
                            ]
                        ]
                    },
                    {
                        name: "Papua",
                        id: "Papua",
                        data: [
                            [
                                "Papua",
                                40
                            ],
                            [
                                "Papua Barat",
                                46
                            ]
                        ]
                    }
                ]
            }
        });

    </script>

</body>

</html>