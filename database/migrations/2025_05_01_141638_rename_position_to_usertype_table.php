<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class RenamePositionToUsertypeTable extends Migration
{
    public function up()
    {
        Schema::rename('positions', 'userType');
    }

    public function down()
    {
        Schema::rename('userType', 'positions');
    }
}
