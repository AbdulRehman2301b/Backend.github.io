<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Models\patient_appointment;
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
//website work //

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/department', function () {
    return view('department');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});

// Route::get('/cityyy', function () {
//     return view('adminpanel.updcities');
// });

Route::post('/insertcontactinfo',[mycontroller::class,('contactinfo')]);

Route::post('/del/{id}',[mycontroller::class,('deletecontact')]);

Route::post('/updatecon/{id}',[mycontroller::class,('updatecontact')]);

Route::post('/updatecontact',[mycontroller::class,('updrecord')]);

Route::post('/insertappointment',[mycontroller::class,('insertinfo')]);

Route::post('/delete/{id}',[mycontroller::class,('deleteinsert')]);

Route::post('/upd/{id}',[mycontroller::class,('updateinsert')]);

Route::post('/updrecords',[mycontroller::class,('updrecordapp')]);

route::post('/inserted',[mycontroller::class,('doctor')]);

Route::get('/profile',[mycontroller::class,('profile')]);

Route::get('/contactdetails',[mycontroller::class,('admincontact')]);

Route::post('/addcities',[mycontroller::class,('addcities')]);

Route::get('/cities',[mycontroller::class,('getcity')]);

Route::post('/delcity/{id}',[mycontroller::class,('deletecity')]);

Route::post('/updcity/{id}',[mycontroller::class,('updatecity')]);

Route::post('/updcities',[mycontroller::class,('updatedcity')]);

Route::get('/patient',[mycontroller::class,('adminpatient')]);

Route::post('/delpatient/{id}',[mycontroller::class,('deletepatient')]);

Route::post('/updpatient/{id}',[mycontroller::class,('updatepatient')]);

Route::post('/updatedpatients',[mycontroller::class,('updatedpatients')]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            if(Auth::User()->role == 1)
            { 
                    return view('index');
            }
            else 
            {  
                $records = patient_appointment::get();
                return view("adminpanel.index",compact('records'));
            }

    })->name('dashboard');
});

Route::post('/logoutdoctor',[mycontroller::class,('logoutdoctor')]);

Route::post('/insertdoctor',[mycontroller::class,('insertdoctors')]);

Route::get('/fetchdoctor',[mycontroller::class,('fetchdoctor')]);

Route::post('/deldoc/{id}',[mycontroller::class,('deletedoc')]);

Route::post('/updatedoc/{id}',[mycontroller::class,('upddoctor')]);

Route::post('/updateddoctors',[mycontroller::class,('doctorupdated')]);

Route::post('/doctorlogin',[mycontroller::class,('doctorlogin')]);

Route::get('/loginpage', function () {
    return view('doctorloginform');
});
Route::get('/doctorform', function () {
    return view('adminpanel.doctorform');
});