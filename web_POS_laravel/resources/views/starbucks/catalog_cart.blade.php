@extends('starbucks.catalog_menu')

@section('cart')
    <button type="button" class="btn btn-dark" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Order
    </button>
    <!-- Modal -->
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
            <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
    <div class="modal fade" id="exampleModal modal_result" tabindex="-1 " aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="size: 2px;">Sumamry Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-25">
                        <div class="container">
                            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                            <!-- <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                            <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                            <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                            <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                            <hr>
                            <p>Total <span class="price" style="color:black"><b>$30</b></span></p> -->
                            <table>
                                <thead>
                                    <tr>
                                        <th width="10px">ID Menu</th>
                                        <th width="100px">Menu</th>
                                        <th width="100px">Kuantitas</th>
                                        <th width="100px">Harga</th>
                                        <th width="100px">Remove</th>
                                    </tr>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td><p>{{ $item -> id_menu }}</p></td>
                                                <td><p>{{ $item -> nama_menu }}</p></td>
                                                <td><p>{{ $item -> quantity }}</p></td>
                                                <td><p>{{ $item -> harga_menu }}</p></td>
                                                <td>
                                                    <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button class="px-4 py-2 text-white bg-red-600">x</button>
                                                    </form>
                                                </td>
                                                <!-- <input type="hidden" value="{{ $row -> id_menu }}" name="id_menu">
                                                <input type="hidden" value="{{ $row -> nama_menu }}" name="nama_menu">
                                                <input type="hidden" value="{{ $row -> jenis_menu }}" name="jenis_menu">
                                                <input type="hidden" value="{{ $row -> harga_menu }}"  name="harga_menu"> -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div>
                        Total: ${{ Cart::getTotal() }}
                    </div>
                    <div>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                        </form>
                    </div>
                    <!-- === PEMBAYARAN === -->
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("hideDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection