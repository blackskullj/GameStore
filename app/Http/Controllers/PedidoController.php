<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Cliente;
use App\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::with('clientes:id,nombre', 'productos:id,nombre');
        return view('pedidos.pedidosIndex', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::pluck('nombre', 'id');
        $productos = Producto::pluck('nombre', 'id');
        return view('pedidos.pedidosForm', compact('clientes', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|integer|min:1',
            'fechaPedido' => 'required'
            ]);
            
        $pedido = Pedido::create($request->all());
        $pedido->productos()->attach($request->producto_id);
        $cliente = Cliente::find($request->cliente_id);

        $cliente->pedidos()->save($pedido);

        return redirect()->route('pedido.show', $pedido->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.pedidosShow', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $productos = Producto::pluck('nombre', 'id');
        $seleccionados = $pedido->productos()->pluck('id');
        return view('pedidos.pedidosForm', compact('productos', 'pedido', 'seleccionados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->fechaPedido = $request->fechaPedido;
        $pedido->save();

        $pedido->productos()->sync($request->producto_id);
        return redirect()->route('pedido.show', $pedido->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
