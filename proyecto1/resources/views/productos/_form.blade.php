@csrf


<div class="row">

    <div class="col">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{old('nombre',$producto->name)}}">
    </div>
</div>


<div class="row">

    <div class="col">
        <input class="form-control" type="text" name="tipo" placeholder="tipo" value={{old('tipo',$producto->tipo)}} >
    </div>
</div>

<div class="row">

    <div class="col">
        <input class="form-control" type="text" name="descripcion" placeholder="descripción" value={{old('descripcion',$producto->descripcion)}}>
    </div>
</div>

<div class="row">

    <div class="col">
        <input class="form-control" type="text" name="valor" placeholder="valor" value={{old('valor',$producto->valor)}} >
    </div>
</div>


<div class="row">

    <div class="col">
        
    </div>
</div>
    


