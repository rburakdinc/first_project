<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deneme</title>
</head>
<body>
<h1>Kaydol</h1>
<form method="post" action="{{route('create')}}">
    @csrf
    <div>
        <label for="isim">İsim</label>
        <input name="name" id="isim" required type="text">

    </div>

    <div>
        <label for="surname">Soy İsim</label>
        <input name="surname" id="surname" required type="text">

    </div>

    <div>
        <label for="password">Şifre</label>
        <input name="password" id="password" required type="password">

    </div>

    <div>
        <label for="email">Email</label>
        <input name="email" id="email" required type="email">

    </div>

    <button type="submit">Kaydet</button>
</form>

<div>
    <h2>Zaten kayıtlı mısın ?</h2>
    <a href="{{route('loginIndex')}}"> Giriş Yap</a>
</div>
</body>
</html>
