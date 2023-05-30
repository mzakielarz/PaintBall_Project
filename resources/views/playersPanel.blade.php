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
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="weapon">Weapon:</label>
                    <input type="text" class="form-control" id="weapon" placeholder="Enter weapon">
                </div>
                <div class="form-group">
                    <label for="team">Team:</label>
                    <input type="text" class="form-control" id="team" placeholder="Enter team">
                </div>
                <button class="btn btn-primary" id="add-record">Add player</button>
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
                    </td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>Smith</td>
                    <td>ABC-456</td>
                    <td>Tigers</td>
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
