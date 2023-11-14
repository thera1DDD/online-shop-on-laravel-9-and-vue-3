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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->string('preview_image');
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->integer('count')->nullable();
            $table->integer('MP');
            $table->integer('is_published')->default(1);
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
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
        Schema::dropIfExists('products');
    }
};
