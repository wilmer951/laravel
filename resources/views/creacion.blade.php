@extends('plantilla')

@section('title','crear')

    
@section('contenido')


<h1>Crear producto</h1>


<div class="container">

    <form action="{{route('producto.store')}}" method="post">
        @csrf
<label for="">Nombre</label>
<div>
<input type="text" name="name" class="">
</div>
<div>
<textarea name="descripcion" id="" cols="30" rows="10" placeholder="descrición"></textarea>
</div>

<button>enviar</button>

    </form>
</div>

@endsection
