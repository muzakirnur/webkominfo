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
        $tampil = Permohonan::all();
        return view('layouts.admin.permohonan', ['tampil' => $tampil, 'page' => 'Permohonan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function akun()
    {
        $tampil = Permohonan::all();
        return view('layouts.user.akun', ['tampil' => $tampil, 'page' => 'Akun Saya']);

    }

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
        Permohonan::create([
            'no_tiket' => request('no_tiket'),
            'topik' => request('topik'),
            'judul' => request('judul'),
            'deskripsi' => request('deskripsi'),
            'lampiran' => request('lampiran'),
            'status' => request('status'),
            'progres' => request('progres'),
        ]);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permohonan = Permohonan::findorfail($id);
        return view('layouts.admin.pedit', compact('permohonan'), ['page' => 'Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permohonan = Permohonan::find($id)->update($request->all());

        return redirect()->route('index')->with('success', ' Data telah diperbaharui!');
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
