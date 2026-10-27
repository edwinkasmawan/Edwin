<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Edit Pasien</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-warning">

Edit Data Pasien

</div>

<div class="card-body">

<form

action="/admin/pasien/update/{{ $pasien->id }}"

method="POST">

@csrf

@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input

type="text"

name="nama"

class="form-control"

value="{{ $pasien->nama }}"

required>

</div>

<div class="mb-3">

<label>Tanggal Lahir</label>

<input

type="date"

name="tanggal_lahir"

class="form-control"

value="{{ $pasien->tanggal_lahir }}"

required>

</div>

<div class="mb-3">

<label>Asal</label>

<input

type="text"

name="asal"

class="form-control"

value="{{ $pasien->asal }}"

required>

</div>

<div class="mb-3">

<label>Jenis Kelamin</label>

<select

name="jenis_kelamin"

class="form-select">

<option

{{ $pasien->jenis_kelamin=='Laki-laki' ? 'selected' : '' }}>

Laki-laki

</option>

<option

{{ $pasien->jenis_kelamin=='Perempuan' ? 'selected' : '' }}>

Perempuan

</option>

</select>

</div>

<div class="mb-3">

<label>Keluhan</label>

<textarea

name="keluhan"

class="form-control"

rows="5">{{ $pasien->keluhan }}</textarea>

</div>

<button

class="btn btn-primary">

Update

</button>

<a href="/admin/pasien"

class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>

</html>