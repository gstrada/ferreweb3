<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('cuit')->unique();
            $table->string('address_street');
            $table->string('address_number');
            $table->bigInteger('city_id')->unsigned();
            $table->string('email');
            $table->string('phone');
            $table->text('observations')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
