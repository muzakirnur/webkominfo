<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UserProfile = Auth::user();
        return view('layouts.admin.profile.profile', compact('UserProfile'), ['page' => 'Profile']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $UserProfile = Auth::user($id);
        return view('layouts.admin.profile.editprofile', compact('UserProfile'), ['page' => 'Edit Profile']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $UserProfile)
    {
        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'instansi' => 'required',
            'hp' => 'required',
            'role' => 'required',
            'email' => 'required',
            'profile' => 'required',
        ]);

        Auth::user()->update($request->all());

        return redirect()->route('profile.index')
            ->with('updatesuccess', 'Profile Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
