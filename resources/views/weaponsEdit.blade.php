<!DOCTYPE html>
<html>
<head>
    <title>Edit Weapon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:rgb(51, 48, 48)">
    @include('include.header')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('weaponsUpdate',$weapon->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand" value="{{ $weapon->brand }}">
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" value="{{ $weapon->model }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Type:</label>
                        <input type="text" class="form-control" id="category" name="type" placeholder="Enter type" value="{{ $weapon->type }}">
                    </div>
                    <button type="submit" class="btn btn-primary" id="edit-record">Edit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
