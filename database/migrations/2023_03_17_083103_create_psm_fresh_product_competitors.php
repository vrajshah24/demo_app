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
        Schema::create('psm_fresh_product_competitors', function (Blueprint $table) {
            $table->id();
            $table->integer('fresh_product_form_id');
            $table->string('product');
            $table->string('fat');
            $table->string('snf');
            $table->string('mrp');
            $table->string('retial_rate');
            $table->string('scheme_info');
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
        Schema::dropIfExists('psm_fresh_product_competitors');
    }
};
