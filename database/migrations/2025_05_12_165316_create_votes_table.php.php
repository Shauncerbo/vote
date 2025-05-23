<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('voter_id');
            $table->foreign('voter_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')
                  ->references('candidate_id')
                  ->on('candidates')
                  ->onDelete('cascade');
            
            $table->unsignedBigInteger('election_position_id');
            $table->foreign('election_position_id')
                ->references('ElectionPosition_id')
                ->on('election_positions')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};