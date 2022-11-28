<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="./starbucks_resource/css/styles.css" rel="stylesheet" />
    <!-- <link href="./starbucks_resource/css/membership.css" rel="stylesheet" /> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" crossorigin="anonymous"></script>
    <script src="./starbucks_resource/js/incrementing.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/sb-1.3.4/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/sb-1.3.4/datatables.min.js"></script>
    <!-- TableSort -->
    <script src="./starbucks_resource/js/tablesort.min.js"></script>
    <script src="./starbucks_resource/js/tablesort.number.min.js"></script>
    <link href="./starbucks_resource/css/tablesort.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- Navbar Brand-->
        <img class="img-fluid" src="./starbucks_resource/assets/img/Starbucks_Logo-removebg-preview.png" alt="logo" style="width: 45px;" />
        <a class="navbar-brand ps-3" href="index.html">Starbucks Database</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Pages</div>
                        <a class="nav-link" href="#" onclick="showCatalog()">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Menu
                        </a>
                        <a class="nav-link" href="#" onclick="showMember()">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Membership
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
    </div>
    <br><br><br>
    <!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="./starbucks_resource/assets/mp4/Starbucks 50th Anniversary.mp4" type="video/mp4" /></video> -->
    <!-- <br><br><br><br><br>
    <div class="col-12">
        <input type="text" id="myInput" placeholder="Search for names.." data-table="menu-list" class="search-input">
    </div> -->
    <span id="hideCatalog" style="display: block;">
        @yield('content')
    </span>

    @yield('cart')

    <span id="hideMember" style="display: none;">
        @yield('membership')
    </span>

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif

    <footer class="py-4 bg-light mt-auto ">
        <div class="container-fluid px-4 ">
            <div class="d-flex align-items-center justify-content-between small ">
                <div class="text-muted ">Copyright &copy; Starbucks Database 2022</div>
                <div>
                    <a href="https://www.starbucks.com/terms/privacy-policy/">Privacy Policy</a> &middot;
                    <a href="https://www.starbucks.co.id/learn-more/starbucks-card-terms-and-condition">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " crossorigin="anonymous "></script>
<script src="./starbucks_resource/js/scripts.js "></script>
<script src="./starbucks_resource/js/incrementing.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js " crossorigin="anonymous "></script>
<script src="./starbucks_resource/assets/demo/chart-area-demo.js "></script>
<script src="./starbucks_resource/assets/demo/chart-bar-demo.js "></script>
<!-- Hide Element Function -->
<script>
    function showCatalog() {
        var y = document.getElementById("hideMember");
        y.style.display = "none";
        
        var x = document.getElementById("hideCatalog");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    function showMember() {
        var y = document.getElementById("hideCatalog");
        y.style.display = "none";

        var x = document.getElementById("hideMember");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }
</script>
<!-- Sorting Table Function -->
<script>
  new Tablesort(document.getElementById('menuTable'));
</script>
<!-- Search Table Function -->
<script>
    (function(document) {
        'use strict';
        var TableFilter = (function(myArray) {
            var search_input;

            function _onInputSearch(e) {
                search_input = e.target;
                var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                myArray.forEach.call(tables, function(table) {
                    myArray.forEach.call(table.tBodies, function(tbody) {
                        myArray.forEach.call(tbody.rows, function(row) {
                            var text_content = row.textContent.toLowerCase();
                            var search_val = search_input.value.toLowerCase();
                            row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                        });
                    });
                });
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('search-input');
                    myArray.forEach.call(inputs, function(input) {
                        input.oninput = _onInputSearch;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                TableFilter.init();
            }
        });
    })(document);
</script>
</html>