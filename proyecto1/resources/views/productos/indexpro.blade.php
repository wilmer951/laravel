@extends('../layouts/templDash')


@section('contenido')
<div class="containerDas">

<h1 class="text-center" >Lista de productos</h1>

@include('partials._operation')



<table class="table table-striped mt-10">
    <thead class="text-white" style="background:var(--original);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Valor</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->name}}</td>
            <td>{{$producto->tipo}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->valor}}</td>
            <td><a class="btn btn-primary btn-sm" href="{{route('productos.edit',$producto->id)}}">Editar</a></td>
            <td>
                <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">Eiminar</button>
                </form>
                </td>
        
        
        </tr>
            
        @endforeach
  
    </tbody>
  </table>


</div>
@endsection