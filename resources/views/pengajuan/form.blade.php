@extends('layouts.app') {{-- sesuaikan dengan layout kamu --}}
@section('content')
<h2>Formulir Pengajuan</h2>
<form action="{{ route('pengajuan.store') }}" method="POST">
    @csrf
    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" required>

    <label>NIP/NIM</label>
    <input type="text" name="nip_nim" required>

    <label>Jurusan</label>
    <input type="text" name="jurusan" required>

    <label>Fakultas</label>
    <input type="text" name="fakultas" required>

    <label>Jenis Kegiatan</label>
    <input type="text" name="jenis_kegiatan" required>

    <label>Judul Kegiatan</label>
    <input type="text" name="judul_kegiatan" required>

    <label>Deskripsi Kegiatan</label>
    <textarea name="deskripsi_kegiatan" maxlength="500"></textarea>

    <button type="submit">Ajukan</button>
</form>
@endsection
