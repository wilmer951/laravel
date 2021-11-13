@extends('../layouts/templDash')


@section('contenido')


<form action="{{route('productos.update',$producto->id)}}" method="POST">
    @csrf
    @method('put')
    <div>
            <input type="text" name="namproedi" placeholder="Nombre" value="{{$producto->name}}">
    </div>

            <div>
                <input type="text" name="tipproedi" placeholder="tipo" value="{{$producto->tipo}}">
        </div>



        <div>
            <input type="text" name="desproedi" placeholder="descripción" value="{{$producto->descripcion}}">
        </div>



        <div>
            <input type="text" name="valproedi" placeholder="valor" value="{{$producto->valor}}">
        </div>


        <button type="submit">Guardar</button>
</form>
    
@endsection