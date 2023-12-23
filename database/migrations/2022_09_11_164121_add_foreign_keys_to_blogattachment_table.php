<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBlogattachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogattachment', function (Blueprint $table) {
            $table->foreign(['UpdatedBy'], 'blogattachment_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['BlogId'], 'blogattachment_ibfk_3')->references(['Id'])->on('blog');
            $table->foreign(['CreatedBy'], 'blogattachment_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogattachment', function (Blueprint $table) {
            $table->dropForeign('blogattachment_ibfk_1');
            $table->dropForeign('blogattachment_ibfk_3');
            $table->dropForeign('blogattachment_ibfk_2');
        });
    }
}
