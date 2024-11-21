<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="{{ asset('css/tiket.css') }}">
</head>

<body class="background">
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/contact') }}">Contacts</a>
            <a href="{{ url('/info') }}">Info</a>
            <a href="{{ url('/login') }}">Login</a>
        </nav>
    </header>

    <h2>Ticketing</h2>
    <section class="event-list">
        <div class="event">
            <img src="{{ URL('images/web1.jpg') }}" alt="Concert">
            <h3>Live Concert Erotis</h3>
            <p>Lokasi : pantai a</p>
            <p>Harga : 20.000</p>
            <button class="btn-buy">Beli</button>
        </div>
        <div class="event">
            <img src="{{ URL('images/web2.jpeg') }}" alt="Theater Show">
            <h3>Theater Show</h3>
            <p>Lokasi : pantai a</p>
            <p>Harga : 20.000</p>
            <button class="btn-buy">Beli</button>
        </div>
        <div class="event">
            <img src="{{ URL('images/web3.jpeg') }}" alt="Sports Event">
            <h3>Sports Event</h3>
            <p>Lokasi : pantai a</p>
            <p>Harga : 20.000</p>
            <button class="btn-buy">Beli</button>
        </div>
        <div class="event">
            <img src="{{ URL('images/web4.jpeg') }}" alt="Sports Event">
            <h3>Sports Event</h3>
            <p>Lokasi : pantai a</p>
            <p>Harga : 20.000</p>
            <button class="btn-buy">Beli</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Ticket Sales. All rights reserved.</p>
    </footer>
</body>

</html>
