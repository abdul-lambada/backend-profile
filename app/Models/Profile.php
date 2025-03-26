<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\SocialLink;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'email',
        'bio',
        'avatar',
        'job_title'
    ];

    public $timestamps = true;
    protected $table = 'profiles';

    /**
     * Get the skills for this profile
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get the experiences for this profile
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get the social links for this profile
     */
    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class);
    }
}
