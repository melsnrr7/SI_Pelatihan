@extends('layouts.app1')
@section('content1')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('jurusan.store')}}" method="POST">
            @csrf
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input type="text" name="nama_jurusan" placeholder="Masukkan Jurusan" class="form-control">
                </div>
                
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
