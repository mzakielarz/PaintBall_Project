<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:rgb(51, 48, 48)">
    @include('include.headerLogin')

    @if (session('incorrect'))
        <div class="alert alert-danger">
            {{ session('incorrect') }}
        </div>
    @endif

    <div class='container-fluid' ">
        <div class="row justify-content-center align-items-center" style="height: 80vh;">
            <form class="ms-auto me-auto" style="width: 400px" action="/usersMenu" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(255, 255, 255)">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(255, 255, 255)">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
