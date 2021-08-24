<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $dt1 = DB::table('permohonans')->get()->where('user_id',Auth::user()->id)-> where('state_id', '1')->count();
        $dt2 = DB::table('permohonans')->get()->where('user_id',Auth::user()->id)-> where('state_id', '2')->count();
        $dt3 = DB::table('permohonans')->get()->where('user_id',Auth::user()->id)-> where('state_id', '3')->count();
        $dt4 = DB::table('permohonans')->get()->where('user_id',Auth::user()->id)-> where('state_id', '4')->count();
        $dt5 = DB::table('permohonans')->get()->where('user_id',Auth::user()->id)-> where('state_id', '5')->count();
        $dataUser = DB::table('users')->count();
        $user = Auth::user();
        return view('layouts.user.dashboard', compact('user', 'dt1', 'dt2', 'dt3', 'dt4', 'dt5') , ['page' => 'Dashboard User']);
    }

    
}
