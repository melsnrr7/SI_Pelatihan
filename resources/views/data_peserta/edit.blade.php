@extends('layouts.app2')
@section('content2')
<div class="card">
    <div class="card-header"></div>
        <div class="card-body">
            <form action="{{route('data_peserta.update', $edits->id)}}" method="POST">
            @csrf
            @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="">--Pilih Status--</option>
                        <option {{($edits->status == 1) ? 'selected': ''}} value="1">Lolos</option>
                        <option {{($edits->status == 0) ? 'selected': ''}} value="0">Tidak Lolos</option>
                    </select>
                    {{-- <input value="{{$edits->status}}" type="text" name="status" placeholder="Masukkan Nama Lengkap Anda" class="form-control"> --}}
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
