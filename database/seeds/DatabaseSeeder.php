<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $truncate = [
            'users',
            'categories',
            'products'
        ];
        // To remove previous data from database
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($truncate as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        User::create([
            'name' => 'Emamul Murshalin',
            'email' => 'murshalin@yopmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'), // password
            'remember_token' => Str::random(10),
            'status' => User::ACTIVE
        ]);

        factory(User::class,3)->create();
        factory(App\Models\Category::class,6)->create();
        factory(App\Models\Product::class,12)->create();
    }
}
