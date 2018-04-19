<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('typeObjet')->unsigned();
            $table->string('resume');
            $table->integer('prix');
            $table->timestamps();
        });

        Schema::table('objet', function (Blueprint $table)
        {
           $table->foreign('typeObjet')->references('id')->on('type_objet');
         });

        DB::table('objet')->insert
         ([
           'id'=>'1',
           'name'=>'epée coupeuse de beurre',
           'typeObjet'=>'1',
           'resume'=>'Ne peut pas couper plus que du beuure',
           'prix'=>'50'
         ]);

         DB::table('objet')->insert
         ([
           'id'=>'2',
           'name'=>'Armure en rouille',
           'typeObjet'=>'2',
           'resume'=>"Porte le nom d'armure que de nom",
           'prix'=>'100'
         ]);

         DB::table('objet')->insert
         ([
           'id'=>'3',
           'name'=>'Potion anti-douleurs',
           'typeObjet'=>'3',
           'resume'=>'fait un peu regagner de la vie',
           'prix'=>'25'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objet');
    }
}
