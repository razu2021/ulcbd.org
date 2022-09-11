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
        Schema::create('main_menus', function (Blueprint $table) {
            $table->bigIncrements('mainmenu_id');
            $table->string('main_menu',100)->nullable();
            $table->string('mainmenu_link')->nullable();
            $table->string('submenu')->nullable();
            $table->string('submenu_link')->nullable();
            $table->string('other')->nullable();
            $table->string('other_link')->nullable();
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
        Schema::dropIfExists('main_menus');
    }
};
