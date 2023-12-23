<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogattachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogattachment', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('AttachmentName');
            $table->mediumText('Attachment');
            $table->bigInteger('BlogId')->index('BlogId');
            $table->boolean('IsArchived')->default(false);
            $table->boolean('IsDeleted')->default(false);
            $table->dateTime('CreatedOn');
            $table->bigInteger('CreatedBy')->index('CreatedBy');
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
        Schema::dropIfExists('blogattachment');
    }
}
