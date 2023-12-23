<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('Name');
            $table->mediumText('ShortNote')->nullable();
            $table->mediumText('Posititon');
            $table->bigInteger('CreatedBy');
            $table->dateTime('CreatedOn');
            $table->bigInteger('UpdatedOn')->nullable();
            $table->dateTime('UpdatedBy')->nullable();
            $table->boolean('IsArchive')->default(false);
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
        Schema::dropIfExists('mentors');
    }
}
