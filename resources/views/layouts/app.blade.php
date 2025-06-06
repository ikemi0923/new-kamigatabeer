<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Kamigata Beer</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="//use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  @yield('styles')
</head>

<body>
  <div id="app">
    {{-- ナビゲーションバー --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container-fluid">
        <span class="navbar-brand">
          Alfha
        </span>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">株式会社上方ビール</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                admin
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {{-- 本文 --}}
    <main class="py-4 bg-light min-vh-100">
      <div class="container">
        @yield('content')
      </div>
    </main>
  </div>

  {{-- フッター --}}
  <footer class="footer bg-white text-center py-3">
    <small>© 2022 Mountain Gorilla.</small>
  </footer>
  
  @if (session('success'))
  <script>
    alert(@json(session('success')));
  </script>
@endif

</body>

</html>