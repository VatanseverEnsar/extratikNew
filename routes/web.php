<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::get('/', [PatientController::class, 'index'])->name('patients');
Route::get('/patients/data', [PatientController::class, 'getPatients']);
Route::get('/patients/{id}/detail', [PatientController::class, 'patientDetail'])->name('patients.detail');


