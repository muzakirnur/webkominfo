<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2021_08_15_232849_create_permohonans_table.php
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('state_id')->constrained('states')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
>>>>>>> 38becfa42095ffa285faa51f81a62c1e12ebd300:database/migrations/2021_08_23_144015_create_permohonans_table.php
            $table->string('no_tiket');
            $table->string('topik');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('lampiran');
<<<<<<< HEAD:database/migrations/2021_08_15_232849_create_permohonans_table.php
            $table->string('progres');
            $table->timestamps();
        });

     //   Schema::table('permohonans', function (Blueprint $table) {
      //      $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
       // });
=======
            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('progres');
            $table->timestamps();
        });
>>>>>>> 38becfa42095ffa285faa51f81a62c1e12ebd300:database/migrations/2021_08_23_144015_create_permohonans_table.php
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonans');
    }
}
