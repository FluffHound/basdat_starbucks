<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Manager_Dashboard</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="./starbucks_resource/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" crossorigin="anonymous"></script>
    <script src="./starbucks_resource/js/incrementing.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- Navbar Brand-->
        <img class="img-fluid" src="./starbucks_resource/assets/img/Starbucks_Logo-removebg-preview.png" alt="logo" style="width: 45px;" />
        <a class="navbar-brand ps-3" href="index_manager.html">Starbucks Database</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Manager</div>
                        <a class="nav-link" href="#" onclick="showToko()">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-store"></i></div>
                            Toko
                        </a>
                        <a class="nav-link" href="#" onclick="showKaryawan()">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Karyawan
                        </a>
                        <a class="nav-link" href="#" onclick="showProduk()">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="#" onclick="showPerforma()">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Performa Karyawan
                        </a>
                        <a class="nav-link" href="#" onclick="showPenjualan()">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart"></i></div>
                            Penjualan Menu
                        </a>
                        <a class="nav-link" href="#" onclick="showInputKaryawan()">
                            <div class="sb-nav-link-icon"><i class="fa fa-registered"></i></div>
                            Register Karyawan
                        </a>
                        <a class="nav-link" href="signout">
                            <div class="sb-nav-link-icon"><i class="fa fa-sign-out"></i></div>
                            Log Out
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{ $user_username }}
                </div>
            </nav>
        </div>
        <!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="./starbucks_resource/assets/mp4/Starbucks 50th Anniversary.mp4" type="video/mp4" style="opacity:dark"/></video> -->
        <div id="layoutSidenav_content">
            <!-- MODULAR CONTENT -->
            <div id="hideToko" style="display: block;">
                <div class="container">
                    <button type="button justify-content-center" class="btn btn-dark" style="font-size: 25px;">Toko</button>
                    <!-- <h1 class="fst-italic lh-1 mb-4">Menu Pesanan</h1> -->
                    <div class="card mb-6">
                        <div class="card-header"><i class="fa fa-store me-1"></i> Toko</div>
                        <div class="col">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th width="10px">ID Toko</th>
                                        <th width="100px">No Telepon</th>
                                        <th width="50px">Provinsi</th>
                                        <th width="100px">Kota</th>
                                        <th width="100px">Alamat</th>
                                    </tr>
                                    <tbody>
                                        @foreach($data_toko as $toko)
                                            <tr>
                                                <td>{{ $toko -> id_toko }}</td>
                                                <td>{{ $toko -> nomor_telepon }}</td>
                                                <td>{{ $toko -> provinsi }}</td>
                                                <td>{{ $toko -> kota }}</td>
                                                <td>{{ $toko -> alamat }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hideKaryawan" style="display: none;">
                <div class="container">
                    <button type="button justify-content-center" class="btn btn-dark" style="font-size: 25px;">Karyawan</button>
                    <!-- <h1 class="fst-italic lh-1 mb-4">Menu Pesanan</h1> -->
                    <div class="card mb-6">
                        <div class="card-header"><i class="fa fa-users me-1"></i> Karyawan</div>
                            <div class="col">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th width="10px">ID Karyawan</th>
                                            <th width="100px">ID Posisi</th>
                                            <th width="50px">ID Toko</th>
                                            <th width="100px">Nama</th>
                                            <th width="100px">NIK</th>
                                            <th width="100px">Email</th>
                                            <th width="100px">Jenis Kelamin</th>
                                            <th width="100px">Tempat Lahir</th>
                                            <th width="100px">Tanggal Lahir</th>
                                            <th width="100px">Nomor Telepon</th>
                                            <th width="100px">Agama</th>
                                            <th width="100px">Status Pernikahan</th>
                                            <th width="100px">Alamat</th>
                                            <th width="100px">Tanggal Perekrutan</th>
                                        </tr>
                                        <tbody>
                                            @foreach($data_karyawan as $karyawan)
                                            <tr>
                                                <td>{{ $karyawan -> id_karyawan }}</td>
                                                <td>{{ $karyawan -> id_posisi_fk }}</td>
                                                <td>{{ $karyawan -> id_toko_fk }}</td>
                                                <td>{{ $karyawan -> nama }}</td>
                                                <td>{{ $karyawan -> nik }}</td>
                                                <td>{{ $karyawan -> email }}</td>
                                                <td>{{ $karyawan -> jenis_kelamin }}</td>
                                                <td>{{ $karyawan -> tempat_lahir }}</td>
                                                <td>{{ $karyawan -> tanggal_lahir }}</td>
                                                <td>{{ $karyawan -> nomor_telepon }}</td>
                                                <td>{{ $karyawan -> agama }}</td>
                                                <td>{{ $karyawan -> status_pernikahan }}</td>
                                                <td>{{ $karyawan -> alamat }}</td>
                                                <td>{{ $karyawan -> tanggal_perekrutan }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hideProduk" style="display: none;">
                <br><br><br>
                <div class="container">
                    <button type="button justify-content-center" class="btn btn-dark" style="font-size: 25px;">Produk</button>
                    <div class="card mb-6">
                        <div class="card-header"><i class="fa-brands fa-product-hunt me-1"></i> Produk</div>
                        <div class="col">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th width="10px">Kode Produk</th>
                                        <th width="100px">Tipe Produk</th>
                                        <th width="50px">Nama Produk</th>
                                        <th width="100px">Stok Tersedia</th>
                                    </tr>
                                    <tbody>
                                        @foreach($data_produk as $produk)
                                        <tr>
                                            <td>{{ $produk -> kode_produk }}</td>
                                            <td>{{ $produk -> tipe_produk_fk }}</td>
                                            <td>{{ $produk -> nama_produk }}</td>
                                            <td>{{ $produk -> stok_tersedia }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hidePerforma" style="display: none;">
                <br><br><br>
                <div class="container">
                    <!-- <h1 class="fst-italic lh-1 mb-4">Menu Pesanan</h1> -->
                    <div class="card mb-6">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" style="font-size: 25px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Bulan
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Januari</a></li>
                                <li><a class="dropdown-item" href="#">Februari</a></li>
                                <li><a class="dropdown-item" href="#">Maret</a></li>
                                <li><a class="dropdown-item" href="#">April</a></li>
                                <li><a class="dropdown-item" href="#">Mei</a></li>
                                <li><a class="dropdown-item" href="#">Juni</a></li>
                                <li><a class="dropdown-item" href="#">Juli</a></li>
                                <li><a class="dropdown-item" href="#">Agustus</a></li>
                                <li><a class="dropdown-item" href="#">September</a></li>
                                <li><a class="dropdown-item" href="#">Oktober</a></li>
                                <li><a class="dropdown-item" href="#">November</a></li>
                                <li><a class="dropdown-item" href="#">Desember</a></li>
                            </ul>
                            <button class="btn btn-dark dropdown-toggle" style="font-size: 25px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tahun
                              </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                            </ul>
                        </div>

                        <div class="card-header"><i class="fa fa-users me-1"></i>Performa Karyawan</div>
                        <div class="col">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th width="10px">ID Karyawan</th>
                                        <th width="100px">Nama Karywan</th>
                                        <th width="50px">Total Penjualan</th>
                                    </tr>
                                    <tbody>
                                        @foreach($data_karyawan as $karyawan)
                                            @if ($karyawan -> id_posisi_fk == 17)
                                            <tr>
                                                <td>{{ $karyawan -> id_karyawan }}</td>
                                                <td>{{ $karyawan -> nama }}</td>
                                                <td>20</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hidePenjualan" style="display: none;">
                <br><br><br>
                <div class="container">
                    <!-- <h1 class="fst-italic lh-1 mb-4">Menu Pesanan</h1> -->
                    <div class="card mb-6">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" style="font-size: 25px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Bulan
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Januari</a></li>
                                <li><a class="dropdown-item" href="#">Februari</a></li>
                                <li><a class="dropdown-item" href="#">Maret</a></li>
                                <li><a class="dropdown-item" href="#">April</a></li>
                                <li><a class="dropdown-item" href="#">Mei</a></li>
                                <li><a class="dropdown-item" href="#">Juni</a></li>
                                <li><a class="dropdown-item" href="#">Juli</a></li>
                                <li><a class="dropdown-item" href="#">Agustus</a></li>
                                <li><a class="dropdown-item" href="#">September</a></li>
                                <li><a class="dropdown-item" href="#">Oktober</a></li>
                                <li><a class="dropdown-item" href="#">November</a></li>
                                <li><a class="dropdown-item" href="#">Desember</a></li>
                            </ul>
                            <button class="btn btn-dark dropdown-toggle" style="font-size: 25px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tahun
                              </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                            </ul>
                        </div>

                        <div class="card-header"><i class="fa fa-store me-1"></i> Toko</div>
                        <div class="col">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th width="10px">ID Menu</th>
                                        <th width="100px">Nama Menu</th>
                                        <th width="50px">Jumlah Terjual</th>
                                        <th width="100px">Harga Penjualan</th>
                                    </tr>
                                    <tbody>
                                        @foreach($data_produk as $produk)
                                            @foreach($total_penjualan as $penjualan)
                                                <tr>
                                                    @if ($penjualan -> kode_produk_fk == $produk -> kode_produk)
                                                        <td>{{ $produk -> kode_produk }}</td>
                                                        <td>{{ $produk -> nama_produk }}</td>
                                                        <td>{{ $penjualan -> total_pembelian }}</td>
                                                        <td>{{ $penjualan -> total_pembelian * $produk -> harga }}</td>
                                                        </tr>
                                                        @break
                                                    @endif
                                            @endforeach
                                                <td>{{ $produk -> kode_produk }}</td>
                                                <td>{{ $produk -> nama_produk }}</td>
                                                <td>0</td>
                                                <td>0</td>
                                                </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hideInputKaryawan" style="display: none;">
                <br><br><br><br>
                <div class="col">
                    <div class="card">
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store_member') }}" enctype="multipart/form-data">
                            <div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Karyawan</label>
                                        <input type="number" name="id_karyawan" class="form-control" id="inputEmail3" placeholder="ID Karyawan">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">ID Posisi</label>
                                        <input type="number" name="id_posisi_fk" class="form-control" id="inputEmail3" placeholder="ID Posisi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">ID Golongan</label>
                                        <input type="number" name="id_golongan_fk" class="form-control" id="inputEmail3" placeholder="ID Golongan">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">ID Toko</label>
                                        <input type="number" name="id_toko_fk" class="form-control" id="inputEmail3" placeholder="ID Toko">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Karyawan</label>
                                        <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Karyawan">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">NIK</label>
                                        <input type="number" name="nik" class="form-control" id="inputEmail3" placeholder="NIK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <input type="number" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <input type="number" name="nomor_telepon" class="form-control" id="inputEmail3" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <legend class="col-form-label col-sm-2 pt-0" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">Jenis Kelamin</legend>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="p">
                                            <label class="form-check-label" for="gridRadios1">
                                            Perempuan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="l">
                                            <label class="form-check-label" for="gridRadios2">
                                            Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                        <input type="text" name='agama' class="form-control" id="inputEmail3" placeholder="Agama">
                                    </div>
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Status Pernikahan</label>
                                        <input type="text" name="status_pernikahan" class="form-control" id="inputEmail3" placeholder="Status Pernikahan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                        <input type="text" name='alamat' class="form-control" id="inputEmail3" placeholder="Alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <br>
                                <button type="submit" class="btn btn-success">Input</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto ">
            <div class="container-fluid px-4 ">
                <div class="d-flex align-items-center justify-content-between small ">
                    <div class="text-muted ">Copyright &copy; Starbucks Database 2022</div>
                    <div>
                        <a href="# ">Privacy Policy</a> &middot;
                        <a href="# ">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

<script>
    function showToko() {
        var y = document.getElementById("hideKaryawan");
        y.style.display = "none"

        var y = document.getElementById("hideProduk");
        y.style.display = "none"

        var y = document.getElementById("hidePerforma");
        y.style.display = "none"

        var y = document.getElementById("hidePenjualan");
        y.style.display = "none"
        
        var y = document.getElementById("hideInputKaryawan");
        y.style.display = "none"

        var x = document.getElementById("hideToko");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showKaryawan() {
        var y = document.getElementById("hideToko");
        y.style.display = "none"

        var y = document.getElementById("hideProduk");
        y.style.display = "none"

        var y = document.getElementById("hidePerforma");
        y.style.display = "none"

        var y = document.getElementById("hidePenjualan");
        y.style.display = "none"

        var y = document.getElementById("hideInputKaryawan");
        y.style.display = "none"

        var x = document.getElementById("hideKaryawan");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showProduk() {
        var y = document.getElementById("hideToko");
        y.style.display = "none"

        var y = document.getElementById("hideKaryawan");
        y.style.display = "none"

        var y = document.getElementById("hidePerforma");
        y.style.display = "none"

        var y = document.getElementById("hidePenjualan");
        y.style.display = "none"

        var y = document.getElementById("hideInputKaryawan");
        y.style.display = "none"

        var x = document.getElementById("hideProduk");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showPerforma() {
        var y = document.getElementById("hideToko");
        y.style.display = "none"

        var y = document.getElementById("hideKaryawan");
        y.style.display = "none"

        var y = document.getElementById("hideProduk");
        y.style.display = "none"

        var y = document.getElementById("hidePenjualan");
        y.style.display = "none"

        var y = document.getElementById("hideInputKaryawan");
        y.style.display = "none"

        var x = document.getElementById("hidePerforma");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showPenjualan() {
        var y = document.getElementById("hideToko");
        y.style.display = "none"

        var y = document.getElementById("hideKaryawan");
        y.style.display = "none"

        var y = document.getElementById("hideProduk");
        y.style.display = "none"

        var y = document.getElementById("hidePerforma");
        y.style.display = "none"

        var y = document.getElementById("hideInputKaryawan");
        y.style.display = "none"

        var x = document.getElementById("hidePenjualan");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showInputKaryawan() {
        var y = document.getElementById("hideToko");
        y.style.display = "none"

        var y = document.getElementById("hideKaryawan");
        y.style.display = "none"

        var y = document.getElementById("hideProduk");
        y.style.display = "none"

        var y = document.getElementById("hidePerforma");
        y.style.display = "none"

        var y = document.getElementById("hidePenjualan");
        y.style.display = "none"

        var x = document.getElementById("hideInputKaryawan");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " crossorigin="anonymous "></script>
<script src="./starbucks_resource/js/scripts.js "></script>
<script src="./starbucks_resource/js/incrementing.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js " crossorigin="anonymous ">
</script>
<script src="./starbucks_resource/assets/demo/chart-area-demo.js "></script>
<script src="./starbucks_resource/assets/demo/chart-bar-demo.js "></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest " crossorigin="anonymous "></script>
<script src="./starbucks_resource/js/datatables-simple-demo.js "></script>

</html>