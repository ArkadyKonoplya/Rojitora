<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuggageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luggage', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('luggage_id');
            $table->string('urgent_matter');
            $table->date('loading_date');
            $table->string('loading_time');
            $table->string('loading_space');
            $table->string('loading_city');
            $table->date('drop_date');
            $table->string('drop_time');
            $table->string('drop_space');
            $table->string('drop_city');
            $table->string('baggage_name');
            $table->string('baggage_weight');
            $table->string('vehicle_inf');
            $table->string('vehicle_type1');
            $table->string('vehicle_type1_content');
            $table->string('vehicle_type2');
            $table->string('vehicle_type3');
            $table->string('bigo')->nullable();
            $table->integer('fares_money');
            $table->string('is_consultation');
            $table->string('phone_number');
            $table->string('person_charge');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luggage');
    }
}
