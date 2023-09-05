<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\T2Aphp;

class T2AphpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t2aphp = T2Aphp::latest()->paginate(10);
        return view('Tingkat2.jurusan.aphp', compact('t2aphp'));
    }

    public function cetakAphp()
    {
        $cetakT2aphp = T2Aphp::latest()->get();
        return view('Tingkat2.cetak.cetak-aphp', compact('cetakT2aphp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tingkat2.jurusan.aphp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        T2Aphp::create ([
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

        return redirect()->route('T2Aphp.index')->with('success', 'Data Berhasil Disimpan');
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
        $t2aphp = T2Aphp::findorfail($id);
        return view('Tingkat2.edit.aphp-edit', compact('t2aphp'));
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
        $t2aphp = T2Aphp::findorfail($id);
        $t2aphp->update($request->all());
        return redirect()->route('T2Aphp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t2aphp = T2Aphp::findorfail($id);
        $t2aphp->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
