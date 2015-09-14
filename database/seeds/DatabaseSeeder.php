<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ServiceSupplierTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        Model::reguard();
    }
}
