<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('AuthorName');
            $table->mediumText('AuthorDescription')->nullable();
            $table->mediumText('AuthorPhoto')->nullable();
            $table->dateTime('CreatedOn');
            $table->bigInteger('CreatedBy')->index('CreatedBy');
            $table->bigInteger('UpdatedBy')->nullable()->index('UpdatedBy');
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
        Schema::dropIfExists('author');
    }
}
