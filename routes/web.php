<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TusanedController;
use Illuminate\Support\Facades\Route;

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
//     return view('tusaned.index');
// });

Route::get('/', function () {
    return view('tusaned.index');
})->name('home');

Route::prefix('tusaned')->group(function () {
    // Route::get('/', [TusanedController::class, 'showHome'])->name('home');
    Route::get('about', [TusanedController::class, 'showAbout'])->name('about');
    Route::get('idea-bank', [TusanedController::class, 'showIdeaBank'])->name('idea.bank');
    Route::get('actions', [TusanedController::class, 'showActions'])->name('actions');
    Route::get('events', [TusanedController::class, 'showEvents'])->name('events');
    Route::get('contact-us', [TusanedController::class, 'showContactUs'])->name('contact.us');
    Route::get('event-infos', [TusanedController::class, 'showEventsInfo'])->name('events.info');

    // ABOUT US THREE BRANCHES
    Route::get('about-us-one', [TusanedController::class, 'showAboutBrachOne'])->name('about.branch.one');
    Route::get('about-us-two', [TusanedController::class, 'showAboutBrachTwo'])->name('about.branch.two');
    Route::get('about-us-three', [TusanedController::class, 'showAboutBrachThree'])->name('about.branch.three');

    Route::get('submit-idea-one', [TusanedController::class, 'showSubmitIdeaOne'])->name('submit.idea.one');
    Route::get('submit-idea-two', [TusanedController::class, 'showSubmitIdeaTwo'])->name('submit.idea.two');
    Route::get('submit-idea-three', [TusanedController::class, 'showSubmitIdeaThree'])->name('submit.idea.three');
    Route::get('submit-idea-four', [TusanedController::class, 'showSubmitIdeaFour'])->name('submit.idea.four');
    Route::get('submit-idea-five', [TusanedController::class, 'showSubmitIdeaFive'])->name('submit.idea.five');

    // CONTACT US POST ACTION
    Route::resource('contact-us-sending', ContactController::class);
});
