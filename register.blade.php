<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Klinik Madonna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:linear-gradient(135deg,#0d6efd,#4db8ff);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:'Segoe UI',sans-serif;
        }

        .card{
            width:500px;
            border:none;
            border-radius:15px;
            box-shadow:0 15px 35px rgba(0,0,0,.2);
        }

        .btn-primary{
            border-radius:8px;
        }

        .footer-text{
            font-size:14px;
            color:#6c757d;
        }

        a{
            text-decoration:none;
        }

        a:hover{
            text-decoration:underline;
        }
    </style>

</head>

<body>

<div class="card">

    <div class="card-body p-5">

        <h2 class="text-center text-primary fw-bold mb-4">
            Register Klinik Madonna
        </h2>

        {{-- Error Validasi --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>
            </div>

            <div class="mb-4">
                <label class="form-label">Konfirmasi Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Register
            </button>

        </form>

        <div class="text-center mt-4">
            Sudah punya akun?
            <a href="{{ url('/login') }}">
                Login
            </a>
        </div>

        <div class="text-center mt-2">
            <a href="{{ url('/') }}" class="text-secondary">
                ← Kembali ke Beranda
            </a>
        </div>

        <hr class="my-4">

        <div class="text-center footer-text">
            <strong>Klinik Madonna</strong><br>
            PT ADCA MADONNA HOSPITAL
        </div>

    </div>

</div>

</body>
</html>