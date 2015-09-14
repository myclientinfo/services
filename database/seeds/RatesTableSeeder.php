<?php

use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->truncate();

        foreach (App\Supplier::all() as $supplier) {
            //for($i=0; $i <= 5; $i++){
            $supplier->rates()->save(factory(App\Rate::class)->make());
            //}
        }
    }
}
