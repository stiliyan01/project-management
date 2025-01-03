<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('projects.index') }}">Projects</a>

                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('tasks.index') }}">Tasks</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@if(session('success'))
    <div id="successMessage" class="alert alert-success position-fixed top-0 end-0 m-3" role="alert">
        {{ session('success') }}
    </div>
@endif

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script>
    setTimeout(function () {
        document.getElementById('successMessage').style.display = 'none';
    }, 2000);
</script>

</body>
</html>
