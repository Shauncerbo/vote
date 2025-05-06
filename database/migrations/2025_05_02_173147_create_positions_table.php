<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id('position_id');
            $table->unsignedBigInteger('election_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->integer('max_winners')->default(1);
            $table->timestamps();

            $table->foreign('election_id')->references('election_id')->on('elections')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('positions');

        Schema::table('elections', function (Blueprint $table) {
            $table->dropForeign(['department_id', 'election_id']);
            $table->dropColumn(['department_id','election_id']);
        });
    }
}