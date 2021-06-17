<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    {{-- Bootstrap JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
    {{-- Bootstrap JS Bundle  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js">
    <title>Social Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="{{ url('/login/google') }}" class="btn btn-danger btn-block">Login with Google</a>
                <a href="{{ url('/login/facebook') }}" class="btn btn-primary btn-block">Login with Facebook</a>
                <a href="{{ url('/login/github') }}" class="btn btn-dark btn-block">Login with Guthub</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>