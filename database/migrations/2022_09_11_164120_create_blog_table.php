<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('Title');
            $table->mediumText('ShortDescription');
            $table->mediumText('Content');
            $table->boolean('HasImage')->default(false);
            $table->boolean('HasAttachment')->default(false);
            $table->mediumText('AuthorName');
            $table->boolean('CommentStatus')->default(true);
            $table->bigInteger('CreatedBy')->index('CreatedBy');
            $table->dateTime('CreatedOn');
            $table->dateTime('UpdatedOn')->nullable();
            $table->bigInteger('UpdatedBy')->nullable()->index('UpdatedBy');
            $table->boolean('IsDeleted')->default(false);
            $table->boolean('IsArchived')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
