<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Players </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('include.headerLogin')
    <style>
         .table th,
        .table td {
            color: white;
        }


        .table {
            background-color: black ;
        }


        .table thead th {
            background-color: gray ;
        }

    </style>


</head>

<body style="background-color:rgb(51, 48, 48)">

    <br />
    <br />

    <table class="table">
        <thead>
            <tr>
                <th scope="col"><span style="color: yellow">#</span></th>
                <th scope="col"><span style="color: yellow">First Name</span></th>
                <th scope="col"><span style="color: yellow">Last Name</span></th>
                <th scope="col"><span style="color: yellow">Team</span></th>
                <th scope="col"><span style="color: yellow">Weapon</span></th>
            </tr>
        </thead>
        @foreach ($players as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->firstname }}</td>
                <td>{{ $p->lastname }}</td>
                <td>{{ $p->team }}</td>
                <td>{{ $p->weapon_id }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
