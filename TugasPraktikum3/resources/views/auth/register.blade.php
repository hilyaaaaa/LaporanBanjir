@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register Petugas BPBD</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('register.proses') }}" method="POST">
        @csrf

        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="name"
                value="{{ old('name') }}" required>
        </div>

        <br>

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

        <div>
            <label>Konfirmasi Password</label>
            <input type="password"
                name="password_confirmation" required>
        </div>

        <br>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun?
        <a href="{{ route('login') }}">Login di sini</a>
    </p>
</div>
@endsection
