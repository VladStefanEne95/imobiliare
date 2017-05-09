<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeAndImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('anunturi', function (Blueprint $table) {
            $table->text("imagini");
            $table->string("tip");
            $table->string("tipContract");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('anunturi', function (Blueprint $table) {
            $table->dropColumn("imagini");
            $table->dropColumn("tip");
            $table->dropColumn("tipContract");
        });
    }
}
