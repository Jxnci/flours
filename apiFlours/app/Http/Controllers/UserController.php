<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $inputs = $request->input();
        $e = User::create($inputs);
        return response()->json([
            'data' => $e,
            'mensaje' => "Actualizado con exito"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $e = User::find($id);
        if (isset($e)) {
            return response()->json([
                'data' => $e,
                'mensaje' => "Usuario encontrado"
            ]);
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Usuario no encontrado"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $e = User::find($id);
        if (isset($e)) {
            $e->name = $request->name;
            $e->lastname = $request->lastname;
            $e->email = $request->email;
            $e->password = Hash::make($request->password);
            if ($e->save()) {
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Usuario actualizado"
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'mensaje' => "Usuario no actualizado"
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Usuario no encontrado"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $e = User::find($id);
        if (isset($e)) {
            $res = User::destroy($id);
            if ($res) {
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Usuario eliminado"
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'mensaje' => "Usuario no eliminado"
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => "Usuario no encontrado"
            ]);
        }
    }
}
