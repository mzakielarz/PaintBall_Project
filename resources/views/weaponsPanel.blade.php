<!DOCTYPE html>
<html>
<head>
    <title>Weapons Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body style="background-color: rgb(167, 157, 146);">
    @include('include.headerLogin')

    <div class="container">
        <div class="card mt-4">
            <div class="card-body">

                <form action="{{ route('weaponsPanel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand" value="Tippman">
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" value="XYZ-123">
                    </div>
                    <div class="form-group">
                        <label for="category">Type:</label>
                        <input type="text" class="form-control" id="category" name="type" placeholder="Enter type" value="Woodball">
                    </div>
                    <button type="submit" class="btn btn-primary" id="add-record">Add weapon</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weapons as $w)
                <tr>
                    <td>{{$w->brand}}</td>
                    <td>{{$w->model}}</td>
                    <td>{{$w->type}}</td>
                    <td>
                        <form action="/usersMenu/weaponsPanel/{{$w->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>


                        </form>

                        <button class="btn btn-secondary btn-sm">Edit</button>
                    </td>
                </tr>
                 @endforeach


            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
