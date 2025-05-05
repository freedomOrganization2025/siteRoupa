<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidoController extends Controller
{
    public function index()
    {
        return response()->json(ItensPedido::all());
    }

    public function store(Request $request)
    {
        $itemPedido = ItensPedido::create($request->all());
        return response()->json($itemPedido, 201);
    }

    public function show($id)
    {
        return response()->json(ItensPedido::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $itemPedido = ItensPedido::findOrFail($id);
        $itemPedido->update($request->all());
        return response()->json($itemPedido);
    }

    public function destroy($id)
    {
        ItensPedido::destroy($id);
        return response()->json(['message' => 'Item do pedido deletado com sucesso']);
    }
}

