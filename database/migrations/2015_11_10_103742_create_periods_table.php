<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('primary')->default(false);
        });

        DB::table('periods')->insert(
            ['name' => 'half hour', 'primary' => false]
        );

        DB::table('periods')->insert(
            ['name' => 'per hour', 'primary' => true]
        );

        DB::table('periods')->insert(
            ['name' => 'two hours', 'primary' => false]
        );

        DB::table('periods')->insert(
            ['name' => 'per day', 'primary' => false]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('periods');
    }
}
