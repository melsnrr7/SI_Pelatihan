@extends('layouts.app1')
@section('content1')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('peserta_pelatihan.update', $edit->id)}}" method="POST">
            @csrf
            @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    {{-- <input value="{{$edit->jurusan}}" type="text" name="jurusan" class="form-control"> --}}
                    <select name="id_jurusan" id="" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Gelombang</label>
                    {{-- <input type="hidden" name="gelombang" placeholder="Masukkan Gelombang" class="form-control"> --}}
                    {{-- <input type="text" readonly value="{{$gelombang['nama_gelombang']}}>" class="form-control" placeholder="Nama Gelombang"></input>
                    <input type="hidden" name="id_gelombang" value="{{$gelombang['id']}}"> --}}
                    <select name="id_gelombang" id="" class="form-control">
                        <option value="">Pilih Gelombang</option>
                        @foreach ($gelombangs as $gelombang)
                            <option value="{{$gelombang->id}}">{{$gelombang->nama_gelombang}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Lengkap</label>
                    <input value="{{$edit->nama_lengkap}}" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">NIK</label>
                    <input value="{{$edit->nik}}" type="text" name="nik" placeholder="Masukkan NIK Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kartu Keluarga</label>
                    <input value="{{$edit->kartu_keluarga}}" type="text" name="kartu_keluarga" placeholder="Masukkan Kartu Keluarga Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option ">Pilih Jenis Kelamin Anda</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tempat Lahir</label>
                    <input value="{{$edit->tempat_lahir}}" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input value="{{$edit->tanggal_lahir}}" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Pendidikan Terakhir</label>
                    <input value="{{$edit->pendidikan_terakhir}}" type="text" name="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Sekolah</label>
                    <input value="{{$edit->nama_sekolah}}" type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kejuruan</label>
                    <input value="{{$edit->kejuruan}}" type="text" name="kejuruan" placeholder="Masukkan Kejuruan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor Hp</label>
                    <input value="{{$edit->nomor_hp}}" type="text" name="nomor_hp" placeholder="Masukkan Nomor Hp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input value="{{$edit->email}}" type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Aktivitas Saat Ini</label>
                    <input value="{{$edit->aktivitas_saat_ini}}" type="text" name="aktivitas_saat_ini" placeholder="Masukkan Aktivitas Saat Ini Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="">--Pilih Status--</option>
                        <option {{($edit->status == 1) ? 'selected': ''}} value="1">Lolos</option>
                        <option {{($edit->status == 0) ? 'selected': ''}} value="0">Tidak Lolos</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
