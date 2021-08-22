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
        $layaruser = Auth::user();
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
        $layaruser = User::find($id);
        return view('layouts.user.edituser', compact('layaruser'), ['page' => 'Edit User']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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

        return redirect()->route('layaruser.index')
            ->with('updatesuccess', 'Profile Berhasil diupdate');

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
