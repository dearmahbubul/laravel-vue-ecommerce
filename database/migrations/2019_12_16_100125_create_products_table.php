<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')->on('categories');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->string('name',300);
            $table->string('regular_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('photo')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('discount')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->nullable()->comment('active = 1, deActive = 0');
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
