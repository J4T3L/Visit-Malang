<!-- ini ke2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Malang</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/contact') }}">Contacts</a>
        <a href="{{ url('/info') }}">Info</a>
        <a href="{{ url('/login') }}">Login</a>
    </nav>
</header>

    <!-- log 2-->
    <div class="carousel">
        <div class="list">
            <div class="item">
            <img src="{{URL('images/web1.jpg')}}">
                <div class="content">
                    <div class="topic">Pantai Goa Cina</div>
                    <div class="des"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>