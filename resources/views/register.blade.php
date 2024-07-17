<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styler.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Register Page</title>
</head>

<body>
    <header>
    <nav>
            <a href="/">Home</a>
            <a href="/contact">Contacts</a>
            <a href="/info">Info</a>
            <a href="/login">Login</a>
        </nav>
    </header>

    <div class="input">
    <form action="{{ route('register') }}" method="POST">
    @csrf
                <div class="box-input">
                <i class="fas fa-user"></i>
                <input type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="/">
                <button type="submit" name="register" class="btn-input">Register</button>
            </a>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="/login">Login disini</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>