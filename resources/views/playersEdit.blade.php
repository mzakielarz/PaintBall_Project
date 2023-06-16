<!-- resources/views/playerEdit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Player</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @include('include.headerLogin')
</head>
<body style="background-color: rgb(167, 157, 146);">
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('playersUpdate',$player->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" value="{{ $player->firstname }}">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" value="{{ $player->lastname }}">
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
                        <input type="text" class="form-control" id="team" name="team" placeholder="Enter team" value="{{ $player->team }}">
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
