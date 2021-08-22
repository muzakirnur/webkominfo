<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LayarUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layaruser = User::all();
        return view('layouts.user.akun', compact('layaruser'), ['page' => 'Akun Saya']);
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
        $layaruser = User::all();
        return view('layouts.user.edituser', compact('layaruser'), ['page' => 'Edit User']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $layaruser)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'instansi' => 'required',
            'hp' => 'required|numeric|min:8|max:11',
            'role' => 'required',
            'email' => 'required',
            'profile' => 'required',
        ]);

        $layaruser->update($request->all());

        return redirect()->route('layaruser.index')
            ->with('updatesuccess', 'User Berhasil Diedit');

            //        $request->validate([
          //  'no_tiket' => 'required',
            //'topik' => 'required',
           // 'judul' => 'required',
            //'deskripsi' => 'required',
            //'lampiran' => 'required',
            //'status' => 'required',
            //'progres' => 'required'
        //]);
        //$permohonan->update($request->all());

  //      return redirect()->route('permohonan.index')
     //       ->with('updatesuccess', 'Permohonan Berhasil diupdate');
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
