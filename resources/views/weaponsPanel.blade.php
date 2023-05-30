<!DOCTYPE html>
<html>
<head>
    <title>Weapons Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: rgb(167, 157, 146);">

    <div class="container">
        <div class="card mt-4">
            <div class="card-body">

                <div class="form-group">
                    <label for="brand">Brand:</label>
                    <input type="text" class="form-control" id="brand" placeholder="Enter brand" value="Tippman">
                </div>
                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" class="form-control" id="model" placeholder="Enter model" value="XYZ-123">
                </div>
                <div class="form-group">
                    <label for="category">Type:</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter type" value="Woodball">
                </div>
                <button class="btn btn-primary" id="add-record">Add weapon</button>
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
                <!-- Placeholder rows for demonstration purposes -->
                <tr>
                    <td>Tippman</td>
                    <td>XYZ-123</td>
                    <td>Woodball</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Another Brand</td>
                    <td>ABC-456</td>
                    <td>Speedball</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
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
