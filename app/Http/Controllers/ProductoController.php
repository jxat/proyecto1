<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $productos=Producto::all();
       $productos=Producto::orderBy('id')->get();
        return view('ventas.producto',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.productoCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Funcion guardar
        $productos= new Producto;
    $productos -> nombre = $request->nombre;
    $productos -> codigo = $request->codigo;
    $productos -> categoria = $request->categoria;
    $productos -> precio = $request->precio;
    $productos -> cantidad = $request->cantidad;
    $productos -> save();
    return redirect('/producto');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // funcion mostrar detalle
       $productos=Producto::find($id);
       return view ('ventas.productoDetalle',compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $productos=Producto::find($id);

        return view('ventas.productoEditar',compact('productos'));
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
        $productos= Producto::find($id);
        $productos -> nombre = $request->nombre;
        $productos -> codigo = $request->codigo;
        $productos -> categoria = $request->categoria;
        $productos -> precio = $request->precio;
        $productos -> cantidad = $request->cantidad;
        $productos -> save();
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //funcion eliminar
        $productos=Producto::find($id);
        $productos->delete();
        return redirect('/producto');
    }
}
