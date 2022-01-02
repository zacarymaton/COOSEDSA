<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Empleado;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados=Empleado::all();
        // dd($empleados);
        // return json_encode($empleados);
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_empleados',['empleados'=>$empleados,'usuario_logeado'=>$usuario_logeado]);
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
        // return $request;
        // return $request->file('foto_empleado');
        // return response()->json([
        //     $request->all(), 'dato_foto' => $request->file('foto_empleado')->getClientOriginalName()
        //  ]);
        if($request->file('foto_empleado')){
            $archivo=$request->file('foto_empleado');
            $nombre_unico=time().$archivo->getClientOriginalName();
            $archivo->move( public_path().'/imagenes', $nombre_unico);
            // return $nombre_unico;
        }
        //
        $datos = $request->all();
          //dd($datos);
        Empleado::create([
            "nombre_empleado"=>$datos["nombre_empleado"],
            "apellidos_empleado"=>$datos["apellidos_empleado"],
            "fecha_naci_empleado"=>date('Y-m-d', strtotime($datos["fecha_naci_empleado"])),
            "nro_carnet_empleado"=>$datos["nro_carnet_empleado"],
            "direccion_empleado"=>$datos["direccion_empleado"],
            "telefono_empleado"=>$datos["telefono_empleado"],
            "ocupacion"=>$datos["ocupacion"],
            "valor_hr"=>$datos["valor_hr"],
            "foto_empleado"=>$nombre_unico,
            "estado_empleado"=>$datos["estado_empleado"]
        ]);
        return redirect("/listar_empleados");

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
    public function update(Request $request, $idEmpleado)
    {
        //        return response()->json([
        //     $request->all(), 'dato_foto' => $request->file('foto_empleado')->getClientOriginalName()
        //  ]);



        $empleado_datos= Empleado::find($idEmpleado);

        $empleado_datos->nombre_empleado= $request->nombre_empleado_;
        $empleado_datos->apellidos_empleado= $request->apellidos_empleado_;
        $empleado_datos->fecha_naci_empleado= date('y-m-d', strtotime($request->fecha_naci_empleado_));
        $empleado_datos->nro_carnet_empleado= $request->nro_carnet_empleado_;
        $empleado_datos->direccion_empleado= $request->direccion_empleado_;
        $empleado_datos->telefono_empleado= $request->telefono_empleado_;
        $empleado_datos->ocupacion= $request->ocupacion_;
        $empleado_datos->valor_hr= $request->valor_hr_;
        if($request->file('foto_empleado_')){
            $archivo=$request->file('foto_empleado_');
            $nombre_unico=time().$archivo->getClientOriginalName();
            $archivo->move( public_path().'/imagenes', $nombre_unico);
            $empleado_datos->foto_empleado= $nombre_unico;
        }
        $empleado_datos->estado_empleado= $request->estado_empleado_;
        $empleado_datos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEmpleado)
    {
        //
        //
        $empleado_eliminar= Empleado::find($idEmpleado);
        //al cambiar el estado a 1 seria un cliente inactivo
        $empleado_eliminar->estado_empleado=1;
        //delete si deseamos eliminarlo de forma permanente
        //$cliente_eliminar->delete();
        $empleado_eliminar->save();
        return redirect()->back();
    }
}
