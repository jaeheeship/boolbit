<!DOCTYPE html>
<html>
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
  <div class="columns">
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
      
      <div>
        <div class="brand">
            <a><img src="/img/boolbit_logo.png" /></a>
        </div>
        <div class="sidebar-section">
          <div class="title"><a><span class="icon"><i class="fa fa-tachometer"></i></span>Dashboard</a></div>
        </div>
        <div class="sidebar-section">
          <div class="title"><span class="icon"><i class="fa fa-file-text-o"></i></span>Images</div>
          <ul class="sub-nav">
            <li>
                <a href="#" class="item active">List</span></a>
            </li>
            <li>
                <a href="#" class="item active">+&nbsp;Add Image</span></a>
            </li>
          </ul>
        </div>
        <div class="sidebar-section">
          <div class="title"><span class="icon"><i class="fa fa-list"></i></span>Projects</div>
          <ul class="sub-nav">
            <li>
                <a href="#" class="item active">List</span></a>
            </li>
            <li>
                <a href="#" class="item active">+&nbsp;Add Project</span></a>
            </li>
          </ul>
        </div>
        <div class="sidebar-section">
          <div class="title"><span class="icon"><i class="fa fa-cog"></i></span>Configuration</div>
        </div>
      </div>
    </aside>
    <div class="column is-10 admin-panel">
      <nav class="nav has-shadow is-blue" id="top">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="../index.html">
                Templates
            </a>
            <a class="nav-item" href="../index.html">
                &gt;
            </a>
            <a class="nav-item" href="../index.html">
                Sprintodo
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu is-hidden-tablet">
            <a href="#" class="nav-item is-active">
              Dashboard
            </a>
            <a href="#" class="nav-item">
              Activity
            </a>
            <a href="#" class="nav-item">
              Timeline
            </a>
            <a href="#" class="nav-item">
              Folders
            </a>
          </div>
        </div>
      </nav>
      <div>
        <div class="container">
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