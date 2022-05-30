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
<form action="{{route('login')}}" method="post">
    @csrf


    <div>
        <label for="email">Email</label>
        <input name="email" id="email" required type="email">

    </div>

    <div>
        <label for="password">Şifre</label>
        <input name="password" id="password" required type="password">

    </div>
    <button type="submit">Giriş yap</button>
</form>
</body>
</html>
