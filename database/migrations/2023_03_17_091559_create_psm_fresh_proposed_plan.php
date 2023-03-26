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
        Schema::create('psm_fresh_proposed_plan', function (Blueprint $table) {
            $table->id();
            $table->integer('psm_user_id');
            $table->string('daily_activity');
            $table->string('py_tgt');
            $table->string('py_ach');
            $table->string('cy_tgt');
            $table->string('ip_address');
            $table->string('status');
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
        Schema::dropIfExists('psm_fresh_proposed_plan');
    }
};
