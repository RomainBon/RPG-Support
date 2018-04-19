<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom');
            $table->string('Race');
            $table->string('classe');
            $table->integer('pointDeVie');
            $table->integer('pvMax');
            $table->integer('force');
            $table->integer('adresse');
            $table->integer('endurance');
            $table->integer('intelligence');
            $table->integer('charisme');
            $table->integer('id_senar')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->timestamps();
        });
        Schema::table('personnage', function (Blueprint $table)
        {
           $table->foreign('id_senar')->references('id')->on('type_jdr');
           $table->foreign('id_user')->references('id')->on('regle');
         });

        DB::table('personnage')->insert
         ([
           'id'=>'1',
           'Nom'=>'Jean Neymar',
           'Race'=>'Nain',
           'classe'=>'Paladin',
           'pointDeVie'=>'50',
           'pvMax'=>'50',
           'force'=>'13',
           'adresse'=>'10',
           'endurance'=>'11',
           'intelligence'=>'10',
           'charisme'=>'6',
           'id_senar'=>'1',
           'id_user'=>'1'
         ]);
         DB::table('personnage')->insert
         ([
         'id'=>'2',
         'Nom'=>'Ener Gumene',
         'Race'=>'Humain',
         'classe'=>'Voleur',
         'pointDeVie'=>'25',
         'pvMax'=>'25',
         'force'=>'9',
         'adresse'=>'13',
         'endurance'=>'8',
         'intelligence'=>'10',
         'charisme'=>'12',
         'id_senar'=>'1',
         'id_user'=>'1'
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_personnage');
    }
}
