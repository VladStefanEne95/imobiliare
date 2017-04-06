<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('anunturi', function (Blueprint $table) {
            $table->string("descriere");
            $table->string("adresa");
            $table->string("nume");
            $table->string("email");
            $table->integer("user_id");
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
            $table->dropColumn("descriere");
            $table->dropColumn("adresa");
            $table->dropColumn("nume");
            $table->dropColumn("email");
            $table->dropColumn("user_id");
        });
    }
}
