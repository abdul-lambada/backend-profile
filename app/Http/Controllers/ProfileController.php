<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::with(['skills', 'experiences', 'socialLinks'])->first();
        
        return response()->json([
            'status' => 'success',
            'data' => $profile
        ]);
    }
}
