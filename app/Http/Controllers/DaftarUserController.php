<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DaftarUser = User::latest()->paginate(5);
        return view('layouts.admin.users', ['page' => 'Daftar User'], compact('DaftarUser'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $DaftarUser = User::find($id);
        return view('layouts.admin.detailuser', compact('DaftarUser'), ['page' => 'Detail User']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DaftarUser = User::find($id);
        return view('layouts.admin.useredit', compact('DaftarUser'), ['page' => 'Edit User']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $DaftarUser)
    {
        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'instansi' => 'required',
            'hp' => 'required|numeric|min:8|max:11',
            'role' => 'required',
            'email' => 'required',
            'profile' => 'required',
        ]);

        $DaftarUser->update($request->all());

        return redirect()->route('daftaruser.index')
            ->with('updatesuccess', 'User Berhasil diupdate');

        // $request->validate([
        //     'id' => 'required',
        //     'name' => 'required',
        //     'nip' => 'required',
        //     'jabatan' => 'required',
        //     'instansi' => 'required',
        //     'hp' => 'required',
        //     'role' => 'required',
        //     'email' => 'required',
        //     'profile' => 'required'
        // ]);
        // return redirect()->route('daftaruser.index')
        //     ->with('success', 'User Berhasil diupdate');
        // $DaftarUser->update($request->all());

        // return redirect()->route('daftaruser.index')
        //     ->with('success', 'User Berhasil di Edit');
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
    
    public function tampil()
    {
        $tampil = User::all();
        return view('layouts.user.edituser', ['tampil' => $tampil, 'page' => 'Edit User']);
    }

    public function akun()
    {
        $tampil = User::all();
        return view('layouts.user.akun', ['tampil' => $tampil, 'page' => 'Akun Saya']);
    }


}
