<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('firstName');
            $table -> string('lastName');
            $table -> string('state');
            $table -> string('city');
            $table -> string('telephone');
            $table -> string('emailAddress');
            $table -> string('password');
            $table -> string('balance');
            $table -> rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        dd("error");
        Schema::dropIfExists('users');
    }
}
