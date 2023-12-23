<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patron', function (Blueprint $table) {
            $table->foreign(['CreatedBy'], 'patron_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['UpdatedBy'], 'patron_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patron', function (Blueprint $table) {
            $table->dropForeign('patron_ibfk_1');
            $table->dropForeign('patron_ibfk_2');
        });
    }
}
