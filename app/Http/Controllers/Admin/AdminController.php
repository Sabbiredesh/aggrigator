<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.home');
    }
    public function profile($auth_id)
    {

        $user=User::where('id',$auth_id)->first();
        return view('admin.profile',compact('user'));
    }
}
