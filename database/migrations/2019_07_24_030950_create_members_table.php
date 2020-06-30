<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('member_id');
            $table->string('company_name1');
            $table->string('company_name2')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address_fir');
            $table->string('address_sec')->nullable();
            $table->string('address_thi')->nullable();
            $table->string('information_sec')->nullable();
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('referee')->nullable();
            $table->string('where_learn')->nullable();
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
        Schema::drop('members');
    }
}
