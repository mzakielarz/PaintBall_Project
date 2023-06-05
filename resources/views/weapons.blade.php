<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Members </title>
</head>

<body style="background-color: rgb(167, 157, 146)">
    @include('include.headerLogin')
    <br />
    <br />
    <table class="table">
        @foreach ($weapon as $w)
            <tr>
                <td>{{ $w->brand }}</td>
                <td>{{ $w->model }}</td>
                <td>{{ $w->type }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
