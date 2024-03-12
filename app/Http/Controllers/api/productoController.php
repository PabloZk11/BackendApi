<?php

namespace App\Http\Controllers\api;


use Exception;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producto;
use App\Http\Requests\guardarrproductoRequest;
use App\Http\Requests\updProductosRequest;
use App\Http\Responses\apiResponses;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return producto::all();
        try {
            $producto = producto::all();
            return apiResponses::success("Listado de productos",200,$producto);
        } catch (Exception $e){
            return apiResponses::error("algo salio mal".$e->getMessage(),404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarrproductoRequest $request)
    {
        try{
            $producto = producto::create([
                "nom_producto" => $request -> nom_producto,
                "precio_unitario" => $request -> precio_unitario,
                "unidades_disponibles" => $request -> unidades_disponibles,
                "marca" => $request -> marca,
                "proveedor_id_proveedor" => $request -> proveedor_id_proveedor,
                "categoria_producto" => $request -> categoria_producto
            ]);
            return apiResponses::success('producto guardado exitosamente',201, $producto);
            }catch (ValidationException $e) {
                return apiResponses::error("Algo fallo al guardar el producto",404);
            }
        }

    /**
     * Display the specified resource.
     */
    public function show($id_producto)
    {
        try{
            $producto = producto::findOrFail($id_producto);
            return apiResponses::success('producto retornado exitosamente: ',200, $producto);
        }catch(ModelNotFoundException $e){
            return apiResponses::error('Fallo al buscar el pedido ',404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updProductosRequest $request, producto $producto)
    {
        try{

            $producto->update($request->all());
                return apiResponses::success('Producto actualizada correctamente',200,$producto);
            }catch(ModelNotFoundException $e){
                return apiResponses::error('Categoria no encontrada',404);
            }catch (ValidationException $e) {
                return apiResponses::error('Error de validación: ' . $e->getMessage(), 404);
            }catch(Exception $e){
                return apiResponses::error('Error: '.$e->getMessage(),422);
            }



        $producto->update($request->all());
        return response()->json([
            "res" => true,
            "mensaje" => "Producto Actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
        return response()->json([
            "res" => true,
            "mensaje" => "Producto Eliminado"
        ]);
    }
}
