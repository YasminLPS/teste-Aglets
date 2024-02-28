<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
{
    $user = new User;
    $user->nome = $request->nome;
    $user->idade = $request->idade;
    $user->sexo = $request->sexo;
    $user->altura = $request->altura;
    $user->save();

    return response()->json($user, 201);
}

}
