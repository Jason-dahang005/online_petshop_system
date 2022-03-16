<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->unsignedBigInteger('prodCat_id');
            $table->foreign('prodCat_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->integer('stock');
            $table->string('image');
            $table->boolean('status')->default(0)->comment('1=active, 0=inactive');
            $table->timestamps();
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
}
