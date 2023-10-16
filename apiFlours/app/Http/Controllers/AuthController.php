<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
  public function register(Request $request) {
    $rules = [
      'name' => 'required|string|max:255',
      'lastname' => 'required|string|max:255',
      'email' => 'required|string|email|unique:users|max:255',
      'password' => 'required|string|min:8'
    ];
    $validator = Validator::make($request->input(), $rules);
    if ($validator->fails()) {
      return response()->json(['status' => false, 'errors' => $validator->errors()->all()], 400);
    }
    $user = User::create([
      'name' => $request->name,
      'lastname' => $request->lastname,
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);
    return response()->json([
      'status' => true,
      'message' => 'Te has registrado Satisfactoriamente',
      'token' => $user->createToken('API TOKEN')->plainTextToken,
      'type_token' => 'Bearer'
    ], 200);
  }


  public function login(Request $request) {
    $rules = [
      'email' => 'required|email',
      'password' => 'required'
    ];
    $validator = Validator::make($request->input(), $rules);
    if ($validator->fails()) {
      return response()->json(['status' => false, 'errors' => $validator->errors()->all()], 401);
    }
    if (!Auth::attempt($request->only('email', 'password'))) {
      return response()->json([
        'status' => false,
        'message' => 'No esta autorizado'
      ], 401);
    }
    $user = User::where('email', $request['email'])->firstOrFail();
    $token = $user->createToken('API TOKEN')->plainTextToken;
    return response()->json([
      'status' => true,
      'message' => 'Hola' . $user->name . ' ' . $user->lastname,
      'token' => $token,
      'type_token' => 'Bearer',
      'user' => $user
    ], 200);
  }

  public function logout(Request $request) {
    $request->user()->tokens()->delete();
    return response()->json([
      'status' => true,
      'message' => 'Has cerrado satisfactoriamente tu sesion',
    ], 200);
  }
}
