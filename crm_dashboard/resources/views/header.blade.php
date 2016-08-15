<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://use.fontawesome.com/db41bb0122.js"></script>
  <script src="/js/raphael-2.1.4.min.js"></script>
  <script src="/js/justgage.js"></script>
  <title>CRM DashBoard -  @yield('title')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="/img/logo.png" style="width:150px;" alt="" />
          </a>
        </div>
        <ul class="nav  navbar navbar-nav">
          <li><a href="/home">Dashboard</a></li>
          <li><a href="/pedidos">Pedidos</a></li>
          <li><a href="/vendedores">Vendedor</a></li>
          <li><a href="/metas">Metas</a></li>
          <li><a href="/promocao">Produto Promocional</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                  </li>

                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                </li>
            @endif
        </ul>
      </div>
    </nav>
  </header>
