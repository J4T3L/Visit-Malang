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
            <a href="/">Home</a>
            <a href="/contact">Contacts</a>
            <a href="/info">Info</a>
            <a href="/login">Login</a>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="{{URL('images/web1.jpg')}}">
                <img src="images/web1.jpg">
                <div class="content">
                    <!-- <div class="author">ENTAH</div>
                    <div class="title">Pantai Selok</div> -->
                    <div class="topic">Pantai Selok</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>
                            <a href="/pantai1">SEE MORE</a>
                        </button>
                        <button>
                            <a href="/tiket">Buy Ticket</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web2.jpeg">
                <div class="content">
                    <div class="topic">Pantai Teluk Asmara</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>
                            <a href="/login">SEE MORE</a>
                        </button>
                        <button>
                            <a href="/tiket">Buy Ticket</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web3.jpeg">
                <div class="content">
                    <div class="topic">Pantai Goa Cina</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>
                            <a href="/pantai1">SEE MORE</a>
                        </button>
                        <button>
                            <a href="/tiket">Buy Ticket</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web4.jpeg">
                <div class="content">
                    <div class="topic">Pantai Ungapan</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>
                            <a href="/login">SEE MORE</a>
                        </button>
                        <button>
                            <a href="/tiket">Buy Ticket</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="images/web1.jpg">
                <div class="content">
                    <div class="title">
                        Pantai Selok
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web2.jpeg">
                <div class="content">
                    <div class="title">
                        Pantai Teluk Asmara
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web3.jpeg">
                <div class="content">
                    <div class="title">
                        Pantai Goa Cina
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/web4.jpeg">
                <div class="content">
                    <div class="title">
                        Pantai Ungapan
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
    <script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>