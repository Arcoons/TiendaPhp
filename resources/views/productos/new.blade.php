@extends('layouts.menu')


@section('contenido')
<div class="row">
    <h1 class="blue-text text-darken-2">Nuevo producto</h1>
</div>
<div class="row">
    <form class="col s8"  method="post" action="{{route('productos.store')}}">
        @csrf
    <div class="row">
        <div class="input-field col s8">            
            <input id="nombre" name="nombre" type="text">
            <label for="nombre">Nombre del producto</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s8">
            <label for="desc">Descripcion</label>
            <textarea name="desc" id="desc" class="materialize-textarea"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s8">
            <label for="precio">Precio</label>
            <textarea name="precio" id="precio" class="materialize-textarea"></textarea>
        </div>
    </div>
    <div class="row">
    <div class="input-field col s8">
        <select name="marca" id="marca">
            @foreach($Marca as $marca)
            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach                          
        </select>
            <label for="marca">Marca</label>
            </div>
        </div>
        <div class="row">  
        <div class="input-field col s8">               
            <select name="categoria" id="categoria">
            @foreach($Categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
            </select>
            <label for="categoria">Categoria</label>
        </div>
    </div>
    <div class="file-field input-field col s8">
      <div class="btn">
        <span>Imagen..</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper ">
        <input class="file-path validate" type="text">
      </div>
    </div>
    </div>
      <div class="row">
        <div class="s8">
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar</button>
        </div>
       </div>
    </form>
</div>
@endsection