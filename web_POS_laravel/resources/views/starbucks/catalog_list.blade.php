@extends('starbucks.catalog_menu')

@section('content')
<br><br><br>
<main class="my-8">
    <div id="layoutSidenav_content">
        <div class="container">
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <button type="button" class="btn btn-dark" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Orders
            </button>
            <input type="text" id="myInput" placeholder="Search for names.." data-table="menu-list" class="search-input">
            <div class="d-flex">
                <div class="col-6">
                    <!-- EMPTY SPACING -->
                </div>
            </div>
            <br>
            <div class="card mb-6">
                <div class="card-header"><i class="fas fa-table me-1"></i> Menu Order</div>
                <div class="col">
                    <table id="menuTable" class='table table-bordered menu-list'>
                        <thead>
                            <tr>
                                <th width="7px" style="text-align: center;" data-sort="number">Kode Produk</th>
                                <th width="200px" style="text-align: center;" data-sort="string">Nama Produk</th>
                                <th width="50px" style="text-align: center;" data-sort="string">Tipe Produk</th>
                                <th width="100px" style="text-align: center;" data-sort="number">Harga</th>
                                <th width="100px" style="text-align: center;">Kuantitas</th>
                                <th width="100px" style="text-align: center;">Checkout</th>
                            </tr>
                            <tbody>
                            @if(count($catalog_list) > 0)
                                @foreach($catalog_list as $row)
                                    <tr>
                                        <form method='POST' action="{{ route('cart.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <td style="text-align: center;">{{ $row -> kode_produk }}</td>
                                            <td>{{ $row -> nama_produk }}</td>
                                            <td style="text-align: center;">{{ $row -> tipe_produk_fk }}</td>
                                            <td style="text-align: center;">{{ $row -> harga }}</td>
                                            @if ($row -> stok_tersedia == 0)
                                                <td style="text-align: center;">Stok barang habis!</td>
                                            @else
                                                <p hidden>{{ $stok_left = $row -> stok_tersedia }}</p>
                                                <td style="text-align: center;"><input name='quantity' type="number" placeholder='Jumlah' min="1" max="{{ $stok_left }}"></td>
                                            @endif
                                            <input type="hidden" value="{{ $row -> kode_produk }}" name="kode_produk">
                                            <input type="hidden" value="{{ $row -> nama_produk }}" name="nama_produk">
                                            <input type="hidden" value="{{ $row -> tipe_produk_fk }}" name="tipe_produk_fk">
                                            <input type="hidden" value="{{ $row -> harga }}"  name="harga">
                                            @if ($row -> stok_tersedia == 0)
                                                <td style="text-align: center;"><button type='submit' class='btn btn-danger' disabled>Add</button></td>
                                            @else
                                                <td style="text-align: center;"><button type='submit' class='btn btn-success'>Add</button></td>
                                            @endif
                                            <!-- <td style="text-align: center;"><button type='submit' class='btn btn-success'>Add</button></td> -->
                                        </form>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center">No Data Found</td>
                                </tr>
                            @endif
                            </tbody>
                    </table>
                </div>
            </div>
            <!-- Button trigger modal -->
            <br>
        </div>
</main>
@endsection

@section('cart')
<div class="container" style="margin-bottom: 5px;">
    <div class="row">
        <div class="col">
            <!-- <button type="button" class="btn btn-dark" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Orders
            </button> -->
        </div>
        <div class="col">
            <i                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      nput class="form-control search-input" data-table="menu-list" type="text" id="myInput" placeholder="Search...">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1 " aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="size: 2px;">Summary Order</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-25">
                        <div class="container">
                            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{ Cart::getContent() -> count() }}</b></span></h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th width="10px">Kode Produk</th>
                                        <th width="100px">Nama Produk</th>
                                        <th width="100px">Kuantitas</th>
                                        <th width="100px">Harga Satuan</th>
                                        <th width="100px">Jumlah Harga</th>
                                        <th width="100px">Remove</th>
                                    </tr>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td><p>{{ $item -> id }}</p></td>
                                                <td><p>{{ $item -> name }}</p></td>
                                                <td><p>{{ $item -> quantity }}</p></td>
                                                <td><p>{{ $item -> price }}</p></td>
                                                <td><p>{{ Cart::get($item -> id)->getPriceSum(); }}</p></td>
                                                <td>
                                                    <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button class="px-4 py-2 bg-red">x</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div>
                        Total: Rp {{ Cart::getTotal() }}
                    </div>
                    <div>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                        </form>
                    </div>
                    <!-- ======================================== PEMBAYARAN ======================================== -->
                    <h3 style="font-size: 25px;">Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <br>
                    <div class="d-flex justify-content-around">
                        <button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-brands fa-cc-paypal" style="font-size:48px;color:black"></i></button>
                        <button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-brands fa-cc-mastercard"  style="font-size:48px;color:black"></i></button>
                        <button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa fa-credit-card"  style="font-size:48px;color:black"></i></button>
                        <button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa-solid fa-money-bill-1-wave" style="font-size:48px;color:black"></i></button>
                        <button style="font-size:20px; justify-content: center;" type="button" class="btn btn-light"> <i class="fa fa-user-plus" style="font-size:48px;color:black"></i></button>
                    </div>

                    <form method='POST' action="{{ route('cart.checkout') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-around">
                            <input type="radio" name="tipe_pembayaran" value="debit">
                            <input type="radio" name="tipe_pembayaran" value="debit">
                            <input type="radio" name="tipe_pembayaran" value="debit">
                            <input type="radio" name="tipe_pembayaran" value="tunai">
                            <input type="radio" name="tipe_pembayaran" value="member">
                        </div>
                        <br>
                        <!-- <input type="number" name="id_karyawan" class="form-control" placeholder="ID karyawan" required> -->
                        <input type="text"      name="nama_pelanggan"   class="form-control"    placeholder="Nama Pelanggan">
                        <input type="number"    name="id_member"        class="form-control"    placeholder="ID Member">
                        <input type="hidden"    name="id_karyawan"      value="{{ $user_id }}" >
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button onclick="myFunction()" type="submit" class="btn btn-success">Bayar</button>
                        </div>
                    </form>

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
    </div>
</div>
@endsection

@section('membership')
<main>
    <br>
    <div class="layoutSidenav_content">
        <div class="container">
            <h1 class="fst-italic lh-1 mb-4" style="font-family: 'Tinos', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-weight: 700;">Membership</h1>
            <br>
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store_member') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Member</label>
                            <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                        </div>
                        <div class="col">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <input type="number" name="nomor_telepon_member" class="form-control" id="inputEmail3" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender_member" id="gridRadios1" value="perempuan" checked>
                                <label class="form-check-label" for="gridRadios1">
                                Perempuan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender_member" id="gridRadios2" value="laki-laki">
                                <label class="form-check-label" for="gridRadios2">
                                Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputPassword4" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <p>
                                <input type="date" name="tanggal_lahir_member" />
                            </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Provinsi</label>
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Provinsi">
                        </div>
                        <div class="col">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Kabupaten</label>
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kabupaten">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                            <input type="text" name="alamat_member" class="form-control" id="inputEmail3" placeholder="Alamat">
                        </div>
                        <div class="col">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                        <div class="col">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <button type="submit" class="btn btn-primary">Input</button>
                </div>
            </form>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage ">
                <div class="text-center mb-3 mt-2">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms ">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage ">
                <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
            </div>
            </form>
        </div>
</div>
</main>
@endsection