<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalaryGradeController;
use App\Http\Controllers\SalaryYearController;
use App\Http\Controllers\SalaryMonthController;;

use App\Http\Controllers\SalaryController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('user', UserController::class);
// Route::get('/salarygrade', [SalaryGradeController::class, 'index'])->name('salarygrade.index');
// Route::get('/salarygrade/create', [SalaryGradeController::class, 'create'])->name('salarygrade.create');
// Route::get('/salaryannual', [SalaryAnnualController::class, 'index'])->name('salaryannual.index');
// Route::get('/salaryannual/create', [SalaryAnnualController::class, 'create'])->name('salaryannual.create');
// Route::get('/salarymonthly', [SalaryMonthlyController::class, 'index']);
// Route::get('/salarymonthly/create', [SalaryMonthlyController::class, 'create'])->name('salarymonthly.create');
// Route::get('/salaryregular', [SalaryRegularController::class, 'index']);
// Route::get('/salary', [SalaryController::class, 'index'])->name('salary.index');

// route edit tanpa parameter id, karena id nya menggunakan request
Route::get('/salarygrade/edit', [SalaryGradeController::class, 'edit'])->name('salarygrade.edit');
Route::resource('salarygrade', SalaryGradeController::class);
Route::resource('salary-year', SalaryYearController::class);
Route::resource('salary-month', SalaryMonthController::class);
Route::resource('salary', SalaryController::class);
Route::resource('status', StatusController::class);
Route::resource('grade', GradeController::class);
Route::resource('departement', DeptController::class);
Route::resource('job', JobController::class);

Route::get('/print-pdf/{id}', [SalaryController::class, 'print']);
Route::get('/download-pdf/{id}', [SalaryController::class, 'download']);
Route::get('/print-all', [SalaryController::class, 'printall']);
Route::get('/print-allocation', [SalaryController::class, 'printallocation']);
