<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\CarouselController;
use App\Http\Controllers\Home\MemberController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\AboutUsController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BlogUserController;
use App\Http\Controllers\Frontend\InstagramController;
use App\Http\Controllers\Frontend\UserAboutUsController;
use App\Http\Controllers\Frontend\UserDonationController;

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
    return view('user.index');
})->name('user.home');

Route::prefix('admin')->group(function () {
//Admin All Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','Profile')->name('admin.profile');
});

//Carousel All Route
Route::controller(CarouselController::class)->group(function(){
    Route::get('/home/carousel','Carousel')->name('home.carousel');
    Route::get('/add/carousel','AddCarousel')->name('add.carousel');
    Route::post('/save/carousel','SaveCarousel')->name('save.carousel');
    Route::get('/edit/carousel/{id}','EditCarousel')->name('edit.carousel');
    Route::get('/delete/carousel/{id}','DeleteCarousel')->name('delete.carousel');
    Route::post('/update/carousel','UpdateCarousel')->name('update.carousel');
});

//Member All Route
Route::controller(MemberController::class)->group(function(){
    Route::get('/home/member','Member')->name('home.member');
    Route::get('/add/member','AddMember')->name('add.member');
    Route::post('/save/member','SaveMember')->name('save.member');
    Route::get('/edit/member/{id}','EditMember')->name('edit.member');
    Route::get('/delete/member/{id}','DeleteMember')->name('delete.member');
    Route::post('/update/member','UpdateMember')->name('update.member');
});

//Blog All Route
Route::controller(BlogController::class)->group(function(){
    Route::get('/home/blog','Blog')->name('home.blog');
    Route::get('/add/blog','AddBlog')->name('add.blog');
    Route::post('/save/blog','SaveBlog')->name('save.blog');
    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');
    Route::post('/update/blog','UpdateBlog')->name('update.blog');
    Route::get('/view/blog/{id}','ViewBlog')->name('view.blog');
});

Route::controller(AboutUsController::class)->group(function(){
    Route::get('/aboutus','AboutUs')->name('home.aboutus');
});

Route::get('dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');
});

Route::controller(UserAboutUsController::class)->group(function(){
    Route::get('/aboutus','AboutUs')->name('user.aboutus');
});

Route::controller(UserDonationController::class)->group(function(){
    Route::get('/donation','Donation')->name('user.donation');
});

Route::controller(TeamController::class)->group(function(){
    Route::get('/our-team','Team')->name('user.ourteam');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','Contact')->name('user.contact');
});
Route::controller(BlogUserController::class)->group(function(){
    Route::get('/blog','BlogAll')->name('user.blog');
    Route::get('/blog/{id}','BlogView')->name('blog.view');
    Route::post('/blog/insertComment', 'InsertComment')->name('blog.comment.insert');
});

Route::controller(InstagramController::class)->group(function(){
    Route::get('/instagramfeed','GetFeed');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('itw.dheerg@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

require __DIR__.'/auth.php';
