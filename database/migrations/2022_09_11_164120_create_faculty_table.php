<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->integer('Id');
            $table->mediumText('Name');
            $table->mediumText('ShortNote')->nullable();
            $table->mediumText('Photo');
            $table->boolean('IsArchive');
            $table->integer('IsDeleted');
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
        Schema::dropIfExists('faculty');
    }
}
