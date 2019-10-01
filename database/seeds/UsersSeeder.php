<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\City;
use Illuminate\Support\Facades\Validator;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tanya M',
            'email' => 'darikapiterski@gmail.com',
            'verified_email' => 1,
            'password' => '$2y$10$SV//.OmHC8T4asBHzS8aPujHxxVbq0OlOxMKe1ybfhYAtZTVo180O',
            'remember_token' => 'tKXa4eQLIOFHnRUZH0gUJvwWdYRp7TF7jGvYDvr8VYeTCZ13qEN6vbqXeaEr',
            'register_ip' => '127.0.0.1',
            'last_ip' => '127.0.0.1',
            'phone' => '89094421192',
            'city_id' => City::all()->random(1),
            'login' => 'tanya',
            'active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        factory(User::class, 15)->create();
    }
}
