<nav class="navbar navbar-default">
  <div class ="container-fluid">
    <div class = "navbar-header">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

    <a class="navbar-brand main-title" href="{{route('home')}}">TiMe TeAm</a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <p class="navbar-text"></p>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('carrito-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
      <li><a href="#">Conocenos</a></li>
      <li><a href="#">Contacto</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"aria-
        expanded="false"><i class="fa fa-comments"></i><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">español</a></li>
          <li><a href="#">ingles</a></li>
          </ul>
        </li>
      @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>
