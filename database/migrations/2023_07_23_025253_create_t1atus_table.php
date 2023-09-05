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
        Schema::create('t1atu', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nominal')->nullable();
            $table->date('tanggal1')->nullable();
            $table->date('tanggal2')->nullable();
            $table->date('tanggal3')->nullable();
            $table->date('tanggal4')->nullable();
            $table->date('tanggal5')->nullable();
            $table->string('pembayaran1')->nullable();
            $table->string('pembayaran2')->nullable();
            $table->string('pembayaran3')->nullable();
            $table->string('pembayaran4')->nullable();
            $table->string('pembayaran5')->nullable();
            $table->string('sisa1')->nullable();
            $table->string('sisa2')->nullable();
            $table->string('sisa3')->nullable();
            $table->string('sisa4')->nullable();
            $table->string('sisa5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t1atu');
    }
};
