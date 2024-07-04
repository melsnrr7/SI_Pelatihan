@extends('layouts.app2')
@section('title', 'Riwayat Peserta Pelatihan')
@section('content2')
<div class="card">
    <div class="card-header">Data Peserta Pelatihan Yang Tidak Aktif</div>
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Gelombang</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Hp</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data )

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama_jurusan}}</td>
                        {{-- <td>{{ $data->jurusan ? $data->jurusan->nama_jurusan : 'Jurusan Tidak Diketahui' }}</td> --}}
                        <td>
                            @php
                                $gelombang = ($data->id_gelombang == 4) ? 'Gelombang 1' : (($data->id_gelombang == 5) ? 'Gelombang 2' : 'Gelombang 3');
                            @endphp

                            {{$gelombang }}</td>
                        {{-- <td>{{ $data->gelombang ? $data->gelombang->nama_gelombang : 'Gelombang Tidak Diketahui' }}</td> --}}
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->nomor_hp }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
