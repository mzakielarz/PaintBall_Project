<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  rgb(167, 157, 146)!important;
            color: #333;
        }
    </style>
</head>

<body>
    @include('include.headerLogin')
    <div class="container">
        <main>
            <h2 class="mb-4">Welcome! Here is some info about us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Nulla vitae elit nisi.</p>
        </main>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="#" class="card-img-top" alt="Image">

                    <div class="card-body">
                        <h5 class="card-title">Card Title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="#" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
