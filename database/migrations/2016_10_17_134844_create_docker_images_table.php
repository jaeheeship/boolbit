<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDockerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docker_images', function (Blueprint $table) { 
            $table->integer('user_id') ; 
            $table->string('image_name') ;
            $table->string('namespace')->unique() ;
            $table->string('description') ;
            $table->timestamps() ;
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docker_images') ;
    }
}
