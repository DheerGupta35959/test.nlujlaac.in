<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('Name');
            $table->mediumText('ShortNote')->nullable();
            $table->mediumText('Position')->nullable();
            $table->mediumText('Photo');
            $table->boolean('IsCurrentMember')->default(true);
            $table->boolean('IsArchive')->default(false);
            $table->boolean('IsDeleted')->default(false);
            $table->bigInteger('CreatedBy')->index('CreatedBy');
            $table->dateTime('CreatedOn');
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
        Schema::dropIfExists('member');
    }
}
