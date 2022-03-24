<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldfishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goldfish', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('petCat_id');
            $table->foreign('petCat_id')->references('id')->on('pet_categories')->onDelete('cascade');
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
        Schema::dropIfExists('goldfish');
    }
}
