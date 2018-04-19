<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regle', function (Blueprint $table)
         {
            $table->increments('id');
            $table->string('name');
            $table->integer('typeJdr')->unsigned();
            $table->string('regleUrl');
            $table->string('WolrdMapUrl');
            $table->string('historyUrl');
            $table->integer('creator')->unsigned();
            $table->timestamps();
        });
        Schema::table('regle', function (Blueprint $table)
        {
           $table->foreign('typeJdr')->references('id')->on('type_jdr');
           $table->foreign('creator')->references('id')->on('users');
         });

        DB::table('regle')->insert
         ([
           'id'=>'1',
           'name'=>'Naheulbeuk',
           'typeJdr'=>'2',
           'regleUrl'=>'/var/www/laravel/resources/views/pdf/guide-du-mj-debutant.pdf',
           'WolrdMapUrl'=>'/var/www/laravel/resources/views/img/Fangh-HD-Screen.jpg',
           'historyUrl'=>'',
           'creator'=>'1'
         ]);
         DB::table('regle')->insert
         ([
           'id'=>'2',
           'name'=>'13 age',
           'typeJdr'=>'2',
           'regleUrl'=>'/var/www/laravel/resources/views/pdf/Carnet du Héros PDF.pdf',
           'WolrdMapUrl'=>'/var/www/laravel/resources/views/img/13e_age_map.jpg',
           'historyUrl'=>'',
           'creator'=>'1'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regle');
    }
}
