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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas CRUD compañias
/* Crear */
Route::get('admin/companies/crear', 'CompaniesController@create')->name('admin/companies/crear');
Route::put('admin/companies/store', 'CompaniesController@store')->name('admin/companies/store');
/* Leer */
Route::get('admin/companies', 'CompaniesController@index')->name('admin/companies');
/* Actualizar */
Route::get('admin/companies/actualizar/{id}', 'CompaniesController@actualizar')->name('admin/companies/actualizar');
Route::put('admin/companies/update/{id}', 'CompaniesController@update')->name('admin/companies/update');
/* Eliminar */
Route::put('admin/companies/eliminar/{id}', 'CompaniesController@destroy')->name('admin/companies/eliminar');

// Rutas CRUD empleados
/* Crear */
Route::get('admin/employees/crear', 'EmployeesController@create')->name('admin/employees/crear');
Route::put('admin/employees/store', 'EmployeesController@store')->name('admin/employees/store');
/* Leer */
Route::get('admin/employees', 'EmployeesController@index')->name('admin/employees');
/* Actualizar */
Route::get('admin/employees/actualizar/{id}', 'EmployeesController@actualizar')->name('admin/employees/actualizar');
Route::put('admin/employees/update/{id}', 'EmployeesController@update')->name('admin/employees/update');
/* Eliminar */
Route::put('admin/employees/eliminar/{id}', 'EmployeesController@destroy')->name('admin/employees/eliminar');
