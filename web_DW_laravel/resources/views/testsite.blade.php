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
        <center>
          <h1>Barchart Produk per tipe produk</h1>
        </center>
        <div>
          <canvas id="chart_skwaktu"></canvas>
        </div>
        
        <!-- ================================= EXPERIMENTAL ================================= -->
        <div>
          <canvas id="drillChart"></canvas>
        </div>

        <script>
          const coordinates =
          {
              top: 0,
              bottom: 0,
              left: 0,
              right: 0,
          }
          const browserData =
          [
              @foreach($dbProdukPerTipe as $row)
                <tr>
                  <td>{{ $row -> id_tipe_produk }}</td>
                  <td>{{ $row -> tipe_produk }}</td>
                  <td>{{ $row -> jumlahProduk }}</td>
                </tr>
              @endforeach
              { // 0
                  browser: 'Chrome',
                  color: 'rgba(75, 192, 192, 1)',
                  users: 150,
                  marketshare: 70,
                  versionData:
                  [
                      {version: 'v5', users: 10},
                      {version: 'v6', users: 20},
                      {version: 'v7', users: 30},
                      {version: 'v8', users: 60},
                      {version: 'v9', users: 20},
                  ],
              },
              { // 1
                  browser: 'Firefox',
                  color: 'rgba(255, 26, 104, 1)',
                  users: 25,
                  marketshare: 24,
                  versionData:
                  [
                      {version: 'V3.1', users: 10},
                      {version: 'V3.2', users: 7},
                      {version: 'V3.3', users: 5},
                  ],
              },
              { // 2
                  browser: 'Safari',
                  color: 'rgba(54, 162, 235, 1)',
                  users: 30,
                  marketshare: 70,
                  versionData:
                  [
                      {version: 'Web 9', users: 10},
                      {version: 'Web 10', users: 7},
                      {version: 'Web 11', users: 8},
                  ],
              }
          ];

          // setup
          const data =
          {
              datasets:
              [{ // 0
                  label: 'Market Share of Browsers',
                  data: browserData,
                  backgroundColor:
                  [
                      browserData[0].color,
                      browserData[1].color,
                      browserData[2].color
                  ],
                  borderColor:
                  [
                  browserData[0].color,
                  browserData[1].color,
                  browserData[2].color
                  ],
                  borderWidth: 1
              }]
          };

          // resetButton plugin
          const resetButton =
          {
              id: 'resetButton',
              beforeDraw(chart, args, options)
              {
                  if(drillChart.config.data.datasets[0].label !== 'Market Share of Browsers')
                  {
                      const { ctx, chartArea: { top, bottom, left, right, width, height } } = chart;
                      ctx.save();

                      const text = 'Back';
                      const thickBorder = 3;
                      const textWidth = ctx.measureText(text).width;

                      // draw background
                      ctx.fillStyle = 'rgba(255, 26, 104, 0.2)';
                      ctx.fillRect(right - (textWidth + 1 + 10), 5, textWidth + 10, 20)

                      // draw text
                      ctx.fillStyle = '#666';
                      ctx.font = '12px Arial';
                      ctx.fillText(text, right - (textWidth + 1 + 5), 15);

                      // draw border
                      ctx.lineWidth = thickBorder + 'px';
                      ctx.strokeStyle = 'rgba(255, 26, 104, 1)';
                      ctx.strokeRect(right - (textWidth + 1 + 10), 5, textWidth + 10, 20);

                      coordinates.top = 5;
                      coordinates.bottom = 25;
                      coordinates.left = right - (textWidth + 1 + 10);
                      coordinates.right = right;

                      ctx.restore();
                  }
              }
          }

          // config
          const config =
          {
              type: 'bar',
              data,
              options:
              {
                  plugins:
                  {
                      tooltip:
                      {
                          yAlign: 'bottom'
                      }
                  },
                  onHover: (event, chartElement) =>
                  {
                      if(drillChart,config.data.datasets[0].label === 'Market Share of Browsers')
                      {
                          event.native.target.style.cursor = chartElement[0] ? 'pointer' : 'default';
                      } else
                      {
                          event.native.target.style.cursor = 'default';
                      };
                  },
                  parsing:
                  {
                      xAxisKey: 'browser',
                      yAxisKey: 'marketshare'
                  },
                  scales:
                  {
                      y:
                      {
                          beginAtZero: true
                      }
                  }
              },
              plugins: [resetButton]
          };

          // render init block
          const ctx = document.getElementById('drillChart');
          const drillChart = new Chart
          (
              ctx,
              config
          );

          function changeChart(browser)
          {
              // console.log(value + 'grabbed from clickhandler function')
              drillChart.config.options.parsing.xAxisKey = 'versionData.version';
              drillChart.config.options.parsing.yAxisKey = 'versionData.users';

              const vColor = [];
              const vUsers = [];
              const vLabels = browserData[browser].versionData.map(labels =>
              {
                  vColor.push(browserData[browser].color);
                  vUsers.push(labels.users);
                  return labels.version;
              })
              console.log(vLabels)
              drillChart.config.data.datasets[0].data = vUsers;
              drillChart.config.data.labels = vLabels;
              drillChart.config.data.datasets[0].backgroundColor = vColor;
              drillChart.config.data.datasets[0].borderColor = vColor;
              drillChart.config.data.datasets[0].label = browserData[browser].browser;
              drillChart.update();
          };

          function clickHandler(click)
          {
              if(drillChart.config.data.datasets[0].label === 'Market Share of Browsers')
              {
                  const bar = drillChart.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true);
                  console.log(bar);
                  if(bar.length)
                  {
                      console.log(bar[0].index);
                      changeChart(bar[0].index);
                  }
              }
          };

          function resetChart()
          {
              // console.log('clicked reset button!');
              drillChart.config.options.parsing.xAxisKey = 'browser';
              drillChart.config.options.parsing.yAxisKey = 'marketshare';

              const bColor = [];
              const bMarketshare = [];
              const bLabels = browserData.map(browser =>
              {
                  bColor.push(browser.color);
                  bMarketshare.push(browser.marketshare);
                  return browser.browser;
              });

              drillChart.config.data.datasets[0].backgroundColor = bColor;
              drillChart.config.data.datasets[0].borderColor = bColor;
              drillChart.config.data.labels = bLabels;
              drillChart.config.data.datasets[0].label = 'Market Share of Browsers';
              drillChart.config.data.datasets[0].data = bMarketshare;

              drillChart.update();
          };

          function mousemoveHandler(canvas, mousemove)
          {
              const x = mousemove.offsetX;
              const y = mousemove.offsetY;
              // console.log(mousemove.offsetY)
              if(drillChart.config.data.datasets[0].label !== 'Market Share of Browsers')
              {
                  if(x > coordinates.left && x < coordinates.right && y > coordinates.top && y < coordinates.bottom)
                  {
                      canvas.style.cursor = 'pointer';
                  } else
                  {
                      canvas.style.cursor = 'default';
                  };
              };
          };

          function clickButtonHandler(canvas, click)
          {
              const x = click.offsetX;
              const y = click.offsetY;

              if(x > coordinates.left && x < coordinates.right && y > coordinates.top && y < coordinates.bottom)
              {
                  resetChart();
              };
          };

          ctx.onclick = clickHandler;

          ctx.addEventListener('mousemove', (e) =>
          {
              drillChart.resize();
              mousemoveHandler(ctx, e);
          });

          ctx.addEventListener('click', (e) =>
          {
              drillChart.resize();
              clickButtonHandler(ctx, e);
          });
        </script>
        <!-- ================================= EXPERIMENTAL DONEEEEEE ================================= -->
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
      <!-- =========================Line Chart End Of Charts ========================= -->
      <script>
        $(function()
        {
          var labels = {{ Js::from($labelWaktu) }};
          var count = {{ Js::from($labelPembelian) }};
          const chart_skwaktu = document.getElementById('chart_skwaktu');
        
          new Chart(chart_skwaktu, {
            type: 'line',
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
    </body>       
</html>