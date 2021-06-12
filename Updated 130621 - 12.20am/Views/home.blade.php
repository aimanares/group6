<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            Food Delivery
        </div>
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('loginCustomer') }}" class="btn btn-primary">Customer</a>
            <a href="{{ route('loginRider') }}" class="btn btn-primary">Rider</a>
            <a href="{{ route('loginStaff') }}" class="btn btn-primary">Staff</a>
        </div>
    </div>

</body>

</html>