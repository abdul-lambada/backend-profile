<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Experience extends Model
{
    protected $fillable = [
        'profile_id',
        'position',
        'company',
        'description',
        'start_year',
        'end_year'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
