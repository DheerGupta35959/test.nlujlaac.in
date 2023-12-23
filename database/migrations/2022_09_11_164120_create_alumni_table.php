<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('Name');
            $table->mediumText('ShortNote')->nullable();
            $table->mediumText('Location');
            $table->mediumText('Photo');
            $table->dateTime('CreatedOn');
            $table->bigInteger('CreatedBy');
            $table->bigInteger('UpdatedBy')->nullable();
            $table->dateTime('UpdatedOn')->nullable();
            $table->boolean('IsArchived')->default(false);
            $table->boolean('IsDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni');
    }
}
