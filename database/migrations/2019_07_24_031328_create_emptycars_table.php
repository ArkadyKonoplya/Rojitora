<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptycarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emptycars', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('emptycar_id')->nullable();
            $table->string('urgent_matter')->nullable();
            $table->date('emptycar_date');
            $table->string('emptycar_time');
            $table->string('emptycar_space');
            $table->string('emptycar_city');
            $table->string('land_pos_loading');
            $table->date('drop_date');
            $table->string('drop_time');
            // $table->string('drop_city');
            $table->string('land_pos_drop');
            $table->string('vehicle_inf')->nullable();
            $table->string('vehicle_type1');
            $table->string('vehicle_type1_content')->nullable();
            $table->string('vehicle_type2');
            $table->string('vehicle_type3');
            $table->string('bigo')->nullable();
            $table->string('phone_number');
            $table->string('person_charge')->nullable();
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
        Schema::dropIfExists('emptycars');
    }
}
