<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }


    
    public function approve($id){
        $user = User::find($id);

        if(!$user){
            return redirect()->back()->with('error', 'User not Found');
        }

        if($user->is_approved == 1){
            return redirect()->back()->with('error', 'User already approved');
        }

        $user->is_approved = 1;
        $user->save();
        return redirect()->back()->with('success', 'User approved successfully');
    }
}
