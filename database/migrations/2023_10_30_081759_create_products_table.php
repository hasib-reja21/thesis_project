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
            $table->string('Product_Name');
            $table->foreignId('category_id');
            $table->double('Product_Price');
            $table->text('Product_Description')->nullable();
            $table->string('Product_Image')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
            $table->string('bid_expiration_date');
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
