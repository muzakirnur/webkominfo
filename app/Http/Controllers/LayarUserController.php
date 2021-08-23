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

            $nm = $request->profile,
            $namaFile = $nm->getClientOriginalName(),
        ]);

        Auth::user()->update($request->all());
        $nm->move(public_path().'/user',$namaFile);

        return redirect()->route('layaruser.index')
            ->with('updatesuccess', 'Profile Berhasil diupdate');

    
            //     $dtUpload = new Permohonan;
            //     $dtUpload->no_tiket = $idgen;
            //     $dtUpload->user_id = $request->user_id;
            //     $dtUpload->state_id = $request->state_id;
            //     $dtUpload->topik = $request->topik;
            //     $dtUpload->judul = $request->judul;
            //     $dtUpload->deskripsi = $request->deskripsi;
            //     $dtUpload->lampiran = $namaFile;
            //     $dtUpload->progres = $request->progres;
    
            //     $nm->move(public_path().'/lampiran',$namaFile);
            //     $dtUpload->save();
    
    
            // return redirect()->route('permohonanuser.index')
            //     ->with('updatesuccess', 'Permohonan Berhasil Dikirim');
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
