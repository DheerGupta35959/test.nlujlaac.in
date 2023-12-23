<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table -> dropTimestamps();
            $table->bigInteger('Id', true);
            $table->mediumText('Name');
            $table->mediumText('Photo');
            $table->boolean('IsActive')->default(true);
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
        Schema::dropIfExists('carousel');
    }
}
