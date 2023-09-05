<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\T3Tpm;

class T3TpmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t3tpm = T3Tpm::latest()->paginate(10);
        return view('Tingkat3.jurusan.tpm', compact('t3tpm'));
    }

    public function cetakTpm()
    {
        $cetakT3tpm = T3Tpm::latest()->get();
        return view('Tingkat3.cetak.cetak-tpm', compact('cetakT3tpm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tingkat3.jurusan.tpm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        T3Tpm::create ([
            'tanggal1' => $request->tanggal1,
            'nama' => $request->nama,
            'nominal' => $request->nominal,
            'pembayaran1' => $request->pembayaran1,
            'sisa1' => $request->sisa1,
            'tanggal2' => $request->tanggal2,
            'pembayaran2' => $request->pembayaran2,
            'sisa2' => $request->sisa2,
            'tanggal3' => $request->tanggal3,
            'pembayaran3' => $request->pembayaran3,
            'sisa3' => $request->sisa3,
            'tanggal4' => $request->tanggal4,
            'pembayaran4' => $request->pembayaran4,
            'sisa4' => $request->sisa4,
            'tanggal5' => $request->tanggal5,
            'pembayaran5' => $request->pembayaran5,
            'sisa5' => $request->sisa5,
            
        ]);

        return redirect()->route('T3Tpm.index')->with('success', 'Data Berhasil Disimpan');
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
        $t3tpm = T3Tpm::findorfail($id);
        return view('Tingkat3.edit.tpm-edit', compact('t3tpm'));
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
        $t3tpm = T3Tpm::findorfail($id);
        $t3tpm->update($request->all());
        return redirect()->route('T3Tpm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t3tpm = T3Tpm::findorfail($id);
        $t3tpm->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
