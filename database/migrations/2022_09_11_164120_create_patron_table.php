<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patron', function (Blueprint $table) {
            $table->bigInteger('Id');
            $table->mediumText('Name');
            $table->mediumText('ShortNote');
            $table->mediumText('Photo');
            $table->boolean('IsArchived')->default(false);
            $table->boolean('IsDeleted')->default(false);
            $table->dateTime('CreatedOn');
            $table->bigInteger('CreatedBy')->index('CreatedBy');
            $table->bigInteger('UpdatedBy')->nullable()->index('UpdatedBy');
            $table->dateTime('UpdatedOn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patron');
    }
}
