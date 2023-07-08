<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $inputs = $request->input();
        $e = Product::create($inputs);
        return response()->json([
            'data' => $e,
            'mensaje' => "Producto agregado con exito"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $e = Product::find($id);
        if (isset($e)) {
            return response()->json([
                'data' => $e,
                'mensaje' => "Producto encontrado"
            ]);
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Producto no encontrado"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $e = Product::find($id);
        if (isset($e)) {
            $e->name = $request->name;
            $e->stock = $request->stock;
            $e->category_id = $request->category_id;
            $e->user_id = $request->user_id;
            if ($e->save()) {
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Producto actualizado"
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'mensaje' => "Producto no actualizado"
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Producto no encontrado"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $e = Product::find($id);
        if (isset($e)) {
            $res = Product::destroy($id);
            if ($res) {
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Producto eliminado"
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'mensaje' => "Producto no eliminado"
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Producto no encontrado"
            ]);
        }
    }
}
