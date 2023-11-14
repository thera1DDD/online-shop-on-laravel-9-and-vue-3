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
            $columns = ['username', 'phone_number', 'image_url', 'product_name', 'price', 'quantity', 'subtotal', 'total'];

            foreach ($columns as $column) {
                if (!Schema::hasColumn('orders', $column)) {
                    $table->string($column)->nullable();
                }
            }
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
            $columns = ['username', 'phone_number', 'image_url', 'product_name', 'price', 'quantity', 'subtotal', 'total'];

            foreach ($columns as $column) {
                if (!Schema::hasColumn('orders', $column)) {
                    $table->string($column)();
                }
            }
        });
    }
};
