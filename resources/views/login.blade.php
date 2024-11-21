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
                    <div class="topic">Welcome</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi
                        reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officia repudiandae aliquam doloribus ex ipsam dignissimos obcaecati eos unde quia necessitatibus, nulla labore veniam voluptate consequuntur assumenda voluptatum harum est?
                    </div>
                    <div class="button">
                        <div class="input">
                            <h1>LOGIN</h1>
                            <form action="{{ route('login') }}" method="POST">
                            @csrf
                                <div class="box-input">
                                    <i class="fas fa-envelope-open-text"></i>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="box-input">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <a href="{{ url('/') }}">
                                    <button type="submit" name="login" class="btn-input">Login</button>
                                </a>
                                <div class="bottom">
                                    <p>Belum punya akun?
                                    <a href="{{ url('/register') }}">Register disini</a>
                                    </p>
                                </div>
                            </d>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>