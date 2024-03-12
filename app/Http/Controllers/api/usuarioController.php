<?php

namespace App\Http\Controllers\api;
use Exception;
use Illuminate\Validation\ValidationException;
use App\Http\Responses\apiResponses;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\usuario;
use App\Http\Requests\postUsuario;
use App\Http\Requests\updUsuario;

class usuarioController extends Controller
{
    public function index()
    {
        try{
            $usuario = usuario::select('id_usuario', 'id_tdoc_usuario', 'nombre', 'email', 'rol_usuario')->get();
            return apiResponses::success("Listado de usuarios",200,$usuario);
        }catch (Exception $e){
            return apiResponses::error("algo salio mal".$e->getMessage(),404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(postUsuario $request)
    {
        try{
            $usuario = usuario::create([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'contraseña' => $request->contraseña,
                "rol_usuario" => $request->rol_usuario,
                'id_tdoc_usuario' => $request->id_tdoc_usuario,
            ]);
            return apiResponses::success('producto guardado exitosamente',201, $usuario);
        }catch(Exception $e){
            return apiResponses::error("algo salio mal".$e->getMessage(),404);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show($id_usuario)
    {
        try {
            $usuario = Usuario::select('id_usuario', 'nombre', 'email', 'rol_usuario', 'id_tdoc_usuario')->findOrFail($id_usuario);
            return apiResponses::success('Usuario retornado exitosamente: ', 200, $usuario);
        } catch (ModelNotFoundException $e) {
            return apiResponses::error('Fallo al buscar el usuario', 404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(updUsuario $request, usuario $id_usuario)
    {
        try{

            $id_usuario->update($request->all());
                return apiResponses::success('Usuario actualizado correctamente',200,$id_usuario);
            }catch(ModelNotFoundException $e){
                return apiResponses::error('Usuario no encontrada',404);
            }catch (ValidationException $e) {
                return apiResponses::error('Error de validación: ' . $e->getMessage(), 404);
            }catch(Exception $e){
                return apiResponses::error('Error: '.$e->getMessage(),422);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }
}
