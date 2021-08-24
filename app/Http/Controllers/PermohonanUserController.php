<?php

namespace App\Http\Controllers;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonanuser = Permohonan::all()->where('user_id',Auth::user()->id)-> where('state_id', '1');
        return view('layouts.user.permohonan', compact('permohonanuser'), ['page' => 'Permohonan Dikirim']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $permohonanuser = Permohonan::all()->where('user_id',Auth::user()->id)-> where('state_id', '2');
        return view('layouts.user.diterima', compact('permohonanuser'), ['page' => 'Permohonan Diterima']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->lampiran;
        $idgen = time() . rand(100, 999);
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Permohonan;
        $dtUpload->no_tiket = $idgen;
        $dtUpload->user_id = $request->user_id;
        $dtUpload->state_id = $request->state_id;
        $dtUpload->topik = $request->topik;
        $dtUpload->peruntukan = $request->peruntukan;
        $dtUpload->judul = $request->judul;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->lampiran = $namaFile;
        $dtUpload->progres = $request->progres;

        $nm->move(public_path() . '/lampiran', $namaFile);
        $dtUpload->save();


        return redirect()->route('permohonanuser.index')
            ->with('updatesuccess', 'Permohonan Berhasil Dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
