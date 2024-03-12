<?php

namespace App\Http\Controllers\api;
use App\Models\registro_salida;
use App\Http\Requests\GuardarSalidaRequest;
use Exception;
use Illuminate\Validation\ValidationException;
use App\Http\Responses\apiResponses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class re_salidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $registro_salida = registro_salida::all();
            return apiResponses::success("Listado de salidas",200,$registro_salida);
        } catch (Exception $e){
            return apiResponses::error("algo salio mal".$e->getMessage(),404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarSalidaRequest $request)
    {
        try{
            $registro_salida = registro_salida::create([
                "unidades" => $request -> unidades,
                "id_factura_salida" => $request -> id_factura_salida,
                "id_producto" => $request -> id_producto,
            ]);
            return apiResponses::success('salida guardada exitosamente',201, $registro_salida);
            }catch (ValidationException $e) {
                return apiResponses::error("Algo fallo al guardar la salida",404);
            }
        }

    /**
     * Display the specified resource.
     */
    public function show($id_salida)
    {
        try{
            $registro_salida = registro_salida::findOrFail($id_salida);  
            return apiResponses::success('salida retornada exitosamente: ',200, $registro_salida);
        }catch(ModelNotFoundException $e){
            return apiResponses::error('Fallo al buscar la salida ',404);
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
