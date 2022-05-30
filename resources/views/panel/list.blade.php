<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        />

        <link rel="stylesheet" href="css/mdb.min.css" />
        <title>Giriş Başarılı</title>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">İsim</th>
                    <th scope="col">Soyisim</th>
                    <th scope="col">E-Mail</th>
                </tr>
                </thead>
                <tbody>
                @foreach ((array) @$users as $user) {
                <tr>

                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>

                </tr>
                }
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
    <script type = "text/javascript" src="js/mdb.min.js"> </script>
</html>
