<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarFacturaRequest;
use App\Http\Requests\facturaupdateRequest;
use App\Http\Responses\apiResponses;
use App\Models\factura_salida;

class facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $factura_salida = factura_salida::all();
            return  apiResponses::success('Listado de facturas: ',205,$factura_salida);            
        } catch(Exception $e){
            return apiResponses::error('Algo salió mal al llamar las facturas '.$e->getMessage(),500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $devolucion = pedido::create([
                "id_vendedor_factura" => $request -> id_vendedor_factura,
                "descripcion" => $request -> descripcion,
                "fecha" => $request -> fecha,
     
              
            ]);
            return apiResponses::success('devolucion guardada exitosamente',201, $factura_salida);
        }catch(ValidationException $e){
            return apiResponses::error('Algo falló al intentar guardar la devolucion ',422);
        }
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
    public function update(facturaUpdate $request, factura_salida $id_factura)
    {
        try{                  
           
            $id_factura->update($request->all());
            return apiResponses::success('factura actualizada correctamente',200,$id_factura);
        }catch(ModelNotFoundException $e){
            return apiResponses::error('factura no encontrada',404);
        }catch (ValidationException $e) {
            return apiResponses::error('Error de validación: ' . $e->getMessage(), 422);
        }catch(Exception $e){
            return apiResponses::error('Error: '.$e->getMessage(),422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
