<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\User;
use Illuminate\Http\Request;


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
        return view('layouts.admin.permohonan', compact('permohonan', 'dikirim'), ['page' => 'Permohonan'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //$tampil = Permohonan::all();
        //return view('layouts.admin.permohonan', ['tampil' => $tampil, 'page' => 'Permohonan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function awal()
    {
        $tampil = Permohonan::all();
        return view('layouts.user.permohonan', ['tampil' => $tampil, 'page' => 'Permohonan User']);
    }

    public function create()
    {
        $tampil = Permohonan::all();
        return view('layouts.user.tambah', ['tampil' => $tampil, 'page' => 'Tambah Permohonan']);
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
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Permohonan;
        $dtUpload->no_tiket = $request->no_tiket;
        $dtUpload->user_id = $request->user_id;
        $dtUpload->topik = $request->topik;
        $dtUpload->judul = $request->judul;
        $dtUpload->deskripsi = $request->deskripsi;
        $dtUpload->lampiran = $namaFile;
        $dtUpload->status = $request->status;
        $dtUpload->progres = $request->progres;

        $nm->move(public_path() . '/lampiran', $namaFile);
        $dtUpload->save();


        return redirect()->back();
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
