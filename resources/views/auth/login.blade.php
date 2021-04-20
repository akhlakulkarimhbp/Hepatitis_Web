<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hepatitis A</title>
</head>

<body>
    <div class="main">
        <p class="sign" align="center">LOGIN</p>
        <form method="POST" action="{{ route('login') }}" class="form1 needs-validation"
            novalidate="">
            @csrf
            <div class="form-group">
                <input id="email" class="email form-control" type="email" placeholder="Email"
                    name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <input id="password" class="pass form-control" type="password" placeholder="Password"
                    name="password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <button type="submit" class="submit">
                    Login
                </button>
            </div>
            <br>
            <div class="mt-5 text-center" align="center">
                Belum punya akun? <a href="{{route('register')}}">Register</a>
            </div>
        </form>
    </div>
    <div class="main1">
        <img class="gambar1" src="{{ asset('css/first.png') }}">
        <p class="kata2"> SELAMAT DATANG DI WEBSITE TINGKAT KERAWANAN</p>
        <p class="kata3"> HEPATITIS A DI KABUPATEN PACITAN</p>
        <p class="kata4"> - HEPATITIC A RATE -</p>
    </div>
</body>

</html>
