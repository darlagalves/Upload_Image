<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDiagnosisToDiagnoses extends Migration
{
    public function up()
    {
        Schema::rename('diagnosis', 'diagnoses');
    }

    public function down()
    {
        Schema::rename('diagnoses', 'diagnosis');
    }
}
