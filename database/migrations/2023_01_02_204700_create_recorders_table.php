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
        Schema::create('recorders', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('preview_image');
            $table->text('description');
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->integer('count')->nullable();
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->foreignId('channel_id')->nullable()->index()->constrained('channels');
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
        Schema::dropIfExists('recorders');
    }
};
