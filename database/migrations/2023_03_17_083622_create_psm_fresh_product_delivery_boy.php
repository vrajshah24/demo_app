<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psm_fresh_product_delivery_boy', function (Blueprint $table) {
            $table->id();
            $table->integer('fresh_prododuct_form_id');
            $table->string('boy_name');
            $table->string('area_id');
            $table->string('no_house_cover');
            $table->string('delivery_supply_qty');
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
        Schema::dropIfExists('psm_fresh_product_delivery_boy');
    }
};