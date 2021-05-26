<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('adminpage.profile', compact('user'));
    }
    public function changeProfile(Request $request)
    {
        $request->validate([
            'name'      => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->save();
        return redirect('/admin/profile')->with('status', 'Profile updated!');
        // return view('adminpage.profile', compact('user'));
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect('/admin/profile')->with('status', 'Password change successfully');
        
    }
}
