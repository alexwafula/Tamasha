<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToEvents extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}

