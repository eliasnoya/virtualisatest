<?php

use Illuminate\Support\Facades\Route;


/**
 * CONFIGURE ACCOUNTS DATABASE
 */
ORM::configure("connection_string", "mysql:host=127.0.0.1;dbname=virtualiza");
ORM::configure("username",          "root");
ORM::configure("password",          "");
ORM::configure("error_mode",        PDO::ERRMODE_EXCEPTION);
ORM::configure("driver_options", [
    PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES \'UTF8\'',
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC
]);
ORM::configure("logging", true);

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

Route::get('/', function () {
    return view('layout');
});

Route::get('/empleados', function() {

    var_dump(ORM::for_table('empleados_detalle')->find_many());
    $html = '';
    foreach (ORM::for_table('empleados_detalle')->find_many() as $e) {
        $html .= $e->apellido . '<br/>';
    }
    var_dump($html);
    return $html;
    // return 'Empleados';
});

Route::get('/empleados/alta', function() {
    $tiposDocumento     =   ORM::for_table('tipo_documento')->find_many();
    $provincias         =   ORM::for_table('provincia')->find_many();
    // var_dump($provincias); die();
    return view('record', ['tipos' => $tiposDocumento, 'provincias' => $provincias]);
});

Route::post('/empleados/guardar', function() {
    $posts = filter_input_array(INPUT_POST);
    ORM::configure('id_column', 'id_legajo');
    
    $e = ORM::for_table('empleados')->create();
    $e->set($posts);
    try {
        $e->save();
        return 'Exito se ha guardado el empleado bajo el legajo #'.$e->id();
    } catch (Exception $ex) {
        return 'Error al guardar empleado: ' . $ex->getMessage() . ' ' . ORM::get_last_query();
    }
});
