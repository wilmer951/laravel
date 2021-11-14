@extends('../layouts/templDash')


@section('contenido')
<div class="containerDas">


<h1 class="text-center" >Editar producto</h1>
<form  class="form" action="{{route('productos.update',$producto->id)}}" method="POST">
   
    @method('put')


    @include('productos._form')

    <div class="row text-center">
<div class="col">
        
            <button class="btn btn-outline-info" type="submit">Actualizar</button>
        </div>
    </div>
    @include('partials._error')
</form>


</div>
@endsection