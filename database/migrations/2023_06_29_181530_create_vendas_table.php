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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_vendedor');
            $table->foreign('id_vendedor')->references('id')->on('vendedors')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
