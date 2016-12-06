<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boolbit') }}</title>

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
  <div class="columns">
    <div class="column is-12 admin-panel">
      <nav class="nav has-shadow is-blue-black" id="top">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="../index.html">
                Boolbit Box
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu ">
            <a href="#" class="nav-item is-active">
              Browse
            </a>
            <a href="#" class="nav-item">
              Submit
            </a>
          </div>
        </div>
      </nav>
      <div>
        <div>
            @yield('content')
        </div>
      
      </div>
    </div>
    </div>
<footer class="footer">
  <div class="container">
    <div class="has-text-centered">
      <p>
        <strong>Boolbit</strong> by <a href="http://jgthms.com">Jaehee</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. 
      </p>
      <p>
        <a class="icon" href="https://github.com/jaeheeship/boolbit">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>