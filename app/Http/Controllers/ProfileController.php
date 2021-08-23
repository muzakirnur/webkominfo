<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\File\File;

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
        // $nm = $request->file('profile');
        // $namaFile = $nm->getClientOriginalName();

        // $request->validate([
        //     'name' => 'required',
        //     'nip' => 'required',
        //     'profile' => 'required',
        //     'jabatan' => 'required',
        //     'instansi' => 'required',
        //     'hp' => 'required',
        //     'role' => 'required',
        //     'email' => 'required',
        // ]);

        // $nm->move(public_path() . '/img/user', $namaFile);
        // Auth::user()->update($request->all());

        $nm = $request->profile;
        $namaFile = $nm->getClientOriginalName();

        $UserProfile = Auth::user();
        $UserProfile->name = $request->name;
        $UserProfile->nip = $request->nip;
        $UserProfile->profile = $namaFile;
        $UserProfile->jabatan = $request->jabatan;
        $UserProfile->instansi = $request->instansi;
        $UserProfile->hp = $request->hp;
        $UserProfile->role = $request->role;
        $UserProfile->email = $request->email;

        $nm->move(public_path() . '/img/user', $namaFile);
        $UserProfile->update();

        return redirect()->route('profile.index')
            ->with('updatesuccess', 'Profile Berhasil diupdate', compact('UserProfile'));
    }

    public function passwordIndex(Request $request)
    {
        // $DaftarUser = Auth::user();

        // $request->validate([
        //     'password' => 'required'
        // ]);

        return view('layouts.admin.setting.setting', ['page' => 'Edit Password']);
    }

    public function passwordUpdate(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Auth::user()->update($validatedData);

        return redirect()->intended('/home');;
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
