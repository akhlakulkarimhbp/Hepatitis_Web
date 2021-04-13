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
        <p class="regis" align="center">REGISTER</p>
        <form method="POST" action="{{ route('register') }}" class="form1">
            @csrf

            <div class="form-group">
                <input id="name" class="email form-control" type="text" placeholder="Full Name" name="name"
                    value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <input id="email" class="email form-control" type="email" placeholder="Email" name="email"
                    value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <input id="password" class="pass form-control" type="password" placeholder="Password" name="password"
                    required autocomplete="new-password">
            </div>

            <div class="form-group">
                <input id="password-confirm" class="pass form-control" type="password"
                    placeholder="Password Confirmation" name="password_confirmation" required
                    autocomplete="new-password">
            </div>

            <div class="form-group">
                <button type="submit" class="submit">
                    Register
                </button>
            </div>
            <br>
            <div class="mt-5 text-center" align="center">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
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
