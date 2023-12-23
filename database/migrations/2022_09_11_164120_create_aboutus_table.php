<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('Data');
            $table->bigInteger('CreatedBy')->index('CreatedBy');
            $table->dateTime('CreatedOn');
            $table->dateTime('UpdatedOn')->nullable();
            $table->bigInteger('UpdatedBy')->nullable()->index('UpdatedBy');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
