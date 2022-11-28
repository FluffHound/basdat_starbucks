<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Membership</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./starbucks_resource/css/styles_kasir - member_list.css" rel="stylesheet" />
</head>

<body>
    @extends('starbucks.master')

    @section('content')

    <!-- @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif -->
    <!-- Background Video-->
    <!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="./starbucks_resource/assets/mp4/Starbucks 50th Anniversary.mp4" type="video/mp4" /></video> -->
    <!-- MEMBER LIST -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Member List</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('member_input') }}"> Go back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
		<table class="table table-bordered">
			<tr>
                <th>ID Member</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Provinsi</th>
				<th>Nomor Telepon</th>
                <th>Tanggal Pembuatan Membership</th>
                <th>Saldo</th>
			</tr>
			@if(count($member_list) > 0)
				@foreach($member_list as $row)
					<tr>
                        <td>{{ $row->id_member }}</td>
						<td>{{ $row->nama }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>{{ $row->tanggal_lahir }}</td>
						<td>{{ $row->alamat }}</td>
						<td>{{ $row->provinsi }}</td>
                        <td>{{ $row->nomor_telepon }}</td>
                        <td>{{ $row->tanggal_pembuatan }}</td>
                        <td>{{ $row->saldo }}</td>
					</tr>
				@endforeach
			@else
				<tr>
					<td colspan="8" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $member_list->links() !!}
	</div>
    <!-- MEMBER LIST -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Core theme JS-->
    <script src="./starbucks_resource/js/scripts.js "></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js "></script>
</body>

</html>