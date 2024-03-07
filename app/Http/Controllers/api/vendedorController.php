<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vendedor;
use App\Models\usuario;
use App\Http\Requests\postVendedor;
use App\Http\Requests\updUsuario;

class vendedorController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        return vendedor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(postVendedor $request)
    {
        $usuario = usuario::create([
            'id_tdoc_usuario' => $request->id_tdoc_usuario,
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contraseña' => $request->contraseña,
            "id_rol" => $request->id_rol
        ]);

        return response()->json([
            'res' => true,
            'msg' => 'Usuario y vendedor guardados correctamente'
        ]);
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updUsuario $request, usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            "res" => true,
            "mensaje" => "Usuario Actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
