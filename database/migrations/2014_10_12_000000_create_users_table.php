<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->string('corp_name');
            $table->string('second_input')->nullable();
            $table->string('post_address')->nullable();
            $table->string('hello')->nullable();
            $table->string('third_input')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('contact_address')->nullable();
            $table->string('meeting_part')->nullable();
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
        Schema::dropIfExists('users');
    }
}
