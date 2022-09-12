<?php
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ClinetController;
use App\Http\Controllers\Admin\CategryController;
use App\Http\Controllers\Admin\DetaileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//dashbord routes
Route::prefix(LaravelLocalization::setLocale())->group(function () {

    //admin routes
    Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');

    //clients routes
    Route::get('clients/trash', [ClinetController::class, 'trash'])->name('clients.trash');
    Route::get('clients/{id}/restore', [ClinetController::class, 'restore'])->name('clients.restore');
    Route::delete('clients/{id}/forcedelete', [ClinetController::class, 'forcedelete'])->name('clients.forcedelete');
    Route::resource('clients',ClinetController::class);

    //categries routes
    Route::get('categries/trash', [CategryController::class, 'trash'])->name('categries.trash');
    Route::get('categries/{id}/restore', [CategryController::class, 'restore'])->name('categries.restore');
    Route::delete('categries/{id}/forcedelete', [CategryController::class, 'forcedelete'])->name('categries.forcedelete');
    Route::resource('categries',CategryController::class);

    //detailes routes
    Route::get('detailes/trash', [DetaileController::class, 'trash'])->name('detailes.trash');
    Route::get('detailes/{id}/restore', [DetaileController::class, 'restore'])->name('detailes.restore');
    Route::delete('detailes/{id}/forcedelete', [DetaileController::class, 'forcedelete'])->name('detailes.forcedelete');
    Route::resource('detailes',DetaileController::class);

    //images routes
    Route::get('images/trash', [ImageController::class, 'trash'])->name('images.trash');
    Route::get('images/{id}/restore', [ImageController::class, 'restore'])->name('images.restore');
    Route::delete('images/{id}/forcedelete', [ImageController::class, 'forcedelete'])->name('images.forcedelete');
    Route::resource('images',ImageController::class);

    //questions routes
    Route::get('questions/trash', [QuestionController::class, 'trash'])->name('questions.trash');
    Route::get('questions/{id}/restore', [QuestionController::class, 'restore'])->name('questions.restore');
    Route::delete('questions/{id}/forcedelete', [QuestionController::class, 'forcedelete'])->name('questions.forcedelete');
    Route::resource('questions',QuestionController::class);

    //services routes
    Route::get('services/trash', [ServiceController::class, 'trash'])->name('services.trash');
    Route::get('services/{id}/restore', [ServiceController::class, 'restore'])->name('services.restore');
    Route::delete('services/{id}/forcedelete', [ServiceController::class, 'forcedelete'])->name('services.forcedelete');
    Route::resource('services',ServiceController::class);

    //teams routes
    Route::get('teams/trash', [TeamController::class, 'trash'])->name('teams.trash');
    Route::get('teams/{id}/restore', [TeamController::class, 'restore'])->name('teams.restore');
    Route::delete('teams/{id}/forcedelete', [TeamController::class, 'forcedelete'])->name('teams.forcedelete');
    Route::resource('teams',TeamController::class);

    //testimonials routes
    Route::get('testimonials/trash', [TestimonialController::class, 'trash'])->name('testimonials.trash');
    Route::get('testimonials/{id}/restore', [TestimonialController::class, 'restore'])->name('testimonials.restore');
    Route::delete('testimonials/{id}/forcedelete', [TestimonialController::class, 'forcedelete'])->name('testimonials.forcedelete');
    Route::resource('testimonials',TestimonialController::class);

    //users routes
    Route::get('users',[UserController::class,'index'])->name('users.index');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


});
});

Auth::routes();
Route::view('not','not_allawd');

Route::get('/home', [HomeController::class, 'index'])->name('home');
//->middleware('auth','check_user')

//site routes
Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/portfolio-details/{categry}/{id}',[SiteController::class,'portfolio_details'])->name('site.portfolio-details');
Route::post('/contact',[SiteController::class,'contact'])->name('site.contact');



