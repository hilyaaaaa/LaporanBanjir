
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaporBanjir</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
        }

        header {
            background-color: #2563eb;
            color: white;
            padding: 20px 40px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        header p {
            margin-bottom: 15px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            display: inline;
        }

        nav button {
            background-color: #1e40af;
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        nav button:hover {
            background-color: #1d4ed8;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
            min-height: 500px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        button {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        .laporan-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
        }

        .waspada {
            background-color: #fef3c7;
            color: #92400e;
        }

        .siaga {
            background-color: #fed7aa;
            color: #9a3412;
        }

        .awas {
            background-color: #fecaca;
            color: #991b1b;
        }

        .alert {
            background-color: #dcfce7;
            color: #166534;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #86efac;
        }

        footer {
            text-align: center;
            background-color: #1e293b;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>
    <p>Sistem Pelaporan Banjir BPBD Kabupaten Bandung</p>
      
<nav>
    <a href="{{ route('form') }}">Form Pelaporan</a>

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
        <a href="{{ route('laporan') }}">Daftar Laporan</a>
        <a href="{{ route('profil') }}">Profil Petugas</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 BPBD Kabupaten Bandung - LaporBanjir</p>
</footer>

</body>
</html>
