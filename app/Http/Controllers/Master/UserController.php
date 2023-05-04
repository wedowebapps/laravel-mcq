<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Models\User;
use App\Models\Role;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $user = User::with(['RoleName'])->get();
        return view('master.user.index',compact('user'));
    }

 

    

    public function logout() {
		\Auth::logout();
		\Session::flush();
        return Redirect::to('/login');
		// return redirect()->url('/login');
	}

}
