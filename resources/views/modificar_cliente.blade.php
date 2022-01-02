<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modificarModal-{{ $value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Datos del Cliente</h4>
            </div>
            <form action="{{ route('updateCliente', $value->id) }}" method="POST">
                {{ @csrf_field() }}
                <div class="modal-body">
                    <label for="nombre_">Cliente: *</label>
                    <input type="text" name="nombre_" id="nombre_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nombre }}">
                    {{--  <p>Ingrese un Nombre de Usuario</p>
                    <input type="text" id="user_new" name="user_new" placeholder="nombre de usuario" autocomplete="off" class="form-control placeholder-no-fix">  --}}
                </div>
                <div class="modal-body">
                    <label for="apellidos_">Apellidos: *</label>
                    <input type="text" name="apellidos_" id="apellidos_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->apellidos }}">
                  {{--  <p>Ingrese su contraseña de usuario.</p>
                  <input type="password" id="password_new" name="password_new" placeholder="ingrese su contraseña de Usuario" autocomplete="off" class="form-control placeholder-no-fix">  --}}

              </div>
              <div class="modal-body">
                <label for="fecha_naci_">Fecha Nacimiento: *</label>
                <input type="date" name="fecha_naci_" id="fecha_naci_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->fecha_naci }}">

              </div>
              <div class="modal-body">
                <label for="nro_carnet_">Nro Carnet: *</label>
                <input type="text" name="nro_carnet_" id="nro_carnet_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->nro_carnet }}">

              </div>
              <div class="modal-body">
                <label for="direccion_">Direccion: *</label>
                <input type="text" name="direccion_" id="direccion_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->direccion }}">

              </div>
              <div class="modal-body">
                <label for="telefono_">Telefono: *</label>
                <input type="text" name="telefono_" id="telefono_" placeholder="" class="form-control placeholder-no-fix"  value="{{ $value->telefono }}">

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


{{--  <div id="modal_edit" class="modal">
    <div class="modal-content">
        <h4>Modificar datos del Cliente</h4>
        <div class="row">
            <form id="form_edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <input type="hidden" name="cliente_id" id="cliente_id">
                <div class="row">
                    <div class="col s12">
                        <label for="nombre_">Cliente: *</label>
                        <input type="text" name="nombre_" id="nombre_" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="apellidos">Apellidos: *</label>
                        <input type="text" name="apellidos_" id="apellidos_" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="fecha_">Fecha Nacimiento: *</label>
                        <input type="date" name="fecha_" id="fecha_" placeholder="" >
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="nro_carnet">Nro Carnet: *</label>
                        <input type="text" name="nro_carnet_" id="nro_carnet_" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="direccion">Direccion: *</label>
                        <input type="text" name="direccion_" id="direccion_" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="telefono">Telefono: *</label>
                        <input type="text" name="telefono_" id="telefono_" placeholder="">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        <button class="modal-action waves-effect waves-red btn-flat" style="background-color: red;
    color: white;" type="button" onclick="update()">Actualizar</button>
    </div>
</div>  --}}
