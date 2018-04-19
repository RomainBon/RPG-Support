<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perso')->unsigned();
            $table->integer('id_objet')->unsigned();
            $table->integer('nombre');
            $table->timestamps();
        });

        Schema::table('inventaire', function (Blueprint $table)
        {
           $table->foreign('id_perso')->references('id')->on('personnage');
           $table->foreign('id_objet')->references('id')->on('objet');
         });

        DB::table('inventaire')->insert
         ([
           'id'=>'1',
           'id_perso'=>'1',
           'id_objet'=>'1',
           'nombre'=>'1'
         ]);
        DB::table('inventaire')->insert
         ([
            'id'=>'2',
            'id_perso'=>'1',
            'id_objet'=>'2',
            'nombre'=>'1'
          ]);
        DB::table('inventaire')->insert
          ([
            'id'=>'3',
            'id_perso'=>'1',
            'id_objet'=>'3',
            'nombre'=>'10'
          ]);

          DB::table('inventaire')->insert
          ([
            'id'=>'4',
            'id_perso'=>'2',
            'id_objet'=>'1',
            'nombre'=>'1'
          ]);
         DB::table('inventaire')->insert
          ([
             'id'=>'5',
             'id_perso'=>'2',
             'id_objet'=>'2',
             'nombre'=>'1'
           ]);
         DB::table('inventaire')->insert
           ([
             'id'=>'6',
             'id_perso'=>'2',
             'id_objet'=>'3',
             'nombre'=>'12'
           ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaire');
    }
}
