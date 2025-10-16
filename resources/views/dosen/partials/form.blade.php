<div class="mb-3">
    <label class="form-label">NIDN</label>
    <input type="text" name="nidn" class="form-control" value="{{ old('nidn', $dosen->nidn ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $dosen->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $dosen->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Prodi</label>
    <input type="text" name="prodi" class="form-control" value="{{ old('prodi', $dosen->prodi ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $dosen->jabatan ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Tahun</label>
    <input type="number" name="tahun" class="form-control" value="{{ old('tahun', $dosen->tahun ?? '') }}">
</div>

<button type="submit" class="btn btn-primary">{{ $button }}</button>
