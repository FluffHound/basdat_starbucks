<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Starbucks OLAP Panel</title>
        <link rel="icon" type="image/x-icon" href="./assets/klee.webp" />
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
    </head>
    <body>
      <div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

          <!-- Navbar Brand-->
          <a class="navbar-brand ps-3" href="https://youtu.be/dQw4w9WgXcQ?t=42"><img class="img-fluid" src="./assets/klee.webp" alt="logo" style="width: 45px;"/></a>
          <p style="color: white; font-size: 150%;">TESTSITE - coba coba sahaja === JANGAN EDIT, COPY TAKPE ===</p>
  
          <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
          <!-- Navbar-->
        </nav>
      </div>
      
      <div class="card">
        <center>
          <h1>DUMMY CHARTS</h1>
          <p>Contoh barchart</p>
        </center>

        <div>
          <canvas id="myChart"></canvas>
        </div>
        <!-- ========================= DIM CABANG ========================= -->
        <center>
          <h1>Tabel dim_cabang</h1>
          <p>Jumlah cabang per provinsi</p>
        </center>

        <table class="table display" id="cabangTable">
          <thead>
            <tr>
              <th>ID Provinsi</th>
              <th>Nama Provinsi</th>
              <th>Jumlah Cabang</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dbCabang as $row)
            <tr>
              <td>{{ $row -> id_provinsi }}</td>
              <td>{{ $row -> nama_provinsi }}</td>
              <td>{{ $row -> jumlahToko }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <center>
          <h1>Barchart dim_cabang</h1>
        </center>
        <div>
          <canvas id="chart_dimCabang"></canvas>
        </div>
        <!-- ========================= DIM KARYAWAN ========================= -->
        <center>
          <h1>Tabel dim_karyawan</h1>
          <p>Jumlah karyawan per cabang</p>
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
          <h1>Barchart dim_karyawan</h1>
        </center>
        <div>
          <canvas id="chart_dimKaryawan"></canvas>
        </div>

        <!-- ========================= DIM Produk per tipe produk ========================= -->
        <center>
          <h1>Tabel Produk per tipe produk</h1>
          <p>Jumlah produk per tipe produk</p>
        </center>

        <table class="table display" id="produkPerTipeTable">
          <thead>
            <tr>
              <th>ID Tipe Produk</th>
              <th>Tipe Produk</th>
              <th>Jumlah Produk</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dbProdukPerTipe as $row)
            <tr>
              <td>{{ $row -> id_tipe_produk }}</td>
              <td>{{ $row -> tipe_produk }}</td>
              <td>{{ $row -> jumlahProduk }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <center>
          <h1>Barchart Produk per tipe produk</h1>
        </center>
        <div>
          <canvas id="chart_produkPerTipe"></canvas>
        </div>
    
      </div> <!-- Close card body -->
      
      <!-- __________________________ DUMMY CHART __________________________ -->
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 1
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
      </script>
      <!-- __________________________ Datatable __________________________ -->
      <script>
        $(document).ready( function () {
            $('#cabangTable').DataTable();
            $('#karyawanTable').DataTable();
            $('#produkPerTipeTable').DataTable();
        } );
      </script>
      <!-- ========================= DIM CABANG CHARTS ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelCabang) }};
          var count = {{ Js::from($dataCabang) }};
          const chartCabang = document.getElementById('chart_dimCabang');
        
          new Chart(chartCabang, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah cabang',
                data: count,
                borderWidth: 1
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
      <!-- ========================= DIM KARYAWAN CHARTS ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelKaryawan) }};
          var count = {{ Js::from($dataKaryawan) }};
          const chartCabang = document.getElementById('chart_dimKaryawan');
        
          new Chart(chartCabang, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah karyawan',
                data: count,
                borderWidth: 1
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
      <!-- ========================= DIM produk/tipe produk CHARTS ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelProdukPerTipe) }};
          var count = {{ Js::from($dataProdukPerTipe) }};
          const chartProdukPerTipe = document.getElementById('chart_produkPerTipe');
        
          new Chart(chartProdukPerTipe, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah produk',
                data: count,
                borderWidth: 1
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
      <!-- ========================= End Of Charts ========================= -->
    </body>       
</html>