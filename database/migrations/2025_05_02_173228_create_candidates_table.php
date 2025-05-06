<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id('candidate_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('election_id');
            $table->unsignedBigInteger('position_id');
            $table->text('bio')->nullable();
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('election_id')->references('election_id')->on('elections')->onDelete('cascade');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade');

           
            $table->unique(['user_id', 'election_id', 'position_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
