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
        Schema::table('images', function (Blueprint $table) {
            if (!Schema::hasColumn('images', 'name')) { 
                $table->string('name'); // Nome da imagem
            }
            if (!Schema::hasColumn('images', 'network_result')) { 
                $table->text('network_result')->nullable(); // Descrição (pode ser nula)
            }
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            if (Schema::hasColumn('images', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('images', 'network_result')) {
                $table->dropColumn('network_result');
            }
        });
    }
};