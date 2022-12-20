<?php

use Illuminate\Support\Facades\Route;

// stars-restaurants.com/ => inicio
 Route::view('/','inicio')->name('Hogar');

 // stars-restaurants.com/locales => restaurantes
 Route::view('/locales','restaurantes')->name('locales');
 
 // stars-restaurants.com/location => ubicacion
 Route::view('/location','ubicacion')->name('location');
 
 // stars-restaurants.com/about => acerca
 Route::view('/about','acerca')->name('about');

  // stars-restaurants.com/contact => contactos
  Route::view('/contact','contactos')->name('contact');

  // stars-restaurants.com/seach => buscar
  Route::get('/seach',function(){
    return view('buscar');
  })->name('buscar');