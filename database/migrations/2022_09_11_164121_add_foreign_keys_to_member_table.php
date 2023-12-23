<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->foreign(['CreatedBy'], 'member_ibfk_1')->references(['Id'])->on('user');
            $table->foreign(['UpdatedBy'], 'member_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->dropForeign('member_ibfk_1');
            $table->dropForeign('member_ibfk_2');
        });
    }
}
