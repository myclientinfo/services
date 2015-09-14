<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->truncate();

        foreach (App\Supplier::all() as $supplier) {
            for($i=0; $i <= 5; $i++){
                $supplier->photos()->save(factory(App\Photo::class)->make());
            }
        }
    }
}