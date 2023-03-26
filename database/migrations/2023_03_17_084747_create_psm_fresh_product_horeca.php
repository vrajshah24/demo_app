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
        Schema::create('psm_fresh_product_horeca', function (Blueprint $table) {
            $table->id();
            $table->integer('fresh_product_form_id');
            $table->string('HoReCa_outlet_name');
            $table->string('HoReCa_supply_qty');
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
        Schema::dropIfExists('psm_fresh_product_horeca');
    }
};
