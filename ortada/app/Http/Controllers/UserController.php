<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function postSignup(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'email|required|unique:users',
            'phone' => 'required|min:11',
            'password' => 'required|min:4',
            'city' => 'required'
        ]);

        $user = new User([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'phone' => $request -> input('phone'),
            'password' => bcrypt($request->input('password')),
            'city' => $request -> input('city'),
        ]);

        $user->save();

        Auth::login($user);

        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('events');
    }

    public function postSignin(Request $request){
        $this->validate($request,[
            'email' => 'email | required',
            'password' => 'required | min:4'
        ]);

        if (Auth::attempt(['email' => $request -> input('email'),'password' => $request -> input('password')])){

            return redirect()->route('events');
        }
        return redirect()->back();
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route("user.signin");
    }

    public function userdestroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin-view')->with('success', 'User deleted.');;
    }

    public function getProfile(){
        return view('profile');
    }


}
