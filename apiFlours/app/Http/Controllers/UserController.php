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
            'mensaje' => "Usuario Registrado"
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


// public function index() {
//     $users = User::all();
//     return response()->json($users);
// }

// public function show($id) {
//     $user = User::find($id);
//     if (isset($user)) {
//         return response()->json([
//             'data' => $user,
//             'mensaje' => "Usuario encontrado"
//         ],201);
//     } else {
//         return response()->json([
//             'error' => true,
//             'mensaje' => "Usuario no encontrado"
//         ]);
//     }
// }

// public function store(Request $request) {
//     try {
//         $inputs = $request->all();
//         $validator = Validator::make($inputs, [
//             'name' => 'required',
//             'lastname' => 'required',
//             'email' => 'required|email|unique:users',
//             'password' => 'required',
//             'role' => 'required|in:1,2,3,4',
//             'document' => 'required|integer|min:10000000|max:99999999'
//         ], [
//             'required' => 'El :attribute es requerido',
//             'email' => 'El :attribute no es del formato correcto',
//             'unique' => 'El :attribute ya esta registrado',
//             'integer' => 'El :attribute no es un numero entero'
//         ]);
//         if ($validator->fails()) {
//             return json_encode($validator->errors());
//         } else {
//             $inputs['password'] = Hash::make($inputs['password']);
//             $user = User::create($inputs);
//             return response()->json([
//                 'data' => $user,
//                 'mensaje' => "Registrado con exito"
//             ],204);
//         }
//     } catch (\Exception $e) {
//         return json_encode($e);
//     }
// }

// public function update(Request $request, $id) {
//     try {
//         $user = User::find($id);
//         $upUser = $request->input();
//         if (isset($user)) {
//             $validator = Validator::make($upUser, [
//                 'name' => 'required',
//                 'lastname' => 'required',
//                 'email' => 'required|email|unique:users',
//                 'password' => 'required',
//                 'role' => 'required|in:1,2,3,4',
//                 'document' => 'required|integer|min:10000000|max:99999999'
//             ], [
//                 'required' => 'El :attribute es requerido',
//                 'email' => 'El :attribute no es del formato correcto',
//                 'unique' => 'El :attribute ya esta registrado',
//                 'integer' => 'El :attribute no es un numero entero'
//             ]);
//             if ($validator->fails()) {
//                 return json_encode($validator->errors());
//             } else {
//                 $upUser['password'] = Hash::make($upUser['password']);
//                 if ($user->update($upUser)) {
//                     return response()->json([
//                         'data' => $user,
//                         'mensaje' => "Usuario actualizado"
//                     ],204);
//                 } else {
//                     return response()->json([
//                         'error' => true,
//                         'mensaje' => "Usuario no actualizado"
//                     ]);
//                 }
//             }
//         } else {
//             return response()->json([
//                 'error' => true,
//                 'mensaje' => "Usuario no encontrado"
//             ]);
//         }
//     } catch (\Exception $e) {
//         return json_encode($e);
//     }
// }

// public function destroy($id) {
//     $user = User::find($id);

//     if (isset($user)) {
//         $res = User::destroy($id);
//         if ($res) {
//             return response()->json([
//                 'data' => $user,
//                 'mensaje' => "Usuario eliminado"
//             ],204);
//         } else {
//             return response()->json([
//                 'error' => true,
//                 'mensaje' => "Usuario no eliminado"
//             ]);
//         }
//     } else {
//         return response()->json([
//             'error' => true,
//             'mensaje' => "Usuario no encontrado"
//         ]);
//     }
// }

// public function __construct()
// {
// $this->middleware('access')->only(['show', 'update']);
// }
