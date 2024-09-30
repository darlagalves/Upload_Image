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
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pacient');

            $table->foreign('id_pacient')->references('id')->on('pacients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['id_pacient']);
            
            $table->dropColumn('id_pacient');
        });
    }

};
