<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->float('height');
            $table->float('weight');
            $table->string('race');
            $table->string('relapses');
            $table->unsignedBigInteger('doctor_id'); 
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('users'); // Referencia a coluna CRM da tabela users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacients');
    }
}
