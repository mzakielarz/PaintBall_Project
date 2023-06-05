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

                        <a href="{{ route('weaponsEdit', $w->id) }}">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"
                                    aria-hidden="true"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                    </path>
                                </svg>
                            </button>
                        </a>


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