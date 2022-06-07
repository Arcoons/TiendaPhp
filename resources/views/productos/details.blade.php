@extends ('layouts.menu')

@section ('contenido')
<div class="row">
    <h1>{{$producto->nombre}}</h1>
</div>
<div class="row">
    <div class="col s8">
        <h3>Marca:{{$producto->marca->nombre}}</h3>
        <ul>
        @if($producto->imagen===null)
                <li>Imagen:<img src="{{asset('img/producto.jpg')}}" alt=""></li>
                @else()
                <li>Imagen:<img src="{{asset('img/'.$producto->imagen)}}" alt=""></li>
                @endif
        </ul>
        
        <ul>
            <li>Descripcion:{{$producto->desc}}</li>
        </ul>
        <ul>
            <li>Precio:{{$producto->precio}}</li>
        </ul>
        <ul>
            <li>Categoria:{{$producto->categoria->nombre}}</li>
        </ul>
    </div>
    <div class="col s4">
        <div class="row">
            <h3>Añadir al carrito</h3>
        </div>
        <div class="row">
            <form action="{{route('cart.store')}}" method="POST">
                @csrf
                <input type="hidden" name="prod_id" value="{{$producto->id}}">
                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="cantidad">
                            Cantidad
                        </label>
                    </div>
                    <div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection