<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>

    <style>
        body {
            background-color: #0A2647 !important;
            color: white !important;
        }

        table.table {
            background-color: #205295 !important;
            color: white !important;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #2C74B3 !important;
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: rgb(167, 157, 146)">
    @include('include.headerLogin')
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
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
