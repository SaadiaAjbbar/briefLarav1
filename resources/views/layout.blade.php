<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>localMed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="{{ route('questions.index') }}">Questions</a>

    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    @endauth
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
