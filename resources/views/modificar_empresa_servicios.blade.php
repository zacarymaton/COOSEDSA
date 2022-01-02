<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modificarModal-{{ $value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Datos de la Servicio Empresa</h4>
            </div>
            <form action="{{ route('updateEmpresaServicio', $value->id) }}" method="POST">
                {{ @csrf_field() }}
                <div class="modal-body">
                    <label for="nombre_empresa_">Nombre Empresa: *</label>
                    <input type="text" name="nombre_empresa_" id="nombre_empresa_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nombre_empresa }}">
                </div>
                <div class="modal-body">
                    <label for="pagina_web_">Pagina Web: *</label>
                    <input type="text" name="pagina_web_" id="pagina_web_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->pagina_web }}">
                </div>
              <div class="modal-body">
                <label for="hr_atencion_">Hrs de Atencion: *</label>
                <input type="time" name="hr_atencion_" id="hr_atencion_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->hr_atencion }}">
              </div>
              <div class="modal-body">
                <label for="region_departamento_">Region o Departamento: *</label>
                <input type="text" name="region_departamento_" id="region_departamento_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->region_departamento }}">

              </div>
              <div class="modal-body">
                <label for="direccion_empresa_">Direccion: *</label>
                <input type="text" name="direccion_empresa_" id="direccion_empresa_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->direccion_empresa }}">

              </div>
              <div class="modal-body">
                <label for="telefono_empresa_">Telefono: *</label>
                <input type="text" name="telefono_empresa_" id="telefono_empresa_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->telefono_empresa }}">

              </div>
              <div class="modal-body">
                <label for="id_servicio_">Servicios: *</label>
                <select type="text" name="id_servicio_" id="id_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($servicios as $servicio)
                     @if ( $value->id_servicio  == $servicio->id)
                            <option value="{{$value->id_servicio}}">{{$servicio->nombre_servicio}}</option>
                        @endif
                    @endforeach
                    @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre_servicio }}</option>
                     @endforeach
                </select>

              </div>
              <div class="modal-body">
                <label for="id_empleado_">Empleados: *</label>
                <select type="text" name="id_empleado_" id="id_empleado_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($empleados as $empleado)
                     @if ( $value->id_empleado  == $empleado->id)
                            <option value="{{$value->id_empleado}}">{{$empleado->nombre_empleado}}</option>
                        @endif
                    @endforeach
                    @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre_empleado }}</option>
                     @endforeach
                </select>

              </div>
              <div class="modal-body">
                <label for="estado_">Estado: *</label>
                <select type="text" name="estado_" id="estado_"  class="form-control placeholder-no-fix" >

                    @if ( $value->estado  == 1)
                    <option value="1" >Inactivo</option>
                    <option value="0" >Activo</option>
                    @endif
                    @if ( $value->estado  == 0)
                    <option value="0" >Activo</option>
                    <option value="1" >Inactivo</option>
                    @endif

                </select>


              </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                    <button class="btn btn-theme" type="submit"  >Registrar</button>
                </div>
            </form>
        </div>
     </div>
 </div>
<!-- modal -->
