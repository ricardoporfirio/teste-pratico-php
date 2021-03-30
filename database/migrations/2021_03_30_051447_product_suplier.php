<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductSuplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_suplier', function (Blueprint $table) {      
            $table->unsignedBigInteger('products_id')
                  ->references('id')
                  ->on('products');

                  $table->unsignedBigInteger('suplier_id')
                  ->references('id')
                  ->on('supliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_suplier');
    }
}
