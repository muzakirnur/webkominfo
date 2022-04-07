<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\State;
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
        $states = State::all();
        $permohonan = Permohonan::find($id);
        return view('layouts.admin.pedit', compact('permohonan', 'states'), ['page' => 'Edit']);
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
        $validated = $request->validate([
            'state_id' => 'required',
            'progres' => 'required'
        ]);
        Permohonan::find($id)->update($validated);
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

    public function masuk()
    {
        $permohonan = Permohonan::latest()->paginate(5)->where('state_id', '1');
        return view('layouts.admin.permohonans.masuk', compact('permohonan'), ['page' => 'Permohonan Masuk'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function diterima()
    {
        $permohonan = Permohonan::latest()->paginate(5)->where('state_id', '2');
        return view('layouts.admin.permohonans.diterima', compact('permohonan'), ['page' => 'Permohonan Diterima'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function diproses()
    {
        $permohonan = Permohonan::latest()->paginate(5)->where('state_id', '3');
        return view('layouts.admin.permohonans.diproses', compact('permohonan'), ['page' => 'Permohonan Diproses'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function ditolak()
    {
        $permohonan = Permohonan::latest()->paginate(5)->where('state_id', '4');
        return view('layouts.admin.permohonans.ditolak', compact('permohonan'), ['page' => 'Permohonan Ditolak'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function selesai()
    {
        $permohonan = Permohonan::latest()->paginate(5)->where('state_id', '5');
        return view('layouts.admin.permohonans.masuk', compact('permohonan'), ['page' => 'Permohonan Selesai'])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
