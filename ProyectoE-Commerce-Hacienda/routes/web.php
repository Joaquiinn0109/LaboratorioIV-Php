<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\GetAllUsersController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\AdminUserController;

use App\Http\Controllers\FieldsController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SellController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    //Route::get('/', [HomeController::class, 'Home'])->name('home');
    //Configuracion de usuarios
    Route::get('/user', [ProfileController::class, 'show'])->name('config.show');
    Route::get('/user/edit', [ProfileController::class, 'edit'])->name('config.edit');
    Route::put('/user', [ProfileController::class, 'update'])->name('config.update');
    //Perfil de usuarios
    Route::post('/person/update', [PersonController::class, 'updatePerson'])->name('person.update');
    Route::get('/person', [PersonController::class, 'show'])->name('person.show');
    //Campos de usuarios
    Route::get('/addfields', [FieldsController::class, 'field'])->name('addfields.show');
    Route::post('/addfieldspost', [FieldsController::class, 'addFields'])->name('addfields.post');
    Route::get('/fields', [FieldsController::class, 'showFields'])->name('fields.show');
    Route::get('/fields/edit/{id}', [FieldsController::class, 'editField'])->name('fields.edit');
    Route::put('/fields/update/{id}', [FieldsController::class, 'updateField'])->name('fields.update');
    Route::delete('/fields/destroy/{id}', [FieldsController::class, 'destroyField'])->name('fields.destroy');

    Route::get('/vehicles', [VehicleController::class, 'showVehicles'])->name('vehicles.show');
    Route::get('/vehicles/add', [VehicleController::class, 'vehicle'])->name('addvehicle.show');
    Route::post('/vehicles/add', [VehicleController::class, 'addVehicles'])->name('addvehicle.post');
    Route::get('/vehicles/edit/{id}', [VehicleController::class, 'editVehicle'])->name('vehicles.edit');
    Route::put('/vehicles/update/{id}', [VehicleController::class, 'updateVehicle'])->name('vehicles.update');
    Route::delete('/vehicles/destroy/{id}', [VehicleController::class, 'destroyVehicle'])->name('vehicles.destroy');

    //Gestion de admin
    Route::get('/users', [GetAllUsersController::class, 'GetAllUsers'])->name('users');
    Route::get('/profile/{user}/adminedit', [ProfileController::class, 'adminEdit'])->name('profile.adminedit');
    Route::put('/profile/{user}/adminupdate', [ProfileController::class, 'adminUpdate'])->name('profile.adminupdate');
    Route::delete('/profile/{user}/admindestroy', [ProfileController::class, 'adminDestroy'])->name('profile.admindestroy');
    
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('create-user');
    Route::post('/users', [AdminUserController::class, 'store'])->name('store-user');

    //Catalogo
    Route::get('/', [CatalogController::class, 'show'])->name('catalog.show');
    Route::get('/publication/{id}', [CatalogController::class, 'showDetail'])->name('detail-post.show');
    //Mis publicaciones
    Route::get('/posts', [MyPostController::class, 'posts'])->name('my-posts.show');
    Route::get('/publish', [PublishController::class, 'showPublishForm'])->name('publish');
    Route::post('/publishpost', [PublishController::class, 'publish'])->name('publish.post');
    Route::delete('/eliminar/{id}', [MyPostController::class, 'delete'])->name('delete.publicacion');
    Route::get('/edit/{id}', [MyPostController::class, 'edit'])->name('edit.publicacion');
    Route::put('/update/{id}', [MyPostController::class, 'update'])->name('update.publicacion');

    //Solicitudes
    Route::post('/requestspost', [RequestController::class, 'store'])->name('requests.store');
    Route::get('/requests', [RequestController::class, 'getDetails'])->name('requests.show');
    Route::delete('/delete-request/{id}', [RequestController::class, 'deleteRequest'])->name('delete.request');
    //publicaciones asignadas
    Route::get('/post-asignate', [ConsigneeController::class, 'postAsignate'])->name('postAsignate.show');
    Route::get('/consignee/post/{id}', [ConsigneeController::class, 'showPostDetails'])->name('post-details');

    Route::get('/request-show', [ConsigneeController::class, 'requestShow'])->name('request.show');
    Route::get('/request-show-confirmation', [ConsigneeController::class, 'requestShowConfirmation'])->name('confirmation.show');
    Route::get('/request/confirmation/{request}', [YourController::class, 'confirmRequest'])->name('request.confirmation');
    //Envios
    Route::get('/mostrarEnvios2/{id}/{publication_id}/{client_id}', [RequestController::class, 'confirmarEnvios'])->name('confirmar.envios');
    Route::get('/mostrarEnvios/{id}/{publication_id}/{client_id}', [RequestController::class, 'mostrarEnvios'])->name('solicitud.envios');
    Route::get('/agregar-envio/{publication_id}', [RequestController::class, 'mostrarFormulario'])->name('mostrar.formulario');
    Route::post('/agregar-envio', [ShipmentController::class, 'crearEnvio'])->name('envio.crear');


    //Ventas consignatario
    Route::get('/sell-confirmation/{id}/{publication_id}', [SellController::class, 'sellConfirmation'])->name('confirmation.sell');
    Route::get('/sell', [SellController::class, 'sellShow'])->name('sell.show');

    //Ventas cliente
    Route::get('/sell-client', [SellController::class, 'sellShowClient'])->name('sell-client.show');

    //Compas cliente
    Route::get('/buy-client', [SellController::class, 'buyShowClient'])->name('buy-client.show');

});
require __DIR__.'/auth.php';


    // Route::get('/newclient', [ClientGetNewClientController::class, 'GetNewClient'])->name('newclient');
    // Route::post('/newclient', [AddNewClientController::class, 'AddNewClient'])->name('newclientpost');
    // Route::get('/allclients', [GetAllClientController::class, 'GetAllClient'])->name('allclients');
    // Route::get('/apiinformation', [GetAllAPIInformationController::class, 'GetAllAPIInformation'])->name('apiinformation');
    // Route::get('/apilocations', [GetAllLocationApiController::class, 'GetAllLocationApi'])->name('apilocations');
