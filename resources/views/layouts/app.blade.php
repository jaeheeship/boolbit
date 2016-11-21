<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


    
</head>
<body> 
<div id="app">
    <nav class="nav has-shadow" id="top">
            
            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <div class="nav-left nav-menu">
                <a class="nav-item is-tab is-active" href="/projects">
                    Dashboard
                </a> 
                <a class="nav-item is-tab" href="/todos">
                    Projects
                </a> 
                 
            </div>

            <div class="nav-right nav-menu"> 
                <span class="nav-item"> 
                    <a class="button is-info">
                        New Project 
                    </a> 
                </span>
            </div>
    </nav>
    <section>
        @yield('content') 
    </section>

</div>
    <script src="/js/app.js"></script>
</body>
</html>
