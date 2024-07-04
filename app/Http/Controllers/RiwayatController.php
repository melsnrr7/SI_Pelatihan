<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\PesertaPelatihan;
use Illuminate\Http\Request;
use App\Models\Riwayat;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datas = Riwayat::get();
        // $title = "Data Riwayat";
        // return view('riwayat.index', compact('datas', 'title'));

        // $datas = PesertaPelatihan::whereHas('gelombang', function ($query) {
        //     $query->where('aktif', 0);
        // })
        //     ->selectRaw('YEAR(created_at) as tahun_created')
        //     ->distinct()
        //     ->get();

        $datas = DB::table('peserta_pelatihans')
            ->join('jurusans', 'peserta_pelatihans.id_jurusan', '=', 'jurusans.id')
            ->join('gelombangs', 'peserta_pelatihans.id_gelombang', '=', 'gelombangs.id')
            ->where('gelombangs.aktif', 0)
            ->select('peserta_pelatihans.*', 'jurusans.nama_jurusan', 'gelombangs.nama_gelombang')
            ->get();



        $title = 'Riwayat Peserta Pelatihan';
        $desc = 'Data-data peserta akan ditampilkan per-tahun';

        return view('riwayat.index', compact('datas', 'title', 'desc'));

        // $jurusan = Jurusan::find($idJurusan);
        // if (!$jurusan) {
        //     return redirect()->back()->with('error', 'Jurusan tidak ditemukan');
        // }

        // // Mengambil data participants yang tidak aktif berdasarkan jurusan dengan pagination
        // $datas = PesertaPelatihan::join('jurusans', 'participants.id_jurusan', '=', 'jurusans.id')
        //     ->join('gelombangs', 'participants.id_gelombang', '=', 'gelombangs.id')
        //     ->where('gelombangs.aktif', 0)
        //     ->where('participants.id_jurusan', $idJurusan)
        //     ->whereYear('participants.created_at', $tahun)
        //     ->select('participants.*', 'jurusans.nama_jurusan', 'gelombangs.nama_gelombang') // Tambahkan kolom lain jika diperlukan
        //     ->paginate(10); // Ganti dengan jumlah item per halaman yang diinginkan

        // return view('riwayat.index', compact('datas'));
    }

    // public function gelombang1()
    // {
    //     $gelombang = Gelombang::where('nama_gelombang', 'Gelombang 1')->where('aktif', 0)->first();
    //     $datas = $gelombang ? $gelombang->peserta_pelatihan : collect();
    //     $jurusans = Jurusan::all();

    //     return view('riwayat.gelombang1', compact('datas', 'jurusans'));
    // }
    // public function gelombang2()
    // {
    //     $gelombang = Gelombang::where('nama_gelombang', 'Gelombang 2')->where('aktif', 0)->first();
    //     $datas = $gelombang ? $gelombang->peserta_pelatihan : collect();
    //     $jurusans = Jurusan::all();

    //     return view('riwayat.gelombang2', compact('datas', 'jurusans'));
    // }
    // public function gelombang3()
    // {
    //     $gelombang = Gelombang::where('nama_gelombang', 'Gelombang 3')->where('aktif', 0)->first();
    //     $datas = $gelombang ? $gelombang->peserta_pelatihan : collect();
    //     $jurusans = Jurusan::all();

    //     return view('riwayat.gelombang3', compact('datas', 'jurusans'));
    // }
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
        // $gelombang = Gelombang::get();

        // $jurusanList = Jurusan::all();
        // $gelombangModel = Gelombang::where('nama_gelombang', $gelombang)->where('aktif', 0)->firstOrFail();
        // $pesertas = PesertaPelatihan::whereHas('gelombang', function ($query) use ($gelombang) {
        //     $query->where('nama_gelombang', $gelombang);
        // })->whereYear('created_at', $tahun)->get();

        // return view('riwayat.show', compact('gelombangModel', 'pesertas', 'tahun', 'jurusanList'));

        //Ambil data jurusans
        $jurusans = DB::table('jurusans')->get();

        // Kirim variabel $tahun_created ke view
        return view('riwayat.show', compact('jurusans', 'tahun_created'));
    }

    // public function filter(Request $request, $gelombang, $tahun){
    //     $gelombangModel = Gelombang::where('nama_gelombang', $gelombang)->where('aktif', 0)->firstOrFail();
    //     $jurusanList = Jurusan::all();

    //     $query = PesertaPelatihan::whereHas('gelombang', function ($query) use ($gelombang) {
    //         $query->where('nama_gelombang', $gelombang);
    //     })->whereYear('created_at', $tahun)->get();

    //     if ($request->has('search') && $request->search != '') {
    //         $query->where('nama_lengkap', 'like', '%' . $request->search . '%');
    //     }

    //     if ($request->has('jurusan') && $request->jurusan != '') {
    //         $query->where('id_jurusan', $request->jurusan);
    //     }

    //     $pesertas = $query->get();

    //     return view('riwayat.show', compact('gelombangModel', 'pesertas', 'tahun', 'jurusanList'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
