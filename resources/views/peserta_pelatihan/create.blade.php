@extends('layouts.app1')
@section('content1')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('peserta_pelatihan.store')}}" method="POST">
            @csrf
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <select name="id_jurusan" id="" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Gelombang</label>
                    <select name="id_gelombang" id="" class="form-control">
                        <option value="">Pilih Gelombang</option>
                        @foreach ($gelombangs as $gelombang)
                            <option value="{{$gelombang->id}}">{{$gelombang->nama_gelombang}}</option>
                        @endforeach
                    </select>
                    {{-- @foreach ($gelombangs as $gelombang)
                        <input type="text" readonly value="{{$gelombang['nama_gelombang']}}" class="form-control" placeholder="Nama Gelombang"></input>
                        <input type="hidden" name="id_gelombang" value="{{$gelombang['id']}}">
                    @endforeach --}}

                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">NIK</label>
                    <input type="text" name="nik" placeholder="Masukkan NIK Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kartu Keluarga</label>
                    <input type="text" name="kartu_keluarga" placeholder="Masukkan Nomor KK Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="">Pilih Jenis Kelamin Anda</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kejuruan</label>
                    <input type="text" name="kejuruan" placeholder="Masukkan Kejuruan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor HP</label>
                    <input type="text" name="nomor_hp" placeholder="Masukkan Nomor HP Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Aktivitas Saat Ini</label>
                    <input type="text" name="aktivitas_saat_ini" placeholder="Masukkan Aktivitas Anda Saat Ini" class="form-control">
                </div>
                {{-- <div class="form-group mb-3">
                    <label for="">Status</label>
                    <input type="number" name="status" placeholder="Masukkan Status" class="form-control">
                </div> --}}
                <input type="hidden" name="status" placeholder="Masukkan Status" class="form-control" value="0">
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
