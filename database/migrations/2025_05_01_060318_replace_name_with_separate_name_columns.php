<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
   

            $table->string('FirstName')->after('id');
            $table->string('MiddleName')->nullable()->after('FirstName');
            $table->string('LastName')->after('MiddleName');
            $table->string('Sex')->after('LastName');
            $table->string('ContactNumber',11)->after('Sex');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          
            $table->string('name')->after('id');
            $table->dropColumn(['FirstName', 'MiddleName', 'LastName', 'Sex', 'ContactNumber']);
        });
    }
};