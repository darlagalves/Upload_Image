<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameComentsToComments extends Migration
{
    public function up()
    {
        Schema::rename('coments', 'comments');
    }

    public function down()
    {
        Schema::rename('comments', 'coments');
    }
}
