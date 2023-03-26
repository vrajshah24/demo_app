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
        Schema::create('psm_fresh_product', function (Blueprint $table) {
            $table->id();
            $table->integer('psm_user_id');
            $table->string('form_fill_date');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('lat_long_address');
            $table->string('name_of_ada');
            $table->string('name_of_beat_market');
            $table->string('name_of_town');
            $table->string('total_outlet_beat');
            $table->string('outlet_visited');
            $table->string('HDB_deployed');
            $table->string('HAIB_booking');
            $table->string('POP_deployed');
            $table->string('new_outlet_addition');
            $table->string('HoReCa_outlet_addition');
            $table->string('home_delivery_boy_added');
            $table->string('ground_activity_name');
            $table->string('consumer_footfall');
            $table->string('sales_qty');
            $table->string('feedback');
            $table->string('observation');
            $table->string('branch_read');
            $table->string('zone_read');
            $table->string('ho_read');
            $table->string('status');
            $table->string('ip_address');
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
        Schema::dropIfExists('psm_fresh_product');
    }
};
