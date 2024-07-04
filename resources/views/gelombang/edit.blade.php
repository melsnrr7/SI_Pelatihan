@extends('layouts.app1')
@section('content1')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('gelombang.update', $edit->id)}}" method="POST">
            @csrf
            @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Gelombang</label>
                    <input value="{{$edit->nama_gelombang}}" type="text" name="nama_gelombang" placeholder="Masukkan Gelombang" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Aktif</label>
                    {{-- <input value="{{ $edit->aktif }}" type="number" name="aktif" placeholder="Masukkan Status Gelombang" class="form-control"> --}}
                    <select name="aktif" id="" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="1" {{$edit['aktif'] == 1}} ? 'selected' : '' >Aktif</option>
                        <option  value="0" {{$edit['aktif'] == 0}} ? 'selected' : '' >Tidak Aktif</option>
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
