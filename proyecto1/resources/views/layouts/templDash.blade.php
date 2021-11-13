<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ye, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <a href="{{route('productos.create')}}">Crear produto</a>
    <a href="{{route('productos.index')}}">Ver productos</a>
    Bienvenido {{Auth::user()->name}}
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="cerrar sesion">


    </form>




    @yield('contenido')





</body>
</html>