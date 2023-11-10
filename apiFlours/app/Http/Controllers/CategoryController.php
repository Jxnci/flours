<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    $inputs = $request->input();
    $data = Category::create($inputs);
    return response()->json([
      'data' => $data,
      'mensaje' => "Categoria agregada!"
    ]);
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
    //
  }
}
