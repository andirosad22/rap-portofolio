<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPotsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;

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
    return view('home',[
        "title" => "Home",
        "active" => "home",
        "user" => User::find(1)
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => "about",
        'name' => 'Rosad andi pratama',
        'email' => 'andirosad22@gmail.com',
        'image' => 'rosad.jpg'
    ]);
});



Route::get('/posts',[PostController::class, 'index']);


// halaman post
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');






















// categories
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });


// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
