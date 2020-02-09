<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identification_type');
            $table->string('identification_number');
            $table->string('address_street');
            $table->string('address_number');
            $table->bigInteger('city_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['identification_type', 'identification_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
