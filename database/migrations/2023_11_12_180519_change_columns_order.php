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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('username')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('product_name')->nullable()->change();
            $table->string('price')->nullable()->change();
            $table->string('quantity')->nullable()->change();
            $table->string('subtotal')->nullable()->change();
            $table->string('total')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('username')->change();
            $table->string('phone_number')->change();
            $table->string('price')->change();
            $table->string('quantity')->change();
            $table->string('subtotal')->change();
            $table->string('total')->change();
        });
    }
};
