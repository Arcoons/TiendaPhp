@extends ('layouts.menu')

@section ('contenido')
    @if(session('mensaje'))
    <div class="row">
        <strong>
            {{session('mensaje')}}
            <a href="{{route('cart.index')}}">
                Ir al carrito
            </a>
        </strong>
    </div>
    @endif
<div class="row">
    <h1>Catálogo de productos</h1>
</div>
@foreach($productos as $producto)
<div class="row">
    <div class="col s8">
        <div class="card">
            <div class="card-image">
                @if($producto->imagen===null)
                <img src="{{asset('img/producto.jpg')}}" alt="">
                @else()
                <img src="{{asset('img/'.$producto->imagen)}}" alt="">
                @endif
                <span class="card-title" style="color:#000000">{{$producto->nombre}}</span>
               
               
            </div>
            <div class="card-content">
                <p>{{$producto->desc}}</p>
            </div>
            <div class="card-acction">
                <a href="{{route('producto.show', $producto->id)}}">
                    VER DETALLES
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection