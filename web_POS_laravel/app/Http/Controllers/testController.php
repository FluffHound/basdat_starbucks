<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
	
	public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
		$member_email = $credentials['email'];
		echo $member_email;
        if (Auth::attempt($credentials)) {
			echo $member_email;
            //return redirect()->intended('dashboard')
            //            ->withSuccess('Signed in')
			//			->with('data', ('credentials'));
			if ($member_email == 'bebebcantik@gmail.com') {
				return view('auth.dashboard_bebeb', compact('member_email'));
			} elseif ($member_email == 'simanager@gmail.com') {
				return view('auth.dashboard_manager', compact('member_email'));
			}
        }
  
        //return redirect("login")->withSuccess('Login details are not valid');
    }
	
	public function registration()
    {
        return view('auth.registration');
    }
	
	public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
	
	public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
	
	public function dashboard()
    {
		$member_list = Auth::user();
		if (!is_null($member_list)){
			$member_email = $member_list['email'];
		}
		
		if ($member_email = 'bebebcantik@gmail.com'){
				return view('auth.dashboard_bebeb', compact('member_email', 'credentials'));
				echo $member_list[$email];
			} elseif ($member_email = 'simanager@gmail.com'){
				return view('auth.dashboard_manager', compact('member_email'));
				echo $member_list[$email];
			}
		
        //if(Auth::check()){
		//	if ($member_email = 'bebebcantik@gmail.com'){
		//		return view('auth.dashboard_bebeb', compact('member_email'));
		//		echo $member_list[$email];
		//	} elseif ($member_email = 'simanager@gmail.com'){
		//		return view('auth.dashboard_manager', compact('member_email'));
		//		echo $member_list[$email];
		//	} 
        //}
  
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
	
	public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
