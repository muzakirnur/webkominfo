<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $data1 = DB::table('permohonans')->get()->where('state_id', '1')->count();
        $data2 = DB::table('permohonans')->get()->where('state_id', '2')->count();
        $data3 = DB::table('permohonans')->get()->where('state_id', '3')->count();
        $data4 = DB::table('permohonans')->get()->where('state_id', '4')->count();
        $data5 = DB::table('permohonans')->get()->where('state_id', '5')->count();
        $dataUser = DB::table('users')->count();
        $user = Auth::user();
        return view('layouts.admin.dashboard', compact('user', 'data1', 'data2', 'data3', 'data4', 'data5', 'dataUser'), ['page' => 'Dashboard']);
    }
}
