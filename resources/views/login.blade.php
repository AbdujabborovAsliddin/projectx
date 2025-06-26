@extends('layouts.login')


@section('content')
<div class="bg-img">
    <div class="content">
        <header>Login Form</header>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="field">
                <span class="fa fa-user"></span>
                <input name="login" type="text" required placeholder="Login">
            </div>

            <div class="field space">
                <span class="fa fa-lock"></span>
                <input name="password" type="password" required placeholder="Password">
            </div>

            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>

            @error('email')
            <div class="text-danger" style="margin-bottom: 10px;">{{ $message }}</div>
            @enderror

            <div class="field">
                <input type="submit" value="LOGIN">
            </div>
        </form>
    </div>
</div>
@endsection