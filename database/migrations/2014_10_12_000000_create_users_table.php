<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('MJ_Role');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert
        ([
          'id'=>'1',
          'name'=>'Maitre_du_Jeu',
          'email'=>'Maitre_du_Jeu@JDR.MJ',
          'password'=>Hash::make('JDRMJ'),
          'MJ_Role'=>True,
        ]);
        DB::table('users')->insert
        ([
          'id'=>'2',
          'name'=>'Personnage_Joueur',
          'email'=>'Personnage_Joueur@JDR.PJ',
          'password'=>Hash::make('JDRPJ'),
          'MJ_Role'=>False,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
