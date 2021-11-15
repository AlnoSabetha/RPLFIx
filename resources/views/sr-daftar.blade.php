@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <h1 align="center">Surat Keluar</h1>
                        <div class="container ">
                        <table class="table table-hover">
                            <thead>
                                <a href="/surat/tambah" class="btn btn-lg btn-primary ml-2">[+] Buat Surat</a>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tujuan Surat</th>
                                    <th>Nama Mitra</th>
                                    <th>Alamat Mitra</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->tujuan_surat }}</td>
                                    <td>{{ $s->nama_mitra }}</td>
                                    <td>{{ $s->alamat_mitra }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="/template" class="btn btn-info"><img src="/img/logoprint.png" alt="View Surat" width="20" height="20" ></a>
                                    <a href="/surat/edit/{{$s->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


