<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login_user');
            $table->string('password');
            $table->string('user_name');

            //ユニーク設定
            $table->unique(['login_user'],'UNIQUE_001');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_users');
    }
}
