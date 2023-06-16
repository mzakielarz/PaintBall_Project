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
            width: 300px;
            height: 300px;
            margin: 10px;
            background-color: #ccc;
            text-align: center;
            line-height: 300px;
            font-size: 24px;
            text-decoration: none;
            color: #fff;
        }

        .tile:hover {
            background-color: #999;
        }
    </style>


</head>
<body style=" background-color: rgb(167, 157, 146);">
    @include("include.headerLogin")
    <div class="container">

        <a class="tile" href={{route('playersPanel')}}>Players Panel</a>
        <a class="tile" href={{route('addWeapon')}}>Weapons Panel</a>
    </div>
</body>
</html>
