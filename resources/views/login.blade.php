<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Andale Mono", monospace;
            background-color: #000;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #111;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #222;
            color: white;
        }

        button {
            width: 100%;
            padding: 10px;
            background: rgb(122, 57, 172);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }


        button:hover {
            background:rgb(122, 57, 172);;
        }

        a {
            color:rgb(122, 57, 172);;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Вход</h2>

        <!-- Выводим ошибки, если они есть -->
        @if($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="text" name="login" placeholder="Логин" required value="{{ old('login') }}">
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>


</html>
