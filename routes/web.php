<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');



         Route::get('/search', [PagesController::class, 'search'])
         ->name('search');


         Route::get('/aboutus', [PagesController::class, 'aboutus'])
         ->name('aboutus');




         
         Route::get('/policy', [PagesController::class, 'policy'])
         ->name('policy');

         Route::get('/terms', [PagesController::class, 'terms'])
         ->name('terms');