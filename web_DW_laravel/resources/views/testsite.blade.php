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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.js" integrity="sha512-zulXrCFpnkALZBNUHe4E6rTUt7IhNLDUuLTLqTyKb93z7CrEVzFdL8KfPV6VPplL8+b4MZGOdh00+d2nzGiveg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- Datatables -->
        <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
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
          <h1>Barchart dim_karyawan di Jatim</h1>
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
              <td>{{ $row -> nama_tipe_produk }}</td>
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

        <!-- ========================= Penjualan Produk per waktu ========================= -->
        <center>
          <h1>Tabel Penjualan Produk per waktu</h1>
          <p>Jumlah Penjualan Produk per waktu</p>
        </center>

        <table class="table display" id="penjualanPerWaktu">
          <thead>
            <tr>
              <th>Waktu</th>
              <th>Jumlah Pembelian</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dbJumlahPenjualan2021 as $row)
            <tr>
              <td>{{ $row -> sk_waktu }}</td>
              <td>{{ $row -> jumlahPembelian }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        <center>
          <h1>Linechart Penjualan Produk per waktu</h1>
        </center>
        <div>
          <canvas id="chart_skwaktu"></canvas>
        </div>

        <!-- ========================= Pemasukan Tiap Kategori ========================= -->
        <center>
          <h1>Tabel Pemasukan per Tipe Produk</h1>
          <p>Tipe produk paling menguntungkan</p>
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
          <h1>Barchart Pemasukan per Tipe Produk</h1>
        </center>
        <div>
          <canvas id="chart_pemasukan"></canvas>
        </div>
        <div>
          <div id="hm"></div>
        </div>

        <!-- ================================= EXPERIMENTAL ================================= -->
        <div>
          <h1>Experimental Space</h1>
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
                  <td>{{ $row -> nama_tipe_produk }}</td>
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
            $('#penjualanPerWaktu').DataTable();
            $('#pemasukanProduk').DataTable();
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
                label: 'Jumlah Karyawan',
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
          // console.log(labels[0]);
          for (type in labels)
          {
            console.log(labels[type]);
          }
          var count = {{ Js::from($dataProdukPerTipe) }};
          console.log(count);
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
      <!-- ========================= Penjualan Line Chart ========================= -->
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
                  borderWidth: 3
                },
                {
                  label: 'Produk Terjual 2020',
                  data: count2,
                  borderWidth: 3
                },
                {
                  label: 'Produk Terjual 2019',
                  data: count3,
                  borderWidth: 3
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

        <!-- ========================= Pemasukan Bar Chart ========================= -->
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
                  borderWidth: 1
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
        <!-- Manual  -->
        <script>
          Highcharts.chart('hm', {
              chart: {
                  type: 'column'
              },
              title: {
                  align: 'left',
                  text: 'Jumlah Karyawan Starbucks per Provinsi???'
              },
              subtitle: {
                  align: 'left',
                  text: 'Click the columns to view versions.'
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