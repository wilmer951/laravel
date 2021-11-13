@extends('../layouts/templDash')


@section('contenido')


<h1>lista de productos</h1>



<table>


    <thead>

        <tr>


            <td>Nombre</td>
            <td>Tipo</td>
            <td>Descripcion</td>
            <td>Valor</td>
        </tr>
    </thead>

<tbody>

    
</tbody>

@foreach ($productos as $producto)

<tr>
    <td>{{$producto->name}}</td>
    <td>{{$producto->tipo}}</td>
    <td>{{$producto->descripcion}}</td>
    <td>{{$producto->valor}}</td>
    <td><a href="{{route('productos.edit',$producto->id)}}">Editar</a></td>
    <td>
        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
            @csrf
            @method('delete')
            <button>Eiminar</button>
        </form>
        </td>


</tr>
    
@endforeach
</table>    


@endsection