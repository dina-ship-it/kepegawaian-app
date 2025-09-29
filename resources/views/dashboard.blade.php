@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center bg-primary text-white p-5 rounded mb-4">
        <h1>Sistem Informasi Pengabdian, Penelitian, dan Prestasi Dosen</h1>
        <p>Platform terintegrasi untuk mengelola dan memantau aktivitas akademik dosen</p>
        <input type="text" class="form-control w-25 mx-auto" placeholder="">
    </div>

    <div class="row text-center">
        <div class="col-md-2 mx-auto">
            <div class="card p-3 mb-3 shadow-sm">
                <div class="icon mb-2" style="font-size: 24px;">👨‍🏫</div>
                <h3>4</h3>
                <p>Total Dosen</p>
            </div>
        </div>

        <div class="col-md-2 mx-auto">
            <div class="card p-3 mb-3 shadow-sm">
                <div class="icon mb-2" style="font-size: 24px;">🎓</div>
                <h3>4</h3>
                <p>Mahasiswa Terlibat</p>
            </div>
        </div>

        <div class="col-md-2 mx-auto">
            <div class="card p-3 mb-3 shadow-sm">
                <div class="icon mb-2" style="font-size: 24px;">📚</div>
                <h3>4</h3>
                <p>Penelitian Aktif</p>
            </div>
        </div>

        <div class="col-md-2 mx-auto">
            <div class="card p-3 mb-3 shadow-sm">
                <div class="icon mb-2" style="font-size: 24px;">🏢</div>
                <h3>4</h3>
                <p>Program Pengabdian</p>
            </div>
        </div>

        <div class="col-md-2 mx-auto">
            <div class="card p-3 mb-3 shadow-sm">
                <div class="icon mb-2" style="font-size: 24px;">🏆</div>
                <h3>5</h3>
                <p>Prestasi Diraih</p>
            </div>
        </div>
    </div>
</div>
@endsection
