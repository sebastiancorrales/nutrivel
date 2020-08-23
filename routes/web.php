<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/app', function () {
    return view('index');
});

Route::resource('/vaccinations', 'VaccinationController');
Route::resource('/funcional-diversities', 'FuncionalDiversityController');
Route::resource('/social-security-schemes', 'SocialSecuritySchemeController');
Route::resource('/programs', 'ProgramController');
Route::resource('/age-groups', 'AgeGroupController');
Route::resource('/ethnicities', 'EthnicityController');
Route::resource('/type-populations', 'TypePopulationController');
Route::resource('/covenants', 'CovenantController');
Route::resource('/service-units', 'ServiceUnitController');