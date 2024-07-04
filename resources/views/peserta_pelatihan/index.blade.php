@extends('layouts.app1')
@section('content1')
<div class="card">
    <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div class="table-responsive">
                <div align="right" class="mb-3">
                <a href="{{route('peserta_pelatihan.create')}}" class="btn btn-primary">Tambah Data</a>
            </div>
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Gelombang</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Kartu Keluarga</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Nama Sekolah</th>
                        <th>Kejuruan</th>
                        <th>Nomor Hp</th>
                        <th>Email</th>
                        <th>Aktivitas Saat Ini</th>
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
                        {{-- <td>{{ $data->jurusan ? $data->jurusan->nama_jurusan : 'Jurusan Tidak Diketahui' }}</td> --}}
                        <td>
                            @php
                                $gelombang = ($data->id_gelombang == 4) ? 'Gelombang 1' : (($data->id_gelombang == 5) ? 'Gelombang 2' : 'Gelombang 3');
                            @endphp

                            {{$gelombang }}</td>
                        {{-- <td>{{ $data->gelombang ? $data->gelombang->nama_gelombang : 'Gelombang Tidak Diketahui' }}</td> --}}
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->kartu_keluarga }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->tempat_lahir }}</td>
                        <td>{{ $data->tanggal_lahir }}</td>
                        <td>{{ $data->pendidikan_terakhir }}</td>
                        <td>{{ $data->nama_sekolah }}</td>
                        <td>{{ $data->kejuruan }}</td>
                        <td>{{ $data->nomor_hp }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->aktivitas_saat_ini }}</td>
                        <td>
                            @php
                            if ($data->status == 0) {
                                $status  =  'Peserta Tidak lolos';
                            }else if($data->status == 1){
                                $status = 'Peserta Lolos';
                            }
                            @endphp
                         {{$status}}
                        </td>
                        <td>
                            <a href="{{route('data_peserta.edit', $data->id)}}" class="btn btn-success btn-sm">Verifikasi</a>

                            <form method="POST" action="{{route('peserta_pelatihan.destroy', $data->id)}}" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>
@endsection
