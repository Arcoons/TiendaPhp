<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar la variable de session
        //'cart'
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Estructurar la información del producto
        //En un arreglo
        $producto = [
                        [
                            "nombre" => $request->prod_nom,
                            "id" => $request->prod_id,
                            "cantidad"=> $request->cantidad,
                            "precio"=> $request->precio
                        ]
                    ];
        if(!session('cart')){
            //no existe la variablle de session
            //Crear el estado de session
            $auxiliar[] = $producto;
            session(['cart' => $auxiliar]);
        }else{
            //existe la variable de session
            //extraer el contenido de la variable de session 'cart'
            $auxiliar = session('cart');
            //agregar el nuevo producto al arreglo
            $auxiliar[] = $producto;
            //volver a crear la session 'cart'
            //con el cotenido añadido
            session(['cart' => $auxiliar]);
            
        }

        //redireccionar al catalogo de productos
        //mensaje de exito
        return redirect('producto')->with('mensaje', 'producto añadio al carro');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //eliminar 
       session()->forget('cart');
       return redirect('cart')->with('mensaje', "Carro eliminado");
    }
}
