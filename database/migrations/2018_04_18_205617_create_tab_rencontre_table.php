<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabRencontreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_rencontre', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_senar')->unsigned();
            $table->string('Nom');
            $table->string('Lieux');
            $table->integer('Attaque');
            $table->integer('Parade');
            $table->integer('Point _de_Vie');
            $table->integer('PV_Max');
            $table->integer('Protection');
            $table->string('degat');
            $table->integer('courage');
            $table->integer('Exp');
            $table->string('Note');
            $table->timestamps();
        });

        Schema::table('tab_rencontre', function (Blueprint $table)
        {
           $table->foreign('id_senar')->references('id')->on('scenario');
         });

        DB::table('tab_rencontre')->insert
         ([
           'id'=>'1',
           'id_senar'=>'1',
           'Nom'=>'Ogrillon',
           'Lieux'=>'camp',
           'Attaque'=>'10',
           'Parade'=>'7',
           'Point _de_Vie'=>'18',
           'PV_Max'=>'18',
           'Protection'=>'2',
           'degat'=>'1D+5',
           'courage'=>'10',
           'Exp'=>'13',
           'Note'=>'Gourdin à clous bricolé'
         ]);
         DB::table('tab_rencontre')->insert
         ([
           'id'=>'2',
           'id_senar'=>'1',
           'Nom'=>'Ogrillon2',
           'Lieux'=>'camp',
           'Attaque'=>'12',
           'Parade'=>'5',
           'Point _de_Vie'=>'20',
           'PV_Max'=>'20',
           'Protection'=>'3',
           'degat'=>'1D+6',
           'courage'=>'11',
           'Exp'=>'16',
           'Note'=>'Gourdin à clous bricolé'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_rencontre');
    }
}
