<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Tambah Pasien</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

Tambah Data Pasien

</div>

<div class="card-body">

<form action="/admin/pasien/store"

method="POST">

@csrf

<div class="mb-3">

<label>Nama</label>

<input

type="text"

name="nama"

class="form-control"

required>

</div>

<div class="mb-3">

<label>Tanggal Lahir</label>

<input

type="date"

name="tanggal_lahir"

class="form-control"

required>

</div>

<div class="mb-3">

<label>Asal</label>

<input

type="text"

name="asal"

class="form-control"

required>

</div>

<div class="mb-3">

<label>Jenis Kelamin</label>

<select

name="jenis_kelamin"

class="form-select">

<option>Laki-laki</option>

<option>Perempuan</option>

</select>

</div>

<div class="mb-3">

<label>Keluhan</label>

<textarea

name="keluhan"

class="form-control"

rows="5"></textarea>

</div>

<button

class="btn btn-success">

Simpan

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