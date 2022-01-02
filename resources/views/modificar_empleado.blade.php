<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modificarModal-{{ $value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Datos del Empleado</h4>
            </div>
            <form action="{{ route('updateEmpleado', $value->id) }}" method="POST" enctype="multipart/form-data" >
                {{ @csrf_field() }}
                <div class="modal-body">
                    <label for="nombre_empleado_">Cliente: *</label>
                    <input type="text" name="nombre_empleado_" id="nombre_empleado_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nombre_empleado }}">
                </div>
                <div class="modal-body">
                    <label for="apellidos_empleado_">Apellidos: *</label>
                    <input type="text" name="apellidos_empleado_" id="apellidos_empleado_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->apellidos_empleado }}">

              </div>
              <div class="modal-body">
                <label for="fecha_naci_empleado_">Fecha Nacimiento: *</label>
                <input type="date" name="fecha_naci_empleado_" id="fecha_naci_empleado_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->fecha_naci_empleado }}">

              </div>
              <div class="modal-body">
                <label for="nro_carnet_empleado_">Nro Carnet: *</label>
                <input type="text" name="nro_carnet_empleado_" id="nro_carnet_empleado_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nro_carnet_empleado }}">

              </div>
              <div class="modal-body">
                <label for="direccion_empleado_">Direccion: *</label>
                <input type="text" name="direccion_empleado_" id="direccion_empleado_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->direccion_empleado }}">

              </div>
              <div class="modal-body">
                <label for="telefono_empleado_">Telefono: *</label>
                <input type="text" name="telefono_empleado_" id="telefono_empleado_" placeholder="" class="form-control placeholder-no-fix"  value="{{ $value->telefono_empleado }}">

              </div>
              <div class="modal-body">
                <label for="ocupacion_">Ocupacion: *</label>
                <input type="text" name="ocupacion_" id="ocupacion_" placeholder="" class="form-control placeholder-no-fix"  value="{{ $value->ocupacion }}">

              </div>
              <div class="modal-body">
                <label for="valor_hr_">Valor x hr: *</label>
                <input type="text" name="valor_hr_" id="valor_hr_" placeholder="" class="form-control placeholder-no-fix"  value="{{ $value->valor_hr }}">

              </div>
              <div class="modal-body">
                <label class="control-label col-md-3">Imagen del Empleado</label>
                {{--  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">  --}}
                    <img class="fileupload-new thumbnail" style="width: 200px; height: 150px;" src="imagenes/{{ $value->foto_empleado}}" alt="" />
                {{--  </div>  --}}
                <div class="form-group last">
                    <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            {{--  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="imagenes/{{ $value->foto_empleado}}" alt="" />
                            </div>  --}}
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                <span class="btn btn-theme02 btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar Imagen</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar Imagen</span>
                                    <input type="file" class="default" name="foto_empleado_" />
                                </span>
                                <a href="{{ url('/listar_empleados')}}" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Borrar Imagen</a>
                            </div>
                        </div>
                        <span class="label label-info">NOTA!</span>
                       <span>
                          La miniatura de la imagen adjunta solo es compatible con las versiones más recientes de Firefox, Chrome, Opera, Safari e Internet Explorer 10.
                       </span>
                    </div>
                </div>

              </div>
            </br>
        </br>
    </br>
</br>
</br>
</br>
              <div class="modal-body">
                <label for="estado_empleado_">Estado: *</label>
                <select type="text" name="estado_empleado_" id="estado_empleado_"  class="form-control placeholder-no-fix" >

                    @if ( $value->estado_empleado  == 1)
                    <option value="1" >Inactivo</option>
                    <option value="0" >Activo</option>
                    @endif
                    @if ( $value->estado_empleado  == 0)
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
