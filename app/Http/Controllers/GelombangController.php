<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Gelombang::get();
        $title = "Data Gelombang";
        return view('gelombang.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $title = "Tambah Gelombang";
        return view('gelombang.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gelombang::create([
            'nama_gelombang' => $request->nama_gelombang,
        ]);

        return redirect()->to('gelombang')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Gelombang::find($id);
        $title = "Edit Data " . $edit->nama_gelombang;
        return view('gelombang.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gelombang::where('id', $id)->update([
            'nama_gelombang' => $request->nama_gelombang,
            'aktif' => $request->aktif,
        ]);

        return redirect()->to('gelombang')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gelombang::where('id', $id)->delete();
        return redirect()->to('gelombang')->with('message', 'Data berhasil dihapus');
    }
}
