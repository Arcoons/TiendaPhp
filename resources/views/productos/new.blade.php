@extends('layouts.menu')


@section('contenido')
<div class="row">
    <h1 class="blue-text text-darken-2">Nuevo producto</h1>
</div>
<div class="row">
    <form class="col s8"  method="post" action="">
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
    <divp class="row">
                    <div class="input-field col s8">
                        <select>
                            <option value="" disabled selected>Escoje marca</option>
                            
                        </select>
                        <label>Selección de marca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <select>
                            <option value="" disabled selected>Escoje categoría</option>

                        </select>
                        <label>Selección de categoría</label>
                    </div>
                </div>
                <div class="row">
                    <div class="s8">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        </button>

                    </div>

                </div>
    </form>
</div>
@endsection