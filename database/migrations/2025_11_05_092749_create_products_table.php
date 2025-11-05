<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // ชื่อสินค้า
            $table->text('description')->nullable(); // รายละเอียด
            $table->decimal('price', 10, 2);  // ราคา
            $table->integer('stock')->default(0); // จำนวนคงเหลือ
            $table->string('image')->nullable(); // ชื่อไฟล์ภาพ
            $table->timestamps();              // created_at / updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
