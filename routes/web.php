<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SystemSettingController;


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


// Web Routes

Route::get('/',[HomeController:: class, 'home']);
Route::get('/about',[HomeController:: class, 'about']);
Route::get('/author-profile',[HomeController:: class, 'authorprofile']);
Route::get('/contact-us',[HomeController:: class, 'contactus']);
Route::get('/faq',[HomeController:: class, 'faq']);
Route::get('/news',[HomeController:: class, 'news']);
Route::get('/page-not',[HomeController:: class, 'pagenot']);
Route::get('/shoping-cart',[HomeController:: class, 'shopingcart']);
Route::get('/single-blog',[HomeController:: class, 'singleblog']);
Route::get('/book-detail',[HomeController:: class, 'bookdetail']);
Route::get('/admin',[UserController::class,"Login"]);
Route::post('/admin',[UserController::class,"ProcessLoginRequest"]);
Route::prefix('admin')->middleware("IsLogin")->group(function () {
    Route::get("logout",[Usercontroller::class,"Logout"]);
    Route::get("change-password",[Usercontroller::class,"changePassword"]);
    Route::post("change-password",[Usercontroller::class,"changePasswordProcess"]);

    // News
    Route::prefix('user')->group(function () {
        Route::get("/",[Usercontroller::class,"View"]);
        Route::get("/add",[Usercontroller::class,"Add"]);
        Route::post("/add",[Usercontroller::class,"AddProcess"]);
        Route::get("/delete/{id}",[Usercontroller::class,"Delete"]);
        Route::get("/update/{id}",[Usercontroller::class,"Edit"]);
        Route::post("/update/{id}",[Usercontroller::class,"EditProcess"]);
    });

    // book
    Route::prefix('book')->group(function () {
        Route::get("/",[BookController::class,"Index"]);
        Route::post("/",[BookController::class,"GetALLFeatureDelete"]);
        Route::get("/add",[BookController::class,"Add"]);
        Route::post("/add",[BookController::class,"AddProcess"]);
        Route::get("/delete/{id}",[BookController::class,"Delete"]);
        Route::get("/update/{id}",[BookController::class,"Edit"]);
        Route::post("/update/{id}",[BookController::class,"EditProcess"]);
        Route::post("/feature/{id}",[BookController::class,"FeatureProcess"]);

        Route::prefix('category')->group(function () {
            Route::get("/",[BookController::class,"ViewCategory"]);
            Route::post("/",[BookController::class,"GetALLFeatureDeleteCategory"]);
            Route::get("/add",[BookController::class,"AddCategory"]);
            Route::post("/add",[BookController::class,"AddCategoryProcess"]);
            Route::get("/delete/{id}",[BookController::class,"DeleteCategory"]);
            Route::get("/update/{id}",[BookController::class,"EditCategory"]);
            Route::post("/update/{id}",[BookController::class,"EditCategoryProcess"]);
        });
    });

    // Author
    Route::prefix('author')->group(function () {
        Route::get("/",[AuthorController::class,"ViewAuthor"]);
        Route::post("/",[AuthorController::class,"GetALLFeatureDeleteAuthor"]);
        Route::get("/add",[AuthorController::class,"AddAuthor"]);
        Route::post("/add",[AuthorController::class,"AddAuthorProcess"]);
        Route::get("/delete/{id}",[AuthorController::class,"DeleteAuthor"]);
        Route::get("/update/{id}",[AuthorController::class,"EditAuthor"]);
        Route::post("/update/{id}",[AuthorController::class,"EditAuthorProcess"]);
    });

    // News
    Route::prefix('news')->group(function () {
        Route::get("/",[NewsController::class,"ViewNews"]);
        Route::post("/",[NewsController::class,"GetALLFeatureDeleteNews"]);
        Route::get("/add",[NewsController::class,"AddAuthor"]);
        Route::post("/add",[NewsController::class,"AddNewsProcess"]);
        Route::get("/delete/{id}",[NewsController::class,"DeleteNews"]);
        Route::get("/update/{id}",[NewsController::class,"EditNews"]);
        Route::post("/update/{id}",[NewsController::class,"EditNewsProcess"]);
    });

    // system-setting
    Route::prefix('system-settings')->group(function () {
        // social-media
        Route::prefix('social-media')->group(function () {
            Route::get("/",[SystemSettingController::class,"ViewSocial"]);
            Route::post("/",[SystemSettingController::class,"GetALLFeatureDeleteSocial"]);
            Route::get("/add",[SystemSettingController::class,"AddSocial"]);
            Route::post("/add",[SystemSettingController::class,"AddSocialProcess"]);
            Route::get("/delete/{id}",[SystemSettingController::class,"DeleteSocial"]);
            Route::get("/update/{id}",[SystemSettingController::class,"EditSocial"]);
            Route::post("/update/{id}",[SystemSettingController::class,"EditSocialProcess"]);
        });
    });
});
