<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('suppliers')->truncate();
        factory(App\User::class, 50)->create()->each(function($user) {
            if($user->id % 2)
            {
                $user->supplier()->save(factory(App\Supplier::class)->make());
            }
        });
    }
}
