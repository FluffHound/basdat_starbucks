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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="./starbucks_resource/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" crossorigin="anonymous"></script>
    <script src="./starbucks_resource/js/incrementing.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " crossorigin="anonymous "></script>
	<script src="./starbucks_resource/js/scripts.js "></script>
	<script src="./starbucks_resource/js/incrementing.js "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js " crossorigin="anonymous "></script>
	<script src="./starbucks_resource/assets/demo/chart-area-demo.js "></script>
	<script src="./starbucks_resource/assets/demo/chart-bar-demo.js "></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest " crossorigin="anonymous "></script>
	<script src="./starbucks_resource/js/datatables-simple-demo.js "></script>
</head>

<body>
	<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> -->
  <!-- Launch demo modal -->
<!-- </button> -->

<!-- <!-- Modal --> -->
<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> -->
  <!-- <div class="modal-dialog" role="document"> -->
    <!-- <div class="modal-content"> -->
      <!-- <div class="modal-header"> -->
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        <!-- </button> -->
      <!-- </div> -->
      <!-- <div class="modal-body"> -->
        <!-- ... -->
      <!-- </div> -->
      <!-- <div class="modal-footer"> -->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->
<button type="button" class="btn btn-dark" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
Order
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1 " aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style="size: 2px;">Sumamry Order</h5>
				<button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="col-25">
					<div class="container">
						<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
						<p><a href="#">Product 1</a> <span class="price">$15</span></p>
						<p><a href="#">Product 2</a> <span class="price">$5</span></p>
						<p><a href="#">Product 3</a> <span class="price">$8</span></p>
						<p><a href="#">Product 4</a> <span class="price">$2</span></p>
						<hr>
						<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
					</div>
				</div>
				<h3 style="font-size: 25px;">Payment</h3>
				<label for="fname">Accepted Cards</label>
				<br>
				<button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-brands fa-cc-paypal" style="font-size:48px;color:black"></i></button>
				<button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-brands fa-cc-mastercard"  style="font-size:48px;color:black"></i></button>
				<button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa fa-credit-card"  style="font-size:48px;color:black"></i></button>
				<button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-solid fa-money-bill-1-wave" style="font-size:48px;color:black"></i></button>
				<button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa fa-user-plus" style="font-size:48px;color:black"></i></button>

			</div>
			<div class="modal-footer">
				<button onclick="myFunctionClose()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button onclick="myFunction()" type="button" class="btn btn-success">Bayar</button>
			</div>

			<div id="hideDIV" style="display: none;">
				<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
					<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
					  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
					</symbol>
					<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
					  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
					</symbol>
					</svg>
				<div class="alert alert-success d-flex align-items-center" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
					<div>
						Pembayaran Berhasil !
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	function myFunction() {
		var x = document.getElementById("hideDIV");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
	
	function myFunctionClose() {
		var x = document.getElementById("hideDIV");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "none";
		}
	}
    </script>
</html>