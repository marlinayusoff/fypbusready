<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Checkpoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('checkpoint',function(Blueprint $table)
        {
            $table->increment('checkpoint_id');
            $table->string('checkpoint_nama');
            $table->double('checkpoint_lat',20,10);
            $table->double('checkpoint_lng',20,10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('checkpoint');
    }
}
