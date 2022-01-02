<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes=Cliente::all();
        // dd($clientes);
        // return json_encode($clientes);
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_clientes',['clientes'=>$clientes,'usuario_logeado'=>$usuario_logeado]);

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
        // dd($datos);
        Cliente::create([
            "nombre"=>$datos["nombre"],
            "apellidos"=>$datos["apellidos"],
            "fecha_naci"=>date('Y-m-d', strtotime($datos["fecha_naci"])),
            "nro_carnet"=>$datos["nro_carnet"],
            "direccion"=>$datos["direccion"],
            "telefono"=>$datos["telefono"],
            "estado"=>0
        ]);
        return redirect("/form_validation");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCliente)
    {
        //
        $cliente_datos= Cliente::find($idCliente);

        $cliente_datos->nombre= $request->nombre_;
        $cliente_datos->apellidos= $request->apellidos_;
        $cliente_datos->fecha_naci= date('y-m-d', strtotime($request->fecha_naci_));
        $cliente_datos->nro_carnet= $request->nro_carnet_;
        $cliente_datos->direccion= $request->direccion_;
        $cliente_datos->telefono= $request->telefono_;
        $cliente_datos->estado= $request->estado_;
        $cliente_datos->save();

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCliente)
    {
        //
        $cliente_eliminar= Cliente::find($idCliente);
        //al cambiar el estado a 1 seria un cliente inactivo
        $cliente_eliminar->estado=1;
        //delete si deseamos eliminarlo de forma permanente
        //$cliente_eliminar->delete();
        $cliente_eliminar->save();
        return redirect()->back();
    }
}
