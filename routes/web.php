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

Route::get('/', function () {
    return view('welcome');
});

/* Front Routes Start */
require __DIR__.'/auth.php';
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('userdashboard');
/* Front Routes End */

/* Admin Routes Start */
require __DIR__.'/adminauth.php';
Route::prefix('admin')->middleware(['auth:admin'])->as('admin.')->group(function () {
    Route::get('/', function () { return view('admin.dashboard'); });
    Route::get('dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('pages/ui-features/buttons', function () { return view('admin.pages.ui-features.buttons'); })->name('buttons');
    Route::get('pages/ui-features/dropdowns', function () { return view('admin.pages.ui-features.dropdowns'); })->name('dropdowns');
    Route::get('pages/ui-features/typography', function () { return view('admin.pages.ui-features.typography'); })->name('typography');
    Route::get('pages/forms/basic-elements', function () { return view('admin.pages.forms.basic_elements'); })->name('basic-elements');
    Route::get('pages/charts/chartjs', function () { return view('admin.pages.charts.chartjs'); })->name('chartjs');
    Route::get('pages/tables/basic-tables', function () { return view('admin.pages.tables.basic-table'); })->name('basic-tables');
    Route::get('pages/icons/midi-icons', function () { return view('admin.pages.icons.mdi'); })->name('midi-icons');
});
/* Admin Routes End */

