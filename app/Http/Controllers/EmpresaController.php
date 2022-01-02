<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Empleado;
use App\Servicio;
use App\User;
use Illuminate\Support\Facades\Auth;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empresas=Empresa::all();
        $empleados=Empleado::all();
        $servicios=Servicio::all();
        $usuario_logeado=User::find(Auth::User()->id);
        return view('listar_empresa_servicios',['empresas'=>$empresas,'empleados'=>$empleados,'servicios'=>$servicios,'usuario_logeado'=>$usuario_logeado]);
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
          //
          $datos = $request->all();
          //dd($datos);
        Empresa::create([
            "id_servicio"=>$datos["id_servicio"],
            "id_empleado"=>$datos["id_empleado"],
            "nombre_empresa"=>$datos["nombre_empresa"],
            "pagina_web"=>$datos["pagina_web"],
            "hr_atencion"=>$datos["hr_atencion"],
            "region_departamento"=>$datos["region_departamento"],
            "direccion_empresa"=>$datos["direccion_empresa"],
            "telefono_empresa"=>$datos["telefono_empresa"],
            "estado"=>0
        ]);
        return redirect("/listar_empresa_servicios");
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
    public function update(Request $request, $idEmpresa)
    {
        //
        // return $request;
        $empresa_servicio_datos= Empresa::find($idEmpresa);

        $empresa_servicio_datos->id_servicio= $request->id_servicio_;
        $empresa_servicio_datos->id_empleado= $request->id_empleado_;
        $empresa_servicio_datos->nombre_empresa= $request->nombre_empresa_;
        $empresa_servicio_datos->pagina_web= $request->pagina_web_;
        $empresa_servicio_datos->hr_atencion= $request->hr_atencion_;
        $empresa_servicio_datos->region_departamento= $request->region_departamento_;
        $empresa_servicio_datos->direccion_empresa= $request->direccion_empresa_;
        $empresa_servicio_datos->telefono_empresa= $request->telefono_empresa_;
        $empresa_servicio_datos->estado= $request->estado_;
        $empresa_servicio_datos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idempresa)
    {
        //
           //
       $empresa_servicio_eliminar= Empresa::find($idempresa);
       //al cambiar el estado a 1 seria un cliente inactivo
       $empresa_servicio_eliminar->estado=1;
       //delete si deseamos eliminarlo de forma permanente
       //$empresa_servicio_eliminar->delete();
       $empresa_servicio_eliminar->save();
       return redirect()->back();
    }
}
