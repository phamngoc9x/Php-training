<?php

use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/products', [
//     ProductsController::class,
//     'index'
// ])->name('products');

// Route::get('/', [
//     PagesController::class,
//     'index'
// ])->name('pages');

// Route::get('/about', [
//     PagesController::class,
//     'about'
// ]);
Route::get('/', [
    PostsController::class,
    'index'
]);
Route::get('/about', [
    PostsController::class,
    'about'
]);
Route::get('/posts', [
    PostsController::class,
    'posts'
]);
Route::resource('/foods', 
    FoodsController::class
);

// Route::get('/products/{productName}/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id' => '[0-9]+'
// ]);

// Route::get('/users', function () {
//     return 'this is the users page';
// });

// Route::get('/foods', function () {
//     return ['sushi','toboki', 'ramen'];
// });

// Route::get('/about', function () {
//     return response() -> json([
//         'name' => 'Pham Van Ngoc',
//         'email' => 'ngoc@gmail.com'
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/foods');
// });
