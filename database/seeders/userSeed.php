<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.png');
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Doe',
            'email' => 'admin@test.com',
            'division' => 'IT',
            'password' => 'password',
            'signature' => $file,
        ]);
        $admin->hasroles()->attach(1);

        //generate user using UserFactory
        $users = User::factory()->count(10)->create();
        //assign role to user
        foreach ($users as $user) {
            $user->hasroles()->attach(random_int(1, 7));
        }
    }
}
