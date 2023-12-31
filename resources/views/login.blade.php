<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/login.css">

</head>

<body>
    <div>
        <div class="container">
            <div class="pt-5">
                <img src="img\logo_guardiao.png" style="max-width:100%;height:auto;">
            </div>
            <!----------FORMULÁRIO DE LOGIN---------->
            <form id="signin" action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Usuário" required />

                <input type="password" name="password" placeholder="Senha" required />

                <button type="submit">Login</button>
            </form>
            @if (session('error'))
            <div class="alert alert-danger text-center mt-3">
                {{ session('error') }}
                @endif
            </div>

        </div>
</body>

</html>
