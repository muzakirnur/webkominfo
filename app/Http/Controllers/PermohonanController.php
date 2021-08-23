<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $permohonan = Permohonan::latest()->paginate(5);
        return view('layouts.admin.permohonan', compact('permohonan'), ['page' => 'Permohonan'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //$tampil = Permohonan::all();
        //return view('layouts.admin.permohonan', ['tampil' => $tampil, 'page' => 'Permohonan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $permohonan = Permohonan::all();
        return view('layouts.user.tambah', compact('permohonan'), ['page' => 'Tambah Permohonan']);
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
        $idgen = time().rand(100,999);
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Permohonan;
        $dtUpload->no_tiket = $idgen;
        $dtUpload->user_id = $request->user_id;
        $dtUpload->topik = $request->topik;
        $dtUpload->judul = $request->judul;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->lampiran = $namaFile;
        $dtUpload->state_id = $request->state_id;
        $dtUpload->progres = $request->progres;

        $nm->move(public_path() . '/lampiran', $namaFile);
        $dtUpload->save();


        return redirect()->route('permohonanuser.index')
            ->with('updatesuccess', 'Permohonan Berhasil Dikirim');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permohonan = Permohonan::find($id);
        return view('layouts.admin.detailpermohonan', compact('permohonan'), ['page' => 'Detail Permohonan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permohonan = Permohonan::find($id);
        return view('layouts.admin.pedit', compact('permohonan'), ['page' => 'Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        $request->validate([
            'no_tiket' => 'required',
            'topik' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'lampiran' => 'required',
            'status' => 'required',
            'progres' => 'required'
        ]);
        $permohonan->update($request->all());

        return redirect()->route('permohonan.index')
            ->with('updatesuccess', 'Permohonan Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
