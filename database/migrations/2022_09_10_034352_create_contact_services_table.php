<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_services', function (Blueprint $table) {
            $table->bigIncrements('slider_id');
            $table->string('service_title',100)->nullable();
            $table->text('service_info')->nullable();
            $table->string('service_button')->nullable();
            $table->text('button_url')->nullable();
            $table->text('google_map')->nullable();
            $table->text('support_title')->nullable();
            $table->text('support_mail')->nullable();
            $table->text('support_phone')->nullable();
            $table->text('review_title')->nullable();
            $table->text('review_subtitle')->nullable();
            $table->text('review_info')->nullable();
            $table->string('slider_image',100)->nullable();
            $table->integer('slider_creator')->nullable();
            $table->integer('slider_editor')->nullable();
            $table->string('slider_slug')->nullable();
            $table->integer('slider_status')->default(1);
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
        Schema::dropIfExists('contact_services');
    }
};
