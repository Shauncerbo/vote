<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePositionTableAndColumns extends Migration
{
    public function up()
    {

        Schema::table('userType', function (Blueprint $table) {
            $table->renameColumn('position_id', 'userType_id');
            $table->renameColumn('position_name', 'userType_name');
        });
    }

    public function down()
    {
 
        Schema::table('userType', function (Blueprint $table) {
            $table->renameColumn('userType_id', 'position_id');
            $table->renameColumn('userType_name', 'position_name');
        });

    }
}
