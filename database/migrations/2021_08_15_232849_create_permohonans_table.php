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
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('state_id')->constrained('states')->onDelete('cascade')->onUpdate('cascade');
            $table->string('no_tiket');
            $table->string('topik');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('lampiran');
            $table->string('progres');
            $table->timestamps();
        });

     //   Schema::table('permohonans', function (Blueprint $table) {
      //      $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
       // });
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
