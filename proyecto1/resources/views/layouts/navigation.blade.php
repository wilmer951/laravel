<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">-</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item mr-2">
          <span class="nav-link active text-white">  Hola! {{Auth::user()->name}}</span>
        </li>

          
        <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
          @csrf
  
          <li class="nav-item">
            <input class="btn bnt-warning text-center text-white" type="submit" value="Cerar sesion">
            
          </li>

        </form>


        <li class="nav-item ml-20">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('productos.create')}}">Crear Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('productos.index')}}">Ver productos</a>
        </li>

   

      </ul>



     
  
  
    </div>
  </div>
</nav>



  
