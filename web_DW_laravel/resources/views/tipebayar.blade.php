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
        <!-- ========================= DIM Tipe Pembayaran ========================= -->
        <center>
          <h1>Tabel Tipe Pembayaran</h1>
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

        <center>
          <h1>Piechart Tipe Pembayaran</h1>
        </center>
        <div class='col-8'>
          <canvas id="chart_tipePembayaran"></canvas>
        </div>
    
      </div> <!-- Close card body -->

      <!-- __________________________ Datatable __________________________ -->
      <script>
        $(document).ready( function () {
            $('#tipePembayaranTable').DataTable();
        } );
      </script>
      <!-- ========================= DIM Tipe Pembayaran CHARTS ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelTipePembayaran) }};
          var count = {{ Js::from($dataTipePembayaran) }};
          const chartTipePembayaran = document.getElementById('chart_tipePembayaran');
        
          new Chart(chartTipePembayaran, {
            type: 'pie',
            data: {
              labels: labels,
              datasets: [{
                label: 'jumlah',
                data: count,
                borderWidth: 1
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
      <!-- ========================= End Of Charts ========================= -->
    </body>       
</html>