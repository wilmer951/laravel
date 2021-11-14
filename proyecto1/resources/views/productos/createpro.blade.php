@extends('../layouts/templDash')


@section('contenido')

<div class="containerDas">

<h1 class="text-center" >Crear nuevo producto</h1>
<form class="form" action="{{route('productos.store')}}" method="POST">
    <div class="form-group">

    @include('productos._form')
   
<div class="row">
    <div class="col text-center">
    
        <button class="btn btn-outline-info" type="submit">Guardar</button>
    </div>
</div>
</div>



@include('partials._error')



</form>
    





</div>
@endsection