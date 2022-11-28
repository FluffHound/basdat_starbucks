<?php

namespace App\Http\Controllers;

use App\Models\userStarbucks;
use App\Models\starbucks_order_model;
use App\Models\starbucks_orderdetail_model;
use App\Models\starbucks_catalog_model;
use App\Models\starbucks_membership_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class starbucks_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function testzone()
    {
		return view('starbucks.testzone');
    }

    // LOGIN SYSTEM ======================================================================================================
    public function login()
    {
		return view('starbucks.index');
    }
    
    public function customLogin(Request $request)
    {
		$request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request -> only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()   -> intended('dashboard')
                                -> withSuccess('Signed in');
        } else {
            return redirect("login") -> withSuccess('Login details are not valid');
        }
    }

    public function dashboard()
    {
        $member_list = starbucks_membership_model::paginate(5);

        // Username pattern per role
        $pattern_man    = "/man/";
        $pattern_kas    = "/kas/";
        $pattern_user   = "/user/";
        $pattern_min    = "/min/";

        $user_creds = Auth::user();
		if (!is_null($user_creds)){
			$user_username = $user_creds['username'];
		}

        if(Auth::check()){
            if (preg_match($pattern_man, $user_username)) {
                // return view('starbucks.member_list', compact('member_list'))->with('i', (request()->input('page', 1) - 1) * 5);
                return redirect('manager');
            } elseif (preg_match($pattern_kas, $user_username)) {
                return redirect('catalog');
            } elseif (preg_match($pattern_user, $user_username)) {
                echo 'NO PAGE YET';
            } elseif (preg_match($pattern_min, $user_username)) {
                echo 'NO PAGE YET';
            } else {
                return redirect("login")->withSuccess('You are not allowed to access');
            }
        }
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    // ================================================================================================== LOGIN SYSTEM

    // REGISTRATION SYSTEM ===========================================================================================
    public function registration()
    {
        return view('starbucks.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name'      => 'required|string',
            'username'  => 'required|string|unique:users',
            'password'  => 'required|min:3',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return userStarbucks::create([
        'name'      => $data['name'],
        'username'  => $data['username'],
        'password'  => Hash::make($data['password'])
      ]);
    }
    // ========================================================================================== REGISTRATION SYSTEM

    // MEMBERSHIP ==================================================================================================
    public function member_input()
    {
		return view('starbucks.member_input');
    }

    public function member_list()
    {
        $member_list = starbucks_membership_model::paginate(5);
		return view('starbucks.member_list', compact('member_list'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // ================================================================================================== MEMBERSHIP

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function member_input(Request $request)
    // {
    //     $request->validate([
	// 		'nama_member' => 'required',
	// 		'gender_member' => 'required',
	// 		'nomor_telepon_member' => 'required',
	// 		'alamat_member' => 'required',
	// 		'tanggal_lahir_member' => 'required',
	// 	]);
		
	// 	starbucks_membership_model::create($request->post());
		
	// 	return redirect()->route('starbucks.index')->with('success', 'Member data has been inserted successfully.');
    // }
    
    // STORE DATA ==================================================================================================
    public function store_member(Request $request)
    {
        $request->validate([
            'nama'           => 'required',
            'gender_member'         => 'required',
            'nomor_telepon_member'  => 'required',
            'alamat_member'         => 'nullable',
            'tanggal_lahir_member'  => 'required',
            'email'                 => 'required',
            'username'              => 'required',
            'password'              => 'required',
        ]);

        $member = new starbucks_membership_model;
        $member -> nama                 = $request -> nama;
        $member -> jenis_kelamin        = $request -> gender_member;
        $member -> nomor_telepon        = $request -> nomor_telepon_member;
        $member -> alamat               = $request -> alamat_member;
        $member -> tanggal_lahir        = $request -> tanggal_lahir_member;
        $member -> email                = $request -> email;
        $member -> username             = $request -> username;
        $member -> password             = Hash::make($request->password);
        $member -> save();

        return redirect('catalog')->with('success', 'Data member telah berhasil diinput');
    }

    public function store_order(Request $request)
    {
        $request->validate([
            'id_member'         => 'nullable|int',
            'id_karyawan'       => 'required',
            'tipe_pembayaran'   => 'required',
            'nama_pelanggan'    => 'required|string',
        ]);

        // $variabel = starbucks_membership_model::get();

        if ($request -> tipe_pembayaran == 'member') {
            if (is_null($request -> id_member)) {
                // session()->flash('success', 'Jenis pembayaran tidak valid');
                return redirect()->route('cart.list')->with('error', 'Jenis pembayaran tidak valid');
            } else {
                starbucks_membership_model::where('id_member', $request -> id_member)
                -> decrement('saldo', \Cart::getTotal());
            }

            if (starbucks_membership_model::where('id_member', 6) -> get() -> value('saldo') < \Cart::getTotal()) {
                return redirect()->route('cart.list') -> with('error', 'Saldo member tidak mencukupi');
            }
        }

        $cartItems = \Cart::getContent();

        // Input to pemesanan
        $order = new starbucks_order_model;
        $order -> id_member_fk      = $request -> id_member;
        $order -> id_karyawan_fk    = $request -> id_karyawan;
        $order -> tipe_pembayaran   = $request -> tipe_pembayaran;
        $order -> nama_pelanggan    = $request -> nama_pelanggan;
        $order -> save();

        $id_pemesanan = starbucks_order_model::orderBy('id_pemesanan','desc') -> limit(1) -> get() -> value('id_pemesanan');

        // Input to detail_pemesanan
        foreach ($cartItems as $item) {
            $orderdetail = new starbucks_orderdetail_model;
            $orderdetail -> id_pemesanan_fk     = $id_pemesanan;
            $orderdetail -> kode_produk_fk      = $item -> id;
            $orderdetail -> jumlah_pembelian    = $item -> quantity;
            $orderdetail -> save();
        }

        // Hapus semua isi keranjang
        \Cart::clear();

        session()->flash('success', 'Produk telah berhasil dicheckout!');
        return redirect()->route('cart.list');
    }
    // ================================================================================================== STORE DATA

    // MANAGER ============================================================================================
    public function manager()
    {
		$user_creds = Auth::user();
		if (!is_null($user_creds)){
			$user_username 	= $user_creds['name'];
			$user_id		= $user_creds['id'];
		}

        $data_toko = DB::table('toko') -> get();
        $data_karyawan = DB::table('data_karyawan') -> get();
        $data_produk = DB::table('produk') -> get();
        $total_penjualan = DB::table('detail_pemesanan')
                            ->select('kode_produk_fk', DB::raw('SUM(jumlah_pembelian) as total_pembelian'))
                            ->groupByRaw('kode_produk_fk')
                            ->get();
		
        return view('starbucks.manager', compact('user_username', 'user_id', 'data_toko', 'data_karyawan', 'data_produk', 'total_penjualan'));
    }

    public function store_karyawan(Request $request)
    {
        $request->validate([
            'nama'           => 'required',
            'gender_member'         => 'required',
            'nomor_telepon_member'  => 'required',
            'alamat_member'         => 'nullable',
            'tanggal_lahir_member'  => 'required',
            'email'                 => 'required',
            'username'              => 'required',
            'password'              => 'required',
        ]);

        $member = new starbucks_membership_model;
        $member -> nama                 = $request -> nama;
        $member -> jenis_kelamin        = $request -> gender_member;
        $member -> nomor_telepon        = $request -> nomor_telepon_member;
        $member -> alamat               = $request -> alamat_member;
        $member -> tanggal_lahir        = $request -> tanggal_lahir_member;
        $member -> email                = $request -> email;
        $member -> username             = $request -> username;
        $member -> password             = Hash::make($request->password);
        $member -> save();

        return redirect('catalog')->with('success', 'Data member telah berhasil diinput');
    }
    // =============================================================================================MANAGER
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(starbucks_membership_model $membership)
    {
        return view('show', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(starbucks_membership_model $membership)
    {
        return view('edit', compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(starbucks_membership_model $membership)
    {
        $membership->delete();

        return redirect()->route('starbucks.login')->with('success', 'Member data deleted successfully');
    }
}
