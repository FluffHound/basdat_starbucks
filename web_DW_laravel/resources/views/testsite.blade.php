<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Starbucks OLAP Panel</title>
        <link rel="icon" type="image/x-icon" href="./starbucks_resource/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap -->
        <!-- <link href="./css/styles.css" rel="stylesheet"/> -->
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
          <img class="img-fluid" src="./assets/img/Starbucks_Logo-removebg-preview.png" alt="logo" style="width: 45px;" />
          <a class="navbar-brand ps-3" href="index.html">TESTSITE</a>
  
          <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
          <!-- Navbar-->
        </nav>
      </div>
      
      <div class="card">
        <center>
          <h1>DUMMY CHARTS</h1>
        </center>
        
        <div>
          <canvas id="myChart"></canvas>
        </div>

        <h1>TABLES</h1>
<!-- ========================= DIM CABANG ========================= -->
        <p>dim_cabang</p>
        <table class="table display" id="cabangTable">
          <thead>
            <tr>
              <th>id_provinsi</th>
              <th>nama_provinsi</th>
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

        <h1>dim_cabang CHARTS</h1>
        <div>
          <canvas id="chart_dimCabang"></canvas>
        </div>
<!-- ========================= DIM KARYAWAN ========================= -->
        <p>dim_karyawan</p>
        <table class="table display" id="karyawanTable">
          <thead>
            <tr>
              <th>id_provinsi</th>
              <th>nama_provinsi</th>
              <th>Jumlah Cabang</th>
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

        <h1>dim_karyawan CHARTS</h1>
        <div>
          <canvas id="chart_dimKaryawan"></canvas>
        </div>
      </div>
      
      <!-- Chart Section -->
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
      <!-- ========================= Datatable ========================= -->
      <script>
        $(document).ready( function () {
            $('#cabangTable').DataTable();
            $('#karyawanTable').DataTable();
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
    </body>       
</html>