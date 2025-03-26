<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_profile()
    {
        // Seed the database with the expected profile data
        DB::table('profiles')->insert([
            'name' => 'Abdul Lambada',
            'email' => 'engineertekno@gmail.com',
            'bio' => 'Laravel Developer',
            'avatar' => 'https://i.pravatar.cc/150?img=1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->getJson('/api/profile');

        $response
            ->assertStatus(200)
            ->assertJsonPath('name', 'Abdul Lambada')
            ->assertJsonPath('email', 'engineertekno@gmail.com')
            ->assertJsonPath('bio', 'Laravel Developer')
            ->assertJsonPath('avatar', 'https://i.pravatar.cc/150?img=1');
    }
}
