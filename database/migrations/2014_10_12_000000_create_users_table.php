<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');('id');
            $table->char('role')->length(1)->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('address');
            $table->string('barangay');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('mobile')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('avatar')->nullable();
            //$table->string('tcagree');
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
