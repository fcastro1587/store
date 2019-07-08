<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo/logo.png')}}" width="150"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('jeans.jeans') }}">jeans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('promociones.promociones') }}">promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contactanos.contactanos') }}">Contactanos</a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right redes">
      <li class="nav-item">
        <a href="#" class="nav-link waves-effect waves-light">
          <img src="{{ asset('img/logo/redes/whatsapp.png') }}" alt="" width="28">
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link waves-effect waves-light">
          <img src="{{ asset('img/logo/redes/facebook.png') }}" alt="" width="28">
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link waves-effect waves-light">
        <img src="{{ asset('img/logo/redes/instagram.png') }}" alt="" width="28">
        </a>
      </li
    </ul>
  </div>
</nav>
