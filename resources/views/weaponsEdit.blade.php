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

                <form action="{{ route('weaponsUpdate',$weapon->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
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