<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Klinik Madonna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        /* Sidebar */

        .sidebar{
            position:fixed;
            top:0;
            left:0;
            width:260px;
            height:100vh;
            background:#fff;
            border-right:1px solid #e5e5e5;
            display:flex;
            flex-direction:column;
        }

        .logo{
            padding:22px;
            border-bottom:1px solid #eee;
        }

        .logo h5{
            color:#198754;
            font-weight:bold;
            margin-bottom:3px;
        }

        .logo small{
            color:#888;
        }

        .menu{
            padding:15px;
            flex:1;
        }

        .menu a{
            display:flex;
            align-items:center;
            text-decoration:none;
            color:#555;
            padding:12px 15px;
            border-radius:10px;
            margin-bottom:8px;
            transition:.3s;
        }

        .menu a:hover{
            background:#198754;
            color:#fff;
        }

        .menu a.active{
            background:#198754;
            color:#fff;
        }

        .menu i{
            width:25px;
        }

        .logout{
            padding:20px;
            border-top:1px solid #eee;
        }

        .logout button{
            border:none;
            background:none;
            color:#dc3545;
            font-weight:bold;
        }

        .footer{
            text-align:center;
            font-size:12px;
            color:#999;
            padding:15px;
        }

        /* Content */

        .content{
            margin-left:260px;
        }

        .navbar-custom{
            background:#fff;
            height:70px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 30px;
            border-bottom:1px solid #e5e5e5;
        }

        .navbar-custom h4{
            margin:0;
            font-weight:bold;
        }

        .profile{
            color:#198754;
            font-weight:600;
        }

        .main{
            padding:30px;
        }

        .card-dashboard{
            border:none;
            border-radius:15px;
            box-shadow:0 3px 10px rgba(0,0,0,.08);
        }

    </style>

</head>
<body>

<!-- Sidebar -->

<div class="sidebar">

    <div class="logo">
        <h5>
            <i class="fa-solid fa-hospital"></i>
            Klinik Madonna
        </h5>
        <small>Sistem Informasi Manajemen Klinik</small>
    </div>

    <div class="menu">

        <a href="{{ route('admin.dashboard') }}" class="active">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <a href="{{ route('pasien.index') }}">
            <i class="fa-solid fa-user-injured"></i>
            Data Pasien
        </a>

        <a href="{{ route('prediksi.index') }}">
            <i class="fa-solid fa-chart-line"></i>
            Prediksi
        </a>

        <!-- MENU LAPORAN -->
        <a href="{{ route('laporan.index') }}">
            <i class="fa-solid fa-file-lines"></i>
            Laporan
        </a>
    </div>

    <div class="logout">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>

    </div>

    <div class="footer">
        © {{ date('Y') }} Klinik Madonna
    </div>

</div>

<!-- Content -->

<div class="content">

    <div class="navbar-custom">

        <h4>Dashboard</h4>

        <div class="profile">
            <i class="fa-solid fa-circle-user"></i>
            {{ Auth::user()->name ?? 'Administrator' }}
        </div>

    </div>

    <div class="main">

        <h3 class="mb-4">
            Selamat Datang,
            {{ Auth::user()->name ?? 'Administrator' }}
        </h3>

        <div class="card card-dashboard">

            <div class="card-body">

                <h5>Dashboard Klinik Madonna</h5>

                <hr>

                <p>
                    Selamat datang di Sistem Informasi Manajemen Klinik Madonna.
                    Gunakan menu di sebelah kiri untuk mengelola data pasien,
                    diagnosis, prediksi, laporan, dan pengguna sistem.
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>