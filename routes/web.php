<?php

use App\Http\Controllers\ArticleController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route ::get('/articles',function(){
    return 'Article List';
});

Route :: get('/articles/details',function(){
    return 'Articles Detailed';
});

Route :: get ('articles/detail/{id}',function($id){
    return "Articles Detailed - $id";
});

Route :: get ('/articles/more',function(){
    return redirect('/articles/detail');
});

Route :: get ('/articles/other',function(){
    return redirect()->route('article.detail');
});


Route :: get ('/articles/detail',function(){
    return 'Article Name Detailed';
})->name('article.detail');

*/
//Route::get('/', 'ArticleController@index'); 
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
