<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="LoginPage" content="width=device-width, initial-scale=1">

    <title> LOGIN </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        .a1 {
            color: blueviolet;
            text-align: center;
            text-shadow: 2px 2px black;
            font-size-adjust: inherit;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;


        }

        .log1 {
            color: black;
            text-align: center;
            opacity: 100%;
        }

        .log {
            background-color: lightcyan;
            opacity: 50%;
            margin-left: 10%;
            margin-right: 10%;
            border: groove 2px black;
            border-radius: 50px;
        }


        .container {
            text-align: center;
            background: url("https://wallpaperaccess.com/full/177913.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 60%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: 20%;
            margin-right: 20%;
            border: groove 2px lightgreen;
            border-radius: 50px;
        }

        .pwd {
            text-align: center;
            font-size: 50%;
        }

        .remember {
            font-size: 50%;
        }

        .bkbtn {
            background-color: green;
            opacity: 60%;
            border: groove 2px white;
            border-radius: 25px;
            color: white;
            margin-right: 18.5%;
            display: inline-block;
        }

        .body1 {
            background: url("https://wallpaperaccess.com/full/177913.jpg");
            // background-position: center;
            background-size: cover;
        }
        .sigin {
            background-color: rgb(0, 191, 255);
            opacity: 80%;
            border-radius: 25px;
        }
    </style>

    <h2 class="a1">
        PAGINA DE LOGIN
    </h2>

</head>



<body class="body1">




    <br>
    <div class="container">

        <h1 class="log"><a class="log1">FACA LOGIN PARA CONTINUAR</a>
            <h1>

                <input type="text" placeholder="Entre com o Usuario" name="name" required>
                <br>
                <input type="password" placeholder="Entre com a Senha" name="pwd" required>
                <br>

                <label class="remember">
                    <input type="checkbox" name="remember"> Lembrar-se de Mim
                </label>

                <br>
                <button type="submit">Logar-se</button>
                <button type="button" class="cancelbtn">Cancelar</button>
                <br>
                <span class="pwd">Esqueceu a <a href="#">Senha?</a></span>
                <br>

                <button class="bkbtn" onclick="window.history.go(-1); return false;"><img
                        src='https://d29fhpw069ctt2.cloudfront.net/icon/image/37948/preview.svg' width="50"
                        height="25"></button>
                <button type="signin" class="sigin">Criar conta</button>


    </div>



</body>
