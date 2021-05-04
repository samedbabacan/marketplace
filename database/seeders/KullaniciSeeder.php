<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;
use App\Models\User;

class KullaniciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Samed Babacan";
        $user->email = "admin1@admin.com";
		$user->remember_token = Str::random(10);
		$user->password = bcrypt('123456');
        $user->save();
    }
}
