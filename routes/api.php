<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/programs', 'ProgramController');
Route::resource('/covenants', 'CovenantController');
Route::resource('/age-groups', 'AgeGroupController');
Route::resource('/ethnicities', 'EthnicityController');
Route::resource('/vaccinations', 'VaccinationController');
Route::resource('/service-units', 'ServiceUnitController');
Route::resource('/type-populations', 'TypePopulationController');
Route::resource('/funcional-diversities', 'FuncionalDiversityController');
Route::resource('/social-security-schemes', 'SocialSecuritySchemeController');

Route::resource('/education', 'EducationController');
Route::resource('/beneficiaries', 'BeneficiaryController');
Route::resource('/food-security', 'FoodSecurityController');
Route::resource('population-data', 'PopulationDataController');
Route::resource('/social-security', 'SocialSecurityController');
Route::resource('/social-programs', 'SocialProgramController');
Route::resource('/family-structure', 'FamilyStructureController');
Route::resource('/main-economic-supplier', 'MainEconomicSupplierController');
Route::resource('/location-condition-housing', 'LocationConditionHousingController');
