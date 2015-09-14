<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned()->index();
            $table->integer('supplier_id')->unsigned()->index();
            $table->integer('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_supplier');
    }
}
