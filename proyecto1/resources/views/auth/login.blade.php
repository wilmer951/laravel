@extends('layouts.templLogin')

@section('contenido')

<div class="containerLogin">
<h1 class="text-center py-10">Login</h1>

<div class="row">

    <div class="col-lg-6 col-sm-12 mx-auto py-3">
        <form class="form bg-white shadow rounded py-10 px-4" action="{{ route('login') }}" method="POST">
            @csrf
        
        <div class="form-group">
        <div class="row mb-3 ">
        
            <div class="col">
                <input class="form-control bg-light shadow-sm boder-0 " type="email" name="email" placeholder="Correo">
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row mb-3">
        
            <div class="col">
                <input class="form-control bg-light shadow-sm boder-0" type="password" name="password" placeholder="Contraseña">
            </div>
        </div>
        </div>
        
        <div class="row py-3">
        
            
                <input class="bnt btn-primary btn-lg btn-block" type="submit" value="ingresar">
            
        </div>
        
        
        
        
        
        </form>
        
    </div>
</div>



</div>

@endsection







