<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boolbit') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://www.gstatic.com/firebasejs/3.6.7/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "{{env('FIREBASE_APIKEY')}}",
        authDomain: "{{env('FIREBASE_AUTHDOMAIN')}}",
        databaseURL: "{{env('FIREBASE_DATABASEURL')}}",
        storageBucket: "{{env('FIREBASE_STORAGEBUCKET')}}",
        messagingSenderId: "{{env('FIREBASE_MESSAGINGSENDERID')}}"
    };

    firebase.initializeApp(config);
    </script>

</head>
<body>
    <div id="app">
    @yield('content')
    </div>
    <script src="/js/app.js"></script>
    @section('scripts')
    @show
</body>
</html>
