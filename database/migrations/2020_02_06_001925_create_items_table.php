<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode');
            $table->string('name');
            $table->string('description');
            $table->double('stock')->default(0);
            $table->bigInteger('measurement_unit_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->string('photo')->nullable();
            $table->double('cost');
            $table->double('charge')->default(0);
            $table->double('profit')->default(0);
            $table->double('iva')->default(0);
            $table->bigInteger('supplier_id_1')->unique()->unsigned();
            $table->bigInteger('supplier_id_2')->unique()->unsigned()->nullable();
            $table->bigInteger('supplier_id_3')->unique()->unsigned()->nullable();
            $table->bigInteger('supplier_id_4')->unique()->unsigned()->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['barcode', 'brand_id']);
            $table->foreign('measurement_unit_id')->references('id')->on('measurement_units');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('supplier_id_1')->references('id')->on('suppliers');
            $table->foreign('supplier_id_2')->references('id')->on('suppliers');
            $table->foreign('supplier_id_3')->references('id')->on('suppliers');
            $table->foreign('supplier_id_4')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
