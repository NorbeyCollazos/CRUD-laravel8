<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="data:image/png;base64,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" alt="" width="30" height="24" class="d-inline-block align-text-top">
                CRUD con Laravel 8
            </a>
        </div>
    </nav>

    <div class="container">

        @yield('contenido')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>