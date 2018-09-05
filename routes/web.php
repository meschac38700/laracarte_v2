<?php

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

Route::get('/', "PagesControler@home")->name('laracarte.index');

Route::get('/about', "PagesControler@about")->name('laracarte.about');

Route::get('/contact', "PagesControler@contact")->name('laracarte.contact');
Route::post('/contact', "PagesControler@contact_store")->name('laracarte.contact.store');
Route::get('/artisan', "PagesControler@artisan")->name('laracarte.artisan');
Route::get('/auth/login', "PagesControler@login")->name('laracarte.auth.login');
Route::post('/auth/login', "PagesControler@login_store")->name('laracarte.auth.login');
Route::get('/auth/register', "PagesControler@register")->name('laracarte.auth.register');
Route::post('/auth/register', "PagesControler@register_store")->name('laracarte.auth.register');
Route::get('/password/email', "PagesControler@password_lost")->name('laracarte.password.email');