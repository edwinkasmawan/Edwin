<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Laporan Data Pasien</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

<style>

body{
    background:#f4f7fb;
}

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.table{
    margin-bottom:0;
}

.badge{
    font-size:13px;
    padding:8px 12px;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-success text-white">

<div class="d-flex justify-content-between align-items-center">

<h4 class="mb-0">
<i class="fa-solid fa-file-lines"></i>
Laporan Data Pasien
</h4>

<div>

<a href="{{ route('admin.dashboard') }}" class="btn btn-light btn-sm">
<i class="fa-solid fa-house"></i>
Dashboard
</a>

<a href="{{ route('laporan.pdf',['keyword'=>$keyword]) }}" class="btn btn-danger btn-sm">
<i class="fa-solid fa-file-pdf"></i>
Export PDF
</a>

<a href="{{ route('laporan.excel',['keyword'=>$keyword]) }}" class="btn btn-success btn-sm">
<i class="fa-solid fa-file-excel"></i>
Export Excel
</a>

</div>

</div>

</div>

<div class="card-body">

<form method="GET" action="{{ route('laporan.index') }}">

<div class="row mb-4">

<div class="col-md-6">

<input
type="text"
name="keyword"
class="form-control"
placeholder="Cari nama pasien..."
value="{{ $keyword }}">

</div>

<div class="col-md-2">

<button class="btn btn-primary w-100">
<i class="fa-solid fa-magnifying-glass"></i>
Cari
</button>

</div>

<div class="col-md-4 text-end">

<h5>

Total Pasien :

<span class="badge bg-success">

{{ $pasiens->count() }}

</span>

</h5>

</div>

</div>

</form>

<div class="table-responsive">

<table class="table table-bordered table-striped align-middle">

<thead class="table-success">

<tr>

<th width="60">No</th>
<th>Nama</th>
<th>Umur</th>
<th>Tanggal Lahir</th>
<th>Asal</th>
<th>Jenis Kelamin</th>
<th>Keluhan</th>
<th>Diagnosis Dokter</th>
<th>Status Diagnosa</th>

</tr>

</thead>

<tbody>

@forelse($pasiens as $pasien)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $pasien->nama }}</td>

<td>{{ $pasien->umur }} Tahun</td>

<td>{{ $pasien->tanggal_lahir }}</td>

<td>{{ $pasien->asal }}</td>

<td>{{ $pasien->jenis_kelamin }}</td>

<td>{{ $pasien->keluhan }}</td>

<td>

@if($pasien->diagnosa)

<span class="badge bg-primary">
{{ $pasien->diagnosa }}
</span>

@else

<span class="text-muted">
-
</span>

@endif

</td>

<td>

@if($pasien->diagnosa)

<span class="badge bg-success">
<i class="fa-solid fa-circle-check"></i>
Sudah didiagnosa
</span>

@else

<span class="badge bg-danger">
<i class="fa-solid fa-circle-xmark"></i>
Belum didiagnosa
</span>

@endif

</td>

</tr>

@empty

<tr>

<td colspan="9" class="text-center">

Belum ada data pasien.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

<div class="card-footer text-center text-muted">

Klinik Madonna - PT ADCA MADONNA HOSPITAL

</div>

</div>

</div>

</body>
</html>