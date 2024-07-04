@extends('layouts.app2')
@section('content2')
<div class="card">
    <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div class="table-responsive">
                <div align="right" class="mb-3">
            </div>
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Nomor Hp</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data )

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $data->jurusan->nama_jurusan}}</td>
                        <td>{{$data->nama_lengkap}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->pendidikan_terakhir}}</td>
                        <td>{{$data->nomor_hp}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            @php
                            if ($data->status == 0) {
                                $status  =  'Peserta Tidak lolos';
                            }else if($data->status == 1){
                                $status = 'Peserta Lolos';
                            }
                            @endphp
                         {{$status}}</td>
                        <td>

                            <a href="{{route('data_peserta.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>

                            {{-- <form method="POST" action="" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>
@endsection
