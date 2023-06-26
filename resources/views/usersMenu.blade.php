<!DOCTYPE html>
<html>

<head>
    <title>User's Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .tile {
            display: block;
            position: relative;
            width: 300px;
            height: 300px;
            margin: 10px;
            text-align: center;
            font-size: 24px;
            text-decoration: none;
            color: #fff;
            overflow: hidden;
        }

        .tile::after {
            content: attr(data-text);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .tile:hover::after {
            opacity: 1;
        }

        .tile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body style="background-color:rgb(51, 48, 48)">
    @include('include.header')

    @if (session('correct'))
    <div class="alert alert-success">
        {{ session('correct') }}
    </div>
    @endif

    <div class="container">
        <a class="tile" href={{ route('playersPanel') }} data-text="Players Panel">
            <img src="img/players_panel.jpg" alt="Players Panel">
        </a>
        <a class="tile" href={{ route('addWeapon') }} data-text="Weapons Panel">
            <img src="img/weapons_panel.jpg" alt="Weapons Panel">
        </a>
    </div>
</body>

</html>
