@extends('layouts.theadmin.header')

@section('content')
    <div class="main-content">
        <div class="card">
            <header class="card-header">
                <h6 class="card-title card-title-bold">About</h6>
            </header>

            <div class="card-body">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <center>
                            <img src="img/Foto Profil.jpg" height="200px" width="150px">
                        </center>
                    </div>
                    <div class="col-md-10" style="font-weight: 500">
                        <div class="text-muted">
                            Aplikasi ini dibuat oleh:
                            <ul>
                                <li>Nama : Rizky Abdi Syahputra Hasibuan</li>
                                <li>NIM : 2031730005</li>
                                <li>Tanggal Dibuat: 13 November 2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
