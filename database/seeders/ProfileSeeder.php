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
            'name' => 'Abdul Kholik',
            'job_title' => 'Pengembang Web',
            'email' => 'engineertekno@gmail.com',
            'bio' => 'Saya adalah pengembang Laravel Web Developer yang ahli dalam membangun aplikasi web dinamis dan skalabel. Menguasai HTML, CSS, JavaScript, PHP, serta Laravel untuk pengembangan back-end yang efisien dan ramah pengguna.',
            'avatar' => 'img/fotoabdulkholik.jpg'
        ]);

        // Create skills
        $skills = [
            'HTML/CSS',
            'Javascript',
            'PHP',
            'Laravel',
            'Nuxt',
            'Node.js',
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
                'position' => 'Guru TKJ (Teknik Komputer dan Jaringan)',
                'company' => 'SMK AL-AMIIN Sangkanhurip',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.',
                'start_year' => 2023,
                'end_year' => 'Sekarang'
            ],
            [
                'position' => 'IT Support Trainner',
                'company' => 'CV Prianti Indonesia | ICONIX Software',
                'description' => 'Saya sebagai IT Support dan Traineer untuk memberikan pelatihan pada dokter ataupun karyawan di sebuah klinik kesehatan, kecantikan dan gigi. Saya juga memperbaiki perangkat keras dan lunak yang ada di perusahan serta membantu programmer atau pengembang aplikasi yang ada di perusahaan.',
                'start_year' => 2024,
                'end_year' => 2024
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
            ['platform' => 'Linkedin', 'url' => 'https://www.linkedin.com/in/abdul-kholik-67ab09274/'],
            ['platform' => 'Instagram', 'url' => 'https://www.instagram.com/abdul_lambada/'],
            ['platform' => 'Github', 'url' => 'https://github.com/abdul-lambada'],
            ['platform' => 'Portofolio', 'url' => 'https://my-portofolio-amber-rho.vercel.app/'],
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
