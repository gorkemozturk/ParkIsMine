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
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password', 191);
            $table->string('phone', 191)->nullable();
            $table->date('birthday')->nullable();
            $table->string('city', 191)->nullable();
            $table->string('province', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->mediumText('address')->nullable();
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
