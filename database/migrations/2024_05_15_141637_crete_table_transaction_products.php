<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_products', function (Blueprint $table) {
            $table->bigInteger('transaction_id');
            $table->bigInteger('product_id');
            $table->index(['transaction_id', 'product_id'], 'transaction_product_index');
            $table->integer('qty');
            $table->integer('selling_price');
            $table->integer('subtotal');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_products');
    }
};
