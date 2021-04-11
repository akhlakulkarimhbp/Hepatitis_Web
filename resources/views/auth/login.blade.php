<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style-login.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Hepatitis A</title>
</head>

<body>
    <div class="main">
      <p class="sign" align="center">LOGIN</p>
      <form method="POST" action="{{ route('login')}}" class="form1">
      @csrf
      <input id="email" class="email" type="email" align="center" placeholder="Email">
      <input id="password" class="pass" type="password" align="center" placeholder="Password">
      <button type="submit" class="submit" align="center">MASUK</button>   
      </form>
      <br>
      <button type="submit" class="submit" align="center">REGISTER</button> 
      </div>
      <div class="main1">
        <img class="gambar1" src="{{asset('css/first.png')}}">
              <p class="kata2"> SELAMAT DATANG  DI WEBSITE TINGKAT KERAWANAN</p>
              <p class="kata3"> HEPATITIS A DI KABUPATEN PACITAN</p>
              <p class="kata4"> - HEPATITIC A RATE -</p>
        </div>
</body>

</html>
