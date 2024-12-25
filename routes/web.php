<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepagecotroller;
//index
Route::get('/', [homepagecotroller::class, 'home'])->name('index');
Route::get('/{sindex}', [homepagecotroller::class, 'shome'])->name('sindex');
Route::get('/homepage/contactus', [homepagecotroller::class, 'contactus'])->name('contactus');
Route::get('/homepage/matangazo', [homepagecotroller::class, 'matangazo2'])->name('matangazo2');
Route::post('/homepage/comments/store', [homepagecotroller::class, 'comments'])->name('comments');
Route::post('/brandorder/store/{brand}', [homepagecotroller::class, 'brandorder'])->name('brandorder');
Route::post('/productorder/{userpost}', [homepagecotroller::class,'productorder'])->name('productorder');


//registration
Route::get('/register/registration', [homepagecotroller::class, 'userregistration'])->name('userregistrationpage');
Route::post('/registration/store', [homepagecotroller::class, 'userregister'])->name('userregister');//for data
//login
Route::get('/logini/page', [homepagecotroller::class, 'userlogin'])->name('userlogin');
Route::post('/login/authenticate', [homepagecotroller::class, 'userdashboard'])->name('userdashboard');

//dashboard

Route::get('/dashboard/userpost', [homepagecotroller::class, 'dashboardpage'])->name('dashboardpage');
Route::get('/dashboard/ownerpost', [homepagecotroller::class, 'dashboardpage1'])->name('dashboardpage1');
Route::delete('/dashboard/{user}/delete/user', [homepagecotroller::class, 'userdelete'])->name('userdelete');
Route::post('/dashboard/{user}/block', [homepagecotroller::class, 'userblock'])->name('userblock');
Route::get('/dashboard/viewuser', [homepagecotroller::class, 'dashboardpage3'])->name('user');
Route::delete('/dashboard/{buserorder}', [homepagecotroller::class, 'buserorder'])->name('userorderbdel');
Route::delete('/dashboard/{buserorders}/delete/orderb', [homepagecotroller::class, 'buserorders'])->name('userorderbdels');
Route::put('/dashboard/{user}/change', [homepagecotroller::class, 'userchange'])->name('useredit');
Route::post('/dashboard/dirisha/change/dirisha', [homepagecotroller::class, 'dirisha'])->name('dirisha');
Route::delete('/dashboard/{userorderd}/delete/orders', [homepagecotroller::class, 'userorderdel'])->name('userorderdelete');
Route::delete('/dashboard/{matangazo}/delete/matangazo', [homepagecotroller::class, 'matangazodel'])->name('matangazodel');
Route::delete('/dashboard/{comment}/delete/comment', [homepagecotroller::class, 'commentdel'])->name('commentdel');
Route::delete('/dashboad/{userpostshowd}/delete', [homepagecotroller::class, 'userpostshow'])->name('userpostshowd');



Route::get('/dashboard/matangazo', [homepagecotroller::class, 'dashboardpage2'])->name('dashboardpage2');
Route::post('/uploadimage/store', [homepagecotroller::class, 'uploadimage'])->name('uploadedmage');
Route::post('/uploadimagebland/store', [homepagecotroller::class, 'uploadimagebland'])->name('uploadedmagebland');
Route::post('/uploadimagematangazo/store', [homepagecotroller::class, 'uploadimagematangazo'])->name('uploadedmatangazo');
Route::get('/uploadimage/uploading', [homepagecotroller::class, 'uploadpage'])->name('uploadimage');//main

