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

        $amounts = [100, 150, 180];
        foreach (App\Supplier::all() as $supplier) {
            $amount = $amounts[array_rand($amounts)];

            for($i=1; $i <= 4; $i++){

                $this_amount = $i==4 ? $amount * 7 : $amount * $i;

                $rate_data = [
                    'supplier_id' => $supplier->id,
                    'period_id'=> $i,
                    'price' => $this_amount
                ];

                $rate = new \App\Rate($rate_data);

                $supplier->rates()->save($rate);
            }
        }
    }
}
