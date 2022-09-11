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
        Schema::create('contact_contactforms', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->string('name',100);
            $table->string('phone');
            $table->string('email');
            $table->text('subject');
            $table->text('contact_massage');
            $table->string('image',100)->nullable();
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
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
        Schema::dropIfExists('contact_contactforms');
    }
};
