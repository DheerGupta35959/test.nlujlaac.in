<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculty', function (Blueprint $table) {
            $table->foreign(['CreatedBy'], 'faculty_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['UpdatedBy'], 'faculty_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculty', function (Blueprint $table) {
            $table->dropForeign('faculty_ibfk_1');
            $table->dropForeign('faculty_ibfk_2');
        });
    }
}
