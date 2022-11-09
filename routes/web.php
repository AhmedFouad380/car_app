<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceTypeProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('login');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login',['App\Http\Controllers\Admin\AuthController','login']);


Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ar');
    }


    return back();
});

Route::middleware(['web'])->group(function () {
    Route::get('/',function (){
        return view('admin.dashboard');
    });

//employee settings
Route::get('Clients', [\App\Http\Controllers\Admin\UsersController::class, 'index']);
Route::get('client_datatable', [\App\Http\Controllers\Admin\UsersController::class, 'datatable'])->name('client.datatable.data');
Route::get('delete-client', [\App\Http\Controllers\Admin\UsersController::class, 'destroy']);
Route::get('get-branch/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'getBranch']);
Route::post('store-client', [\App\Http\Controllers\Admin\UsersController::class, 'store']);
Route::get('client-edit/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'edit']);
Route::post('update-client', [\App\Http\Controllers\Admin\UsersController::class, 'update']);
Route::get('/add-button-client', function () {
    return view('admin/Users/button');
});

    //Drivers
Route::get('Drivers', [\App\Http\Controllers\Admin\DriverController::class, 'index']);
Route::get('Driver_datatable', [\App\Http\Controllers\Admin\DriverController::class, 'datatable'])->name('Driver.datatable.data');
Route::get('delete-Driver', [\App\Http\Controllers\Admin\DriverController::class, 'destroy']);
Route::get('get-branch/{id}', [\App\Http\Controllers\Admin\DriverController::class, 'getBranch']);
Route::post('store-Driver', [\App\Http\Controllers\Admin\DriverController::class, 'store']);
Route::get('Driver-edit/{id}', [\App\Http\Controllers\Admin\DriverController::class, 'edit']);
Route::post('update-Driver', [\App\Http\Controllers\Admin\DriverController::class, 'update']);
Route::get('/add-button-Driver', function () {
    return view('admin/Drivers/button');
});

    //Admins
    Route::get('Admins', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('Admin_datatable', [\App\Http\Controllers\Admin\AdminController::class, 'datatable'])->name('Admin.datatable.data');
    Route::get('delete-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'destroy']);
    Route::get('get-branch/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'getBranch']);
    Route::post('store-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
    Route::get('Admin-edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit']);
    Route::post('update-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'update']);
    Route::get('/add-button-Admin', function () {
        return view('admin/Admin/button');
    });

    //Countries
    Route::get('Countries', [\App\Http\Controllers\Admin\CountryController::class, 'index']);
    Route::get('Country_datatable', [\App\Http\Controllers\Admin\CountryController::class, 'datatable'])->name('Country.datatable.data');
    Route::get('delete-Country', [\App\Http\Controllers\Admin\CountryController::class, 'destroy']);
    Route::post('store-Country', [\App\Http\Controllers\Admin\CountryController::class, 'store']);
    Route::get('Country-edit/{id}', [\App\Http\Controllers\Admin\CountryController::class, 'edit']);
    Route::post('update-Country', [\App\Http\Controllers\Admin\CountryController::class, 'update']);
    Route::get('/add-button-Country', function () {
        return view('admin/Country/button');
    });

    //Cities
    Route::get('Cities/{id}', [\App\Http\Controllers\Admin\CityController::class, 'index']);
    Route::get('City_datatable', [\App\Http\Controllers\Admin\CityController::class, 'datatable'])->name('City.datatable.data');
    Route::get('delete-City', [\App\Http\Controllers\Admin\CityController::class, 'destroy']);
    Route::post('store-City', [\App\Http\Controllers\Admin\CityController::class, 'store']);
    Route::get('City-edit/{id}', [\App\Http\Controllers\Admin\CityController::class, 'edit']);
    Route::post('update-City', [\App\Http\Controllers\Admin\CityController::class, 'update']);
    Route::get('/add-button-City/{id}', function ($id) {
        return view('admin/City/button',compact('id'));
    });
    //Polygons
    Route::get('Polygons/{id}', [\App\Http\Controllers\Admin\PolygonController::class, 'index']);
    Route::get('Polygon_datatable', [\App\Http\Controllers\Admin\PolygonController::class, 'datatable'])->name('Polygon.datatable.data');
    Route::get('delete-Polygon', [\App\Http\Controllers\Admin\PolygonController::class, 'destroy']);
    Route::post('store-Polygon', [\App\Http\Controllers\Admin\PolygonController::class, 'store']);
    Route::get('Polygon-edit/{id}', [\App\Http\Controllers\Admin\PolygonController::class, 'edit']);
    Route::post('update-Polygon', [\App\Http\Controllers\Admin\PolygonController::class, 'update']);
    Route::get('/add-button-Polygon/{id}', function ($id) {
        return view('admin/Polygon/button',compact('id'));
    });

    //Service
    Route::get('Services', [\App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('Service_datatable', [\App\Http\Controllers\Admin\ServiceController::class, 'datatable'])->name('Service.datatable.data');
    Route::get('delete-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy']);
    Route::post('store-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('Service-edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::post('update-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::get('/add-button-Service', function () {
        return view('admin/Service/button');
    });

    //ServiceType
    Route::get('ServiceTypes/{id}', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'index']);
    Route::get('ServiceType_datatable', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'datatable'])->name('ServiceType.datatable.data');
    Route::get('delete-ServiceType', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'destroy']);
    Route::post('store-ServiceType', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'store']);
    Route::get('ServiceType-edit/{id}', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'edit']);
    Route::post('update-ServiceType', [\App\Http\Controllers\Admin\ServiceTypesController::class, 'update']);
    Route::get('/add-button-ServiceType/{id}', function ($id) {
        return view('admin/ServiceType/button',compact('id'));
    });



});
Route::get('get-Cities/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'getCities']);


Route::get('test',function (){
    return view('admin.project_details5');
});
