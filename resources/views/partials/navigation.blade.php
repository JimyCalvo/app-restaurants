<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('Hogar')}}">
        <img src="{{URL::asset('img/Imagen1.png')}}" alt="" width="270" height="80" class="d-inline-block align-text-top">
      </a>
    </div>
    <ul>
        <li><a href="{{route('Hogar')}}">Hogar</a></li>
        <li><a href="{{route('locales')}}">Restaurantes</a></li>
        <li><a href="{{route('buscar')}}">Buscar</a></li>
        <li><a href="{{route('location')}}">Ubicaciones</a></li>
        <li><a href="{{route('about')}}">Acerca de nosotros</a></li>
        <li><a href="{{route('contact')}}">Contactos</a></li>
    </ul>
  </nav>




