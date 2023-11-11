<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index() {
    $products = Category::where('user_id', Auth::user()->id)->get();
    return response()->json($products, 200);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    $inputs = $request->all();
    $inputs['user_id'] = Auth::user()->id;

    $validator = Validator::make($inputs, [
      'name' => 'required',
    ], [
      'required' => 'El nombre es requerido',
    ]);
    if ($validator->fails()) {
      return response()->json([
        'error' => true,
        'mensaje' => "El nombre es requerido"
      ]);
    } else {
      $data = Category::create($inputs);
      return response()->json([
        'data' => $data,
        'mensaje' => "Categoria agregada!"
      ]);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id) {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id) {
    $e = Category::find($id);
    if (isset($e)) {
      $res = Category::destroy($id);
      if ($res) {
        return response()->json([
          'data' => $e,
          'mensaje' => "Categoria eliminada"
        ]);
      } else {
        return response()->json([
          'error' => true,
          'mensaje' => "Categoria no eliminada"
        ]);
      }
    } else {
      return response()->json([
        'error' => true,
        'mensaje' => "Categoria no encontrado"
      ]);
    }
  }
}
