<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Members </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('include.headerLogin')
</head>

<body style="background-color: rgb(167, 157, 146)">

    <br />
    <br />

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Team</th>
                <th scope="col">Weapon</th>
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
