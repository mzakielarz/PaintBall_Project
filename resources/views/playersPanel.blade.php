<!DOCTYPE html>
<html>

<head>
    <title>Players Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @include('include.headerLogin')

    <style>
         .table th,
        .table td {
            color: white;
        }


        .table {
            background-color: black;
        }


        .table thead th {
            background-color: gray;
        }


    </style>

</head>

<body style="background-color:rgb(51, 48, 48)">

    @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif


    @if (session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @endif

    @if (session('add'))
        <div class="alert alert-success">
            {{ session('add') }}
        </div>
    @endif

    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('playersPanel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName"
                            placeholder="Enter First Name" value="John">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName"
                            placeholder="Enter Last Name" value="Doe">
                    </div>
                    <div class="form-group">
                        <label for="weapon">Weapon:</label>
                        <select class="form-control" id="weapon" name="weapon">
                            @foreach ($weapons as $w)
                                <option value="{{ $w->id }}">{{ $w->model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team">Team:</label>
                        <input type="text" class="form-control" id="team" name="team"
                            placeholder="Enter team" value="Eagles">
                    </div>
                    <button type="submit" class="btn btn-primary" id="add-record">Add player</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><span style="color: yellow"> Name</span></th>
                    <th scope="col"><span style="color: yellow"> Last Name</span></th>
                    <th scope="col"><span style="color: yellow"> Weapon</span></th>
                    <th scope="col"><span style="color: yellow"> Team</span></th>
                    <th scope="col"><span style="color: yellow"> Actions</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $p)
                    <tr>
                        <td>{{ $p->firstname }}</td>
                        <td>{{ $p->lastname }}</td>
                        <td>{{ $p->weapon_id }}</td>
                        <td>{{ $p->team }}</td>
                        <td>
                            <form action="{{ route('deletePlayer', ['player' => $p->id]) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </button>
                            </form>

                            <a href="{{ route('playerEdit', $p->id) }}">
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
        <div class="pagination-container d-flex justify-content-center mt-5">
            {{ $players->links('pagination::bootstrap-4') }}
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
