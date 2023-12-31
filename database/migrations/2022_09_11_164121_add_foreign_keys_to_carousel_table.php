<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carousel', function (Blueprint $table) {
            $table->foreign(['CreatedBy'], 'carousel_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['UpdatedBy'], 'carousel_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carousel', function (Blueprint $table) {
            $table->dropForeign('carousel_ibfk_1');
            $table->dropForeign('carousel_ibfk_2');
        });
    }
}
