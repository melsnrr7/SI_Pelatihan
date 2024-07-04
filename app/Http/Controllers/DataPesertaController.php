<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeserta;
use App\Models\PesertaPelatihan;

class DataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = PesertaPelatihan::whereHas('jurusan')->get();
        $title = "Data Peserta";
        return view('data_peserta.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $edits = PesertaPelatihan::find($id);
        // $title = "Edit Data " . $edit->nama_lengkap;
        return view('data_peserta.edit', compact('edits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peserta = PesertaPelatihan::find($id);
        if (!$peserta) {
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan']);
        }

        $peserta->status = $request->status;

        // Simpan perubahan
        $peserta->save();

        return redirect()->to('data_peserta')->with('message', 'Status peserta berhasil diubah');
        // PesertaPelatihan::where('id', $id)->update([
        //     'status' => $request->status,
        // ]);

        // return redirect()->to('data_peserta')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
