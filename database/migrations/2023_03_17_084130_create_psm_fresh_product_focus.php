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
        Schema::create('psm_fresh_product_focus', function (Blueprint $table) {
            $table->id();
            $table->integer('fresh_product_form_id');
            $table->integer('focus_pack_id');
            $table->string('focus_sales_qty');
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
        Schema::dropIfExists('psm_fresh_product_focus');
    }
};
