<?php

use App\Service;
use App\Supplier;
use Illuminate\Database\Seeder;

class ServiceSupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_supplier')->truncate();

        foreach (Supplier::all() as $supplier) {
            foreach(Service::all()->random(6) as $service){
                $supplier->services()->attach($service->id);
            }
        }
    }
}
