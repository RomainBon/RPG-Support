<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scenario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomScenario');
            $table->string('descritpionQuete');
            $table->string('urlQuete');
            $table->string('urlImage');
            $table->integer('id_regle')->unsigned();
            $table->integer('id_Creator')->unsigned();
            
            $table->timestamps();
        });
        Schema::table('scenario', function (Blueprint $table)
        {
           $table->foreign('id_regle')->references('id')->on('regle');
           $table->foreign('id_Creator')->references('id')->on('users');
         });

         DB::table('scenario')->insert
         ([
           'id'=>'1',
           'NomScenario'=>'ogre de chnafon',
           'descritpionQuete'=>'Exemple test de scnenario',
           'urlQuete'=>'/var/www/laravel/resources/views/pdf/scenario-ogredechnafon.pdf',
           'urlImage'=>'/var/www/laravel/resources/views/img/maison-ruflak-description.jpg',
           'id_regle'=>'1',
           'id_Creator'=>'1'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scenario');
    }
}
