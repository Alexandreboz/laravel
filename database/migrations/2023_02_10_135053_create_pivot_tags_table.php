<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_tags', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->unsignedBigInteger('jeu_id');//crée colonne jeu_id
            $table->unsignedBigInteger('tags_id');
            $table->foreign('jeu_id')->references('id')->on('jeux');
            $table->foreign('tags_id')->references('id')->on('tags');
            $table->primary(['jeu_id','tags_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_tags');
    }
};
