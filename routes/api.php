<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route for the main profile endpoint
Route::get('profile', [ProfileController::class, 'index']);

// Additional routes could be added here for specific sections if needed
// Route::get('profile/skills', [ProfileController::class, 'skills']);
// Route::get('profile/experiences', [ProfileController::class, 'experiences']);
// Route::get('profile/social-links', [ProfileController::class, 'socialLinks']);
