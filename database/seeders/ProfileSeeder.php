<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\SocialLink;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create profile
        $profile = Profile::create([
            'name' => 'John Doe',
            'job_title' => 'Software Developer',
            'email' => 'john.doe@example.com',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit. Nunc finibus vel ante id euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Aliquam erat volutpat. Nulla vulputate phasellus tellus, in luctus risus rhoncus id.',
            'avatar' => '/assets/profile.jpg'
        ]);

        // Create skills
        $skills = [
            'JavaScript',
            'React',
            'Node.js',
            'HTML/CSS',
            'Tailwind CSS'
        ];

        foreach ($skills as $skillName) {
            Skill::create([
                'profile_id' => $profile->id,
                'name' => $skillName
            ]);
        }

        // Create experiences
        $experiences = [
            [
                'position' => 'Web Developer',
                'company' => 'ABC Company',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.',
                'start_year' => 2017,
                'end_year' => 2019
            ],
            [
                'position' => 'Web Developer',
                'company' => 'ABC Company',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.',
                'start_year' => 2017,
                'end_year' => 2019
            ],
            [
                'position' => 'Web Developer',
                'company' => 'ABC Company',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.',
                'start_year' => 2017,
                'end_year' => 2019
            ]
        ];

        foreach ($experiences as $exp) {
            Experience::create([
                'profile_id' => $profile->id,
                'position' => $exp['position'],
                'company' => $exp['company'],
                'description' => $exp['description'],
                'start_year' => $exp['start_year'],
                'end_year' => $exp['end_year']
            ]);
        }

        // Create social links
        $socialLinks = [
            ['platform' => 'linkedin', 'url' => 'https://linkedin.com/in/johndoe'],
            ['platform' => 'youtube', 'url' => 'https://youtube.com/johndoe'],
            ['platform' => 'facebook', 'url' => 'https://facebook.com/johndoe'],
            ['platform' => 'instagram', 'url' => 'https://instagram.com/johndoe'],
            ['platform' => 'twitter', 'url' => 'https://twitter.com/johndoe']
        ];

        foreach ($socialLinks as $link) {
            SocialLink::create([
                'profile_id' => $profile->id,
                'platform' => $link['platform'],
                'url' => $link['url']
            ]);
        }
    }
}
