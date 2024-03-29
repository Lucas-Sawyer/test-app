<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CatalogController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
#Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{name}', [CatalogController::class, 'product_detail']);

Route::resource('/catalog', CatalogController::class,
[
    'names'=> 
    [
        'index'=>'catalog'
    ]
]
);

