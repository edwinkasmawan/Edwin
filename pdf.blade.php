<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Laporan Data Pasien</title>

<style>

body{
    font-family: DejaVu Sans, sans-serif;
    font-size:12px;
    color:#000;
}

.header{
    text-align:center;
    margin-bottom:20px;
}

.header h2{
    margin:0;
}

.header h4{
    margin:5px 0;
}

hr{
    border:1px solid #000;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th,
table td{
    border:1px solid #000;
    padding:6px;
    font-size:11px;
}

table th{
    background:#e8e8e8;
    text-align:center;
}

.footer{
    margin-top:50px;
    width:100%;
}

.ttd{
    float:right;
    text-align:center;
    width:250px;
}

</style>

</head>

<body>

<div class="header">

<h2>KLINIK MADONNA</h2>

<h4>PT ADCA MADONNA HOSPITAL</h4>

<p>
Laporan Data Pasien
</p>

</div>

<hr>

<p>

<b>Tanggal Cetak :</b>

{{ date('d-m-Y H:i:s') }}

</p>

<table>

<thead>

<tr>

<th>No</th>

<th>Nama</th>

<th>Tanggal Lahir</th>

<th>Asal</th>

<th>Jenis Kelamin</th>

<th>Keluhan</th>

</tr>

</thead>

<tbody>

@forelse($pasiens as $pasien)

<tr>

<td align="center">

{{ $loop->iteration }}

</td>

<td>

{{ $pasien->nama }}

</td>

<td align="center">

{{ date('d-m-Y', strtotime($pasien->tanggal_lahir)) }}

</td>

<td>

{{ $pasien->asal }}

</td>

<td align="center">

{{ $pasien->jenis_kelamin }}

</td>

<td>

{{ $pasien->keluhan }}

</td>

</tr>

@empty

<tr>

<td colspan="6" align="center">

Tidak ada data pasien.

</td>

</tr>

@endforelse

</tbody>

</table>

<p style="margin-top:15px;">

<b>Total Data :</b>

{{ $pasiens->count() }}

Pasien

</p>

<div class="footer">

<div class="ttd">

<p>

Samarinda,

{{ date('d F Y') }}

</p>

<br><br><br>

<b>

Administrator

</b>

</div>

</div>

</body>
</html>