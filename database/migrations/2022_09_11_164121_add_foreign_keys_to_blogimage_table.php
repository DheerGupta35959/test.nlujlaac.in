<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBlogimageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogimage', function (Blueprint $table) {
            $table->foreign(['CreatedBy'], 'blogimage_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['BlogId'], 'blogimage_ibfk_3')->references(['Id'])->on('blog');
            $table->foreign(['UpdatedBy'], 'blogimage_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogimage', function (Blueprint $table) {
            $table->dropForeign('blogimage_ibfk_1');
            $table->dropForeign('blogimage_ibfk_3');
            $table->dropForeign('blogimage_ibfk_2');
        });
    }
}
