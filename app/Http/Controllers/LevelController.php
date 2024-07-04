<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Level::get();
        $title = "Data Level";
        return view('levels.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Level";
        return view('levels.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Level::create([
            'nama_level' => $request->nama_level,
        ]);

        return redirect()->to('level')->with('message', 'Data berhasil ditambah');
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
        $edit = Level::find($id);
        $title = "Edit Data " . $edit->nama_level;
        return view('levels.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Level::where('id', $id)->update([
            'nama_level' => $request->nama_level,
        ]);

        return redirect()->to('level')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Level::where('id', $id)->delete();
        return redirect()->to('level')->with('message', 'Data berhasil dihapus');
    }

    // Method untuk mengembalikan data yang sudah dihapus
    // public function restore($id)
    // {
    //     // Mengambil data yang telah dihapus dengan ID yang diberikan
    //     // $level = Level::withTrashed()->find($id);
    //     $level = Level::withTrashed()->find(1);
    //     $level->restore();

    //     if ($level) {
    //         // Mengembalikan data yang telah dihapus
    //         $level->restore();

    //         return response()->json(['message' => 'Data restored successfully.']);
    //     }

    //     return response()->json(['message' => 'Data not found.'], 404);
    // }
}
