<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modificarModal-{{ $value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Datos del Servicio</h4>
            </div>
            <form action="{{ route('updateServicio', $value->id) }}" method="POST">
                {{ @csrf_field() }}
                <div class="modal-body">
                    <label for="nombre_servicio_">Nombre del Servicio: *</label>
                    <input type="text" name="nombre_servicio_" id="nombre_servicio_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nombre_servicio }}">
                </div>
                <div class="modal-body">
                    <label for="categoria_servicio_">Categoria del Servicio: *</label>
                    <select type="text" name="categoria_servicio_" id="categoria_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                        @if ( $value->categoria_servicio  == "alta")
                        <option value="alta">Categoria Alta</option>
                        <option value="estandar" >Categoria Estandar</option>
                        <option value="basica" >Categoria Basica</option>
                        @endif
                        @if ( $value->categoria_servicio  == "estandar")
                        <option value="estandar" >Categoria Estandar</option>
                        <option value="basica" >Categoria Basica</option>
                        <option value="alta">Categoria Alta</option>
                        @endif
                         @if ( $value->categoria_servicio  == "basica")
                        <option value="basica" >Categoria Basica</option>
                        <option value="alta">Categoria Alta</option>
                        <option value="estandar" >Categoria Estandar</option>
                        @endif
                      </select>
              </div>
              <div class="modal-body">
                <label for="hrs_trabajo_">Hrs de Trabajo: *</label>
                <input type="time" name="hrs_trabajo_" id="hrs_trabajo_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->hrs_trabajo }}">
              </div>
              <div class="modal-body">
                <label for="costo_servicio_">Costo del Servicio: *</label>
                <input type="text" name="costo_servicio_" id="costo_servicio_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->costo_servicio }}">

              </div>
              <div class="modal-body">
                <label for="descripcion_servicio_">Descripcion: *</label>
                <input type="text" name="descripcion_servicio_" id="descripcion_servicio_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->descripcion_servicio }}">

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
