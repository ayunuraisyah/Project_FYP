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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slug')->constrained(
                table: 'items', indexName: 'slugOrders'
            );
            $table->string('qty');
            $table->integer('total');
            $table->text('note')->nullable();
            $table->string('method');
            $table->string('status');
            $table->foreignId('email')->constrained(
                table: 'users', indexName: 'emailOrders'
            );
            $table->binary('receipt')->nullable();
            $table->string('orderNum')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
