<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpfsResources225363 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipfs_resources', function (Blueprint $table) {
            $table->id();
            $table->text('resources_name')->nullable();
            $table->text('link_resources')->nullable();
            $table->text('resources_path')->nullable();
            $table->text('resources_type')->nullable();
            $table->text('link_thumbnail')->nullable();
            $table->text('thumbnail_path')->nullable();
            $table->text('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipfs_resources');
    }
}
