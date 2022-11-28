<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\starbucks_catalog_model;
use App\Models\starbucks_order_model;
use App\Models\starbucks_membership_model;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
		$user_creds = Auth::user();
		if (!is_null($user_creds)){
			$user_username 	= $user_creds['name'];
			$user_id		= $user_creds['id'];
		}
		
        $cartItems = \Cart::getContent();
		$catalog_list = starbucks_catalog_model::all();
        // dd($cartItems);
		// print_r(starbucks_catalog_model::orderBy('kode_produk','desc') -> limit(1) -> get());
		// print_r(starbucks_order_model::orderBy('id_pemesanan','desc') -> limit(1) -> get() -> value('nama_pelanggan'));
        return view('starbucks.catalog_list', compact('cartItems', 'catalog_list', 'user_username', 'user_id'));
		// print_r(starbucks_membership_model::where('id_member', 6) -> get() -> value('saldo'));
    }

    public function addToCart(Request $request)
    {	
        \Cart::add([
            'id' => $request->kode_produk,
            'name' => $request->nama_produk,
            // 'jenis_menu' => $request->jenis_menu,
            'quantity' => $request->quantity,
            'price' => $request->harga,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
		// echo ($request);
		// $cartItems = \Cart::getContent();
		// echo $cartItems;
		// foreach($cartItems as $row) {
			// echo $row->id;
			// echo $row->name;
			// echo $row->quantity;
			// echo $row->price;
		// }

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->kode_produk,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
	
	public function checkout(Request $request)
    {
        $cartItems = \Cart::getContent();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
