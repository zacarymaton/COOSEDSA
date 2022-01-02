<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Servicio;
use App\Empleado;
use Illuminate\Support\Facades\Auth;

//Rutas de Inicio
Route::get('/',function () {
    return view('login');
});
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Rutas de Usuario
Route::group(['middleware' => 'EsAdmin'], function () {
    Route::get('index', 'MenuPrincipalController@index')->name('index');
    Route::get('form_validation', 'ClienteController@index')->name('form_validation');
    Route::get('listar_servicios', 'ServicioController@index')->name('listar_servicios');
    Route::get('listar_empleados', 'EmpleadoController@index')->name('listar_empleados');
    Route::get('listar_empresa_servicios', 'EmpresaController@index')->name('listar_empresa_servicios');

    Route::post('updateCliente/{id}','ClienteController@update')->name('updateCliente');
    Route::post('updateServicio/{id}','ServicioController@update')->name('updateServicio');
    Route::post('updateEmpleado/{id}','EmpleadoController@update')->name('updateEmpleado');
    Route::post('updateEmpresaServicio/{id}','EmpresaController@update')->name('updateEmpresaServicio');

    Route::post('deleteCliente/{id}','ClienteController@destroy')->name('deleteCliente');
    Route::post('deleteServicio/{id}','ServicioController@destroy')->name('deleteServicio');
    Route::post('deleteEmpleado/{id}','EmpleadoController@destroy')->name('deleteEmpleado');
    Route::post('deleteEmpesaServicio/{id}','EmpresaController@destroy')->name('deleteEmpesaServicio');


    Route::get('/form_component', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        return view('registrar_cliente',['usuario_logeado'=>$usuario_logeado]);
    });
    Route::get('/registrar_servicio', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        return view('registrar_servicio',['usuario_logeado'=>$usuario_logeado]);
    });
    Route::get('/registrar_personal', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        $servicios=Servicio::all();
        return view('registrar_personal',['usuario_logeado'=>$usuario_logeado,'servicios'=>$servicios]);
    });
    Route::get('/registrar_empresa_servicio', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        $servicios=Servicio::all();
        $empleados=Empleado::all();
        return view('registrar_empresa_servicio',['usuario_logeado'=>$usuario_logeado,'servicios'=>$servicios,'empleados'=>$empleados]);
    });
    Route::get('/registrar_solicitudes', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        return view('registrar_solicitudes',['usuario_logeado'=>$usuario_logeado]);
    });
    Route::get('/registrar_trabajo', function () {
        $usuario_logeado=User::find(Auth::User()->id);
        return view('registrar_trabajo',['usuario_logeado'=>$usuario_logeado]);
    });
    Route::get('/advanced_form_components', function () {
        return view('modificar_cliente');
    });
    // Route::get('/form_validation', function () {
    //     return view('listar_clientes');
    // });
    Route::get('/general', function () {
        return view('general');
    });
    Route::resource('registrar_cliente', 'ClienteController');
    Route::resource('registrar_servicio_nuevo', 'ServicioController');
    Route::resource('registrar_empleado', 'EmpleadoController');
    Route::resource('registrar_empresa', 'EmpresaController');
    Route::get('/buttons', function () {
        return view('buttons');
    });
    Route::get('/panels', function () {
        return view('panels');
    });
    Route::get('/font_awesome', function () {
        return view('font_awesome');
    });
    Route::get('/grids', function () {
        return view('grids');
    });
    Route::get('/calendar', function () {
        return view('calendar');
    });
    Route::get('/gallery', function () {
        return view('gallery');
    });
    Route::get('/todo_list', function () {
        return view('todo_list');
    });
    Route::get('/dropzone', function () {
        return view('dropzone');
    });
    Route::get('/inline_editor', function () {
        return view('inline_editor');
    });
    Route::get('/file_upload', function () {
        return view('file_upload');
    });
    Route::get('/blank', function () {
        return view('blank');
    });
    Route::get('/lock_screen', function () {
        return view('lock_screen');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/invoice', function () {
        return view('invoice');
    });
    Route::get('/pricing_table', function () {
        return view('pricing_table');
    });
    Route::get('/faq', function () {
        return view('faq');
    });
    Route::get('/404', function () {
        return view('404');
    });
    Route::get('/500', function () {
        return view('500');
    });

     Route::get('/form_component2', function () {
        return view('form_component');
    });


    Route::get('/basic_table', function () {
        return view('basic_table');
    });
    Route::get('/responsive_table', function () {
        return view('responsive_table');
    });
    Route::get('/advanced_table', function () {
        return view('advanced_table');
    });
    Route::get('/inbox', function () {
        return view('inbox');
    });
    Route::get('/morris', function () {
        return view('morris');
    });
    Route::get('/chartjs', function () {
        return view('chartjs');
    });
    Route::get('/flot_chart', function () {
        return view('flot_chart');
    });
    Route::get('/xchart', function () {
        return view('xchart');
    });
    Route::get('/lobby', function () {
        return view('lobby');
    });Route::get('/chat_room', function () {
        return view('chat_room');
    });
    Route::get('/google_maps', function () {
        return view('google_maps');
    });
    Route::get('/firebase', 'FirebaseController@index');
});

