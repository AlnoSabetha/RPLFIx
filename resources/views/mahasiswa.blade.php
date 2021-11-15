@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                                <div class="position-sticky pt-3">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">
                                        <span data-feather="home"></span>
                                        Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/surat/tambah">
                                        <span data-feather="shopping-cart"></span>
                                        Buat Surat
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">
                                        <span data-feather="shopping-cart"></span>
                                        Surat Masuk
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/surat">
                                        <span data-feather="shopping-cart"></span>
                                        Surat Keluar
                                        </a>
                                    </li>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


