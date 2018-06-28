<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{

    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('address')->default('cim');
            $table->string('web')->default('valami.hu');
            $table->string('phone')->default('666');
            $table->string('foto')->default('default');

            $table->integer('principal_id')->unsigned()->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('people');
    }
}