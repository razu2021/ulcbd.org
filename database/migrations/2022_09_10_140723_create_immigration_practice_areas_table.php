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
        Schema::create('immigration_practice_areas', function (Blueprint $table) {
            $table->bigIncrements('uniq_id');
            $table->string('heading',100)->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('practice_name')->nullable();
            $table->text('practice_subject')->nullable();
            $table->text('practice_area')->nullable();
            $table->integer('post_creator')->nullable();
            $table->integer('post_editor')->nullable();
            $table->string('slug')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('immigration_practice_areas');
    }
};
