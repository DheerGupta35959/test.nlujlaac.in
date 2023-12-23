<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogimageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogimage', function (Blueprint $table) {
            $table->bigInteger('Id', true);
            $table->mediumText('AttachmentName');
            $table->mediumText('Attachment');
            $table->bigInteger('BlogId')->index('BlogId');
            $table->boolean('IsArchive')->default(false);
            $table->boolean('IsDeleted')->default(false);
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
        Schema::dropIfExists('blogimage');
    }
}
