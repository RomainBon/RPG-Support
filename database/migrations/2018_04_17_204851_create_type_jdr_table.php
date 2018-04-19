<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeJdrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_jdr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        DB::table('type_jdr')->insert
        ([
          'id'=>'1',
          'name'=>'Science Fiction',
        ]);
        DB::table('type_jdr')->insert
        ([
          'id'=>'2',
          'name'=>'Médivale Fantaise',
        ]);
        DB::table('type_jdr')->insert
        ([
          'id'=>'3',
          'name'=>'Post Apocalypse',
        ]);
        DB::table('type_jdr')->insert
        ([
          'id'=>'4',
          'name'=>'Moderne',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_jdr');
    }
}
