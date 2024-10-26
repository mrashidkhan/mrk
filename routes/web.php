<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Service Routes
// Route::get('/services/all-services', [ServiceController::class, 'allServices'])->name('services.all_services');
// Route::get('/services/wedding-photography', [ServiceController::class, 'weddingPhotography'])->name('services.wedding_photography');
// Route::get('/services/engagement-photography', [ServiceController::class, 'engagementPhotography'])->name('services.engagement_photography');
// Route::get('/services/newborn-photography', [ServiceController::class, 'newbornPhotography'])->name('services.newborn_photography');
// Route::get('/services/family-photography', [ServiceController::class, 'familyPhotography'])->name('services.family_photography');
// Route::get('/services/bridal-portrait', [ServiceController::class, 'bridalPortrait'])->name('services.bridal_portrait');
// Route::get('/services/maternity', [ServiceController::class, 'maternity'])->name('services.maternity');
// Route::get('/services/corporate-photography', [ServiceController::class, 'corporatePhotography'])->name('services.corporate_photography');
// Route::get('/services/concert-events', [ServiceController::class, 'concertEvents'])->name('services.concert_events');
// Route::get('/services/portfolio', [ServiceController::class, 'portfolio'])->name('services.portfolio');


// Pages Routes
Route::get('/', [PageController::class, 'index'])->name('index');
// Route::get('/our-team', [PageController::class, 'ourTeam'])->name('our-team');
Route::get('/jewellery', [PageController::class, 'jewellery'])->name('jewellery');
// Route::get('/log-in', [PageController::class, 'logIn'])->name('log-in');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/electronics', [PageController::class, 'electronics'])->name('electronics');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/fashion', [PageController::class, 'fashion'])->name('fashion');



// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
