<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });


    }
    

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

?>