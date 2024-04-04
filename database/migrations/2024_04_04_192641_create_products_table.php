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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('details')->nullable();
            $table->text('price')->nullable();
            $table->text('image')->nullable();
            $table->text('sku')->nullable();
            $table->text('qty')->nullable();
            $table->bigInteger('color_id')->unsigned()->nullable(); //unsigned=> لا يكون قيمه سالبه
            $table->foreign('color_id')->references('id')->on('colors');
            $table->bigInteger('size_id')->unsigned()->nullable(); //unsigned=> لا يكون قيمه سالبه
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->bigInteger('sub_categories_id')->unsigned()->nullable(); //unsigned=> لا يكون قيمه سالبه
            $table->foreign('sub_categories_id')->references('id')->on('sub_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
