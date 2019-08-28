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
            $table->string('user_id')->unique();
            $table->integer('role_id')->default(2);
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('contact_no')->nullable();
            $table->string('department_name')->nullable();
            $table->string('department_id')->nullable();
            $table->string('year')->nullable();
            $table->string('term')->nullable();
            $table->string('session')->nullable();
            $table->string('image')->default('default.png');
                     
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
