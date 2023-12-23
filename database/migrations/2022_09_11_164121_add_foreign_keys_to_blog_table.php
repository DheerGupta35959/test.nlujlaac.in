<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->foreign(['AuthorId'], 'blog_ibfk_1')->references(['Id'])->on('author');
            $table->foreign(['UpdatedBy'], 'blog_ibfk_3')->references(['Id'])->on('user');
            $table->foreign(['CreatedBy'], 'blog_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->dropForeign('blog_ibfk_1');
            $table->dropForeign('blog_ibfk_3');
            $table->dropForeign('blog_ibfk_2');
        });
    }
}
