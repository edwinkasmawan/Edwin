<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diagnosa Pasien | Klinik Madonna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f7fb;
            font-family:'Segoe UI',sans-serif;
        }

        .card{
            margin-top:40px;
            border:none;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        .card-header{
            background:#198754;
            color:white;
            font-size:20px;
            font-weight:bold;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card">

        <div class="card-header">

            <i class="fa-solid fa-stethoscope"></i>

            Diagnosa Pasien

        </div>

        <div class="card-body">

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <h5 class="mb-4">

                Informasi Pasien

            </h5>

            <table class="table table-bordered">

                <tr>

                    <th width="220">Nama</th>

                    <td>{{ $pasien->nama }}</td>

                </tr>

                <tr>

                    <th>Tanggal Lahir</th>

                    <td>{{ $pasien->tanggal_lahir }}</td>

                </tr>

                <tr>

                    <th>Asal</th>

                    <td>{{ $pasien->asal }}</td>

                </tr>

                <tr>

                    <th>Jenis Kelamin</th>

                    <td>{{ $pasien->jenis_kelamin }}</td>

                </tr>

                <tr>

                    <th>Keluhan</th>

                    <td>{{ $pasien->keluhan }}</td>

                </tr>

            </table>

            <hr>

            <form action="{{ route('diagnosa.store') }}" method="POST">

                @csrf

                <input
                    type="hidden"
                    name="pasien_id"
                    value="{{ $pasien->id }}">

                <div class="mb-3">

                    <label class="form-label">

                        Diagnosa

                    </label>

                    <textarea
                        name="diagnosa"
                        class="form-control"
                        rows="4"
                        required>{{ old('diagnosa', $pasien->diagnosa) }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Tindakan

                    </label>

                    <textarea
                        name="tindakan"
                        class="form-control"
                        rows="4"
                        required>{{ old('tindakan', $pasien->tindakan) }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Obat

                    </label>

                    <input
                        type="text"
                        name="obat"
                        class="form-control"
                        value="{{ old('obat', $pasien->obat) }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Catatan Dokter

                    </label>

                    <textarea
                        name="catatan_dokter"
                        class="form-control"
                        rows="4">{{ old('catatan_dokter', $pasien->catatan_dokter) }}</textarea>

                </div>

                <div class="d-flex justify-content-between">

                    <a
                        href="{{ route('dokter.dashboard') }}"
                        class="btn btn-secondary">

                        <i class="fa-solid fa-arrow-left"></i>

                        Kembali

                    </a>

                    <button
                        type="submit"
                        class="btn btn-success">

                        <i class="fa-solid fa-floppy-disk"></i>

                        Simpan Diagnosa

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>