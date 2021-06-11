<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Allroutebasic;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', [Allroutebasic::class, 'index']);
Route::get('/index', [Allroutebasic::class, 'index'])->name('index');
Route::get('/dashboard', [Allroutebasic::class, 'dashboard'])->name('dashboard');
Route::get('/investment-list', [Allroutebasic::class, 'investment_list'])->name('investment-list');
Route::get('/investment-policy-list', [Allroutebasic::class, 'investment_policy_list'])->name('investment-policy-list');
Route::get('/manage-permissions-list', [Allroutebasic::class, 'manage_permissions_list'])->name('manage-permissions-list');
Route::get('/view', function () {
    return view('investment-view');
});


