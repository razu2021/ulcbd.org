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
        Schema::create('contact_deteails', function (Blueprint $table) {
            $table->bigIncrements('deteails_id');
            $table->string('logo')->nullable();
            $table->string('phone',100)->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->integer('post_creator')->nullable();
            $table->integer('post_editor')->nullable();
            $table->string('post_slug')->nullable();
            $table->integer('post_status')->default(1);
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
        Schema::dropIfExists('contact_deteails');
    }
};
