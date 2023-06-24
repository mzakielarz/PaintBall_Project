<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>

    <style>
        body {
            background-color:rgb(51, 48, 48) !important;
            color: white !important;
        }

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: rgb(167, 157, 146)">
    @include('include.headerLogin')
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><span style="color: yellow">#</span></th>
                <th scope="col"><span style="color: yellow">Brand</span></th>
                <th scope="col"><span style="color: yellow">Model</span></th>
                <th scope="col"><span style="color: yellow">Type</span></th>
            </tr>
        </thead>
        @foreach ($weapon as $w)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $w->brand }}</td>
                <td>{{ $w->model }}</td>
                <td>{{ $w->type }}</td>
            </tr>
        @endforeach
    </table>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
