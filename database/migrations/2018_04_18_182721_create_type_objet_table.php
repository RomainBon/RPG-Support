<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeObjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_objet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->timestamps();
        });

        DB::table('type_objet')->insert
        ([
          'id'=>'1',
          'name'=>'Arme',
        ]);
        DB::table('type_objet')->insert
        ([
          'id'=>'2',
          'name'=>'Armure',
        ]);
        DB::table('type_objet')->insert
        ([
          'id'=>'3',
          'name'=>'Conso',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_objet');
    }
}
