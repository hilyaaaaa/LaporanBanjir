@extends('layouts.app')

@section('content')
<div class="auth-container">
    <!-- Isi form login atau register -->
    <h2>Login Petugas BPBD</h2>

    @if (session('success'))
        <p style="color:green">
            {{ session('success') }}
        </p>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf

        <div>
            <label>Email</label>
            <input type="email" name="email"
                value="{{ old('email') }}" required>
        </div>

        <br>

        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun?
        <a href="{{ route('register') }}">Register di sini</a>
    </p>
</div>
@endsection
