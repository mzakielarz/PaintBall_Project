<!DOCTYPE html>
<html>
<head>
    <title>Players Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: rgb(167, 157, 146);">

    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('playersPanel') }}" method="POST">
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
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Weapon</th>
                    <th scope="col">Team</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>XYZ-123</td>
                    <td>Eagles</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                        <button class="btn btn-secondary btn-sm">Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>Smith</td>
                    <td>ABC-456</td>
                    <td>Tigers</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                        <button class="btn btn-secondary btn-sm">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
