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
        Schema::create('coments', function (Blueprint $table) {
            $table->id('id');   
            $table->text('comment');   
            $table->unsignedBigInteger('pacient_id');   
            $table->timestamp('created_at')->useCurrent();

            // Definindo a chave estrangeira
            $table->foreign('pacient_id')->references('id')->on('pacients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coments');
    }
};
