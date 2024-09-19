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
        Schema::create('merchant', function (Blueprint $table) {
            $table->id();
            $table->string('nama_merchant');
            $table->datetimes('tanggal');
            $table->string('order');
            $table->string('rating');
            $table->string('harga_jual');
            $table->string('delivery');
            $table->string('weight_order');
            $table->string('promo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant');
    }
};
