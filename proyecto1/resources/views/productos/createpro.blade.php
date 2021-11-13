@extends('../layouts/templDash')


@section('contenido')


@if ($errors->any())
    

    @foreach ($errors->all() as $error)
   <li> {{$error}}</li>
    @endforeach
@endif

<form action="{{route('productos.store')}}" method="POST">
    @csrf

    <div>
            <input type="text" name="namproreg" placeholder="Nombre" value="{{old('namproreg')}}">
    </div>

            <div>
                <input type="text" name="tipproreg" placeholder="tipo" value={{old('tipproreg')}}>
        </div>



        <div>
            <input type="text" name="desproreg" placeholder="descripción">
        </div>



        <div>
            <input type="text" name="valproreg" placeholder="valor">
        </div>


        <button type="submit">Guardar</button>
</form>
    
@endsection