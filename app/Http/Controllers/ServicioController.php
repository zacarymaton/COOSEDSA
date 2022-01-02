<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\User;
use Illuminate\Support\Facades\Auth;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicios=Servicio::all();
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_servicios',['servicios'=>$servicios,'usuario_logeado'=>$usuario_logeado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $datos = $request->all();
          //dd($datos);
        Servicio::create([
            "nombre_servicio"=>$datos["nombre_servicio"],
            "categoria_servicio"=>$datos["categoria_servicio"],
            "hrs_trabajo"=>$datos["hrs_trabajo"],
            "costo_servicio"=>$datos["costo_servicio"],
            "descripcion_servicio"=>$datos["descripcion_servicio"],
            "estado"=>$datos["estado"]
        ]);
        return redirect("/listar_servicios");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idServicio)
    {
        //
        $servicio_datos= Servicio::find($idServicio);

        $servicio_datos->nombre_servicio= $request->nombre_servicio_;
        $servicio_datos->categoria_servicio= $request->categoria_servicio_;
        $servicio_datos->hrs_trabajo= $request->hrs_trabajo_;
        $servicio_datos->costo_servicio= $request->costo_servicio_;
        $servicio_datos->descripcion_servicio= $request->descripcion_servicio_;
        $servicio_datos->estado= $request->estado_;
        $servicio_datos->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idServicio)
    {
       //
       $servicio_eliminar= Servicio::find($idServicio);
       //al cambiar el estado a 1 seria un cliente inactivo
       $servicio_eliminar->estado=1;
       //delete si deseamos eliminarlo de forma permanente
       //$cliente_eliminar->delete();
       $servicio_eliminar->save();
       return redirect()->back();
    }
}
