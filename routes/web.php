<?php

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Journaux\JournalAchatController;
// Packages
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

require __DIR__.'/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

//UI Pages Routs
Route::get('/', [HomeController::class, 'signin'])->name('auth.signin');

Route::group(['middleware' => ['auth']], function () {
    // Permission Module
    Route::get('/role-permission',[RolePermission::class, 'index'])->name('role.permission.list');
    Route::resource('permission',PermissionController::class);
    Route::resource('role', RoleController::class);

    // Dashboard Routes
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Users Module
    Route::resource('users', UserController::class);
});

//Route::get('/journal-achat', [JournalAchatController::class, 'index'])->name('journal.achat');

Route::group(['prefix' => 'achat'], function() {
    Route::get('/journal-achat', [JournalAchatController::class, 'index'])->name('achat.index');
    Route::get('/create-achat', [JournalAchatController::class, 'create'])->name('achat.create');
    Route::post('/store-achat', [JournalAchatController::class, 'store'])->name('achat.store');
     // Formulaire d'édition avec l'ID de l'achat à modifier
     Route::get('/edit-achat/{id}', [JournalAchatController::class, 'edit'])->name('achat.edit');

     // Mise à jour de l'achat, nécessite l'ID de l'achat
     Route::put('/update-achat/{id}', [JournalAchatController::class, 'update'])->name('achat.update');
 
     // Suppression de l'achat, nécessite l'ID de l'achat
     Route::delete('/delete-achat/{id}', [JournalAchatController::class, 'destroy'])->name('achat.delete');
});


//App Details Page => 'Dashboard'], function() {
Route::group(['prefix' => 'menu-style'], function() {
    //MenuStyle Page Routs
    Route::get('horizontal', [HomeController::class, 'horizontal'])->name('menu-style.horizontal');
    Route::get('dual-horizontal', [HomeController::class, 'dualhorizontal'])->name('menu-style.dualhorizontal');
    Route::get('dual-compact', [HomeController::class, 'dualcompact'])->name('menu-style.dualcompact');
    Route::get('boxed', [HomeController::class, 'boxed'])->name('menu-style.boxed');
    Route::get('boxed-fancy', [HomeController::class, 'boxedfancy'])->name('menu-style.boxedfancy');
});



//Widget Routs
Route::group(['prefix' => 'transactions'], function() {
    Route::get('vente', [HomeController::class, 'vente'])->name('transactions.vente');
    Route::get('achat', [HomeController::class, 'achat'])->name('transactions.achat');
    Route::get('retour-marchandise', [HomeController::class, 'retourmarchandise'])->name('transactions.retour-marchandise');
});

//Maps Routs


//Auth pages Routs
Route::group(['prefix' => 'auth'], function() {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('auth.confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('auth.lockscreen');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('auth.userprivacysetting');
});

//Error Page Route
Route::group(['prefix' => 'errors'], function() {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
});


//Forms Pages Routs



//Table Page Routs

//Icons Page Routs

//Extra Page Routs
Route::get('privacy-policy', [HomeController::class, 'privacypolicy'])->name('pages.privacy-policy');
Route::get('terms-of-use', [HomeController::class, 'termsofuse'])->name('pages.term-of-use');
