<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FrendyController;
use App\Http\Controllers\HomeController;
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
//     return view('default');
// });

Route::get('/',[WebsiteController::class, 'index']);
Route::get('/academy',[WebsiteController::class, 'academy']);
Route::get('/profile/{id}',[WebsiteController::class, 'show'])->name('myprofile');


Route::get('/about', function(){
    return view('about');
});
Route::get('/service/', function(){
    return view('service');
});
//passing parameter
Route::get('/profile/{lastname}/{firstname}', function($lastname, $firstname){
    echo "Dear $lastname $firstname welcome to moat academy";
});

Route::get('/showclub/{id?}', function($id = null){
echo $id;
});

Route::get('/create/{fullname}/{age?}/{town}/{country}', function($fullname, $age = 32, $town, $country){
    echo "Dear $fullname $age years from $town in $country ";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//name routes

Route::get('/faq/new', function(){
    $name = "cayleb";
    $text = "<b>Good to go</b>";
    $student = array(
        'elon musk',
        'tim cook',
        'larry page',
        'bill gate',
        'james bond',
        'danladi bako');
    return view('faq',['fullname'=>$name, 'mytext'=>$text, 'students'=>$student,]);
})->name('faq');

Route::get('/blogs/new', function(){
    return view('blogs');
})->name('blogs');

Route::get('/allfriends', [FrendyController::class, 'index'])->name('allfriends');
Route::get('/addfriend', [FrendyController::class, 'create'])->name('addfriend');
Route::post('/savefriend', [FrendyController::class, 'store'])->name('savefriend');
Route::get('/editfriend/{id}', [FrendyController::class, 'edit'])->name('editfriend');
Route::patch('/updatefriend/{id}', [FrendyController::class, 'update'])->name('updatefriend');
Route::delete('/deletefriend/{id}', [FrendyController::class, 'destroy'])->name('deletefriend');
Route::get('/addprofilephoto', [HomeController::class, 'createProfilePhoto'])->name('addprofilephoto');
Route::post('/saveprofilephoto', [HomeController::class, 'storeProfilePhoto'])->name('saveprofilephoto');
