<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class SocialLink extends Model
{
    protected $fillable = [
        'profile_id',
        'platform',
        'url'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
