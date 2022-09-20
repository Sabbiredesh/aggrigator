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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('pickup_location_id');
            $table->integer('status_id');
            $table->integer('coupon_id');
            $table->integer('delivery_zone_id');
            $table->integer('delivery_district_id');
            $table->integer('delivery_thana_id');
            $table->integer('delivery_area_id');
            $table->integer('delivery_post_code');
            $table->string('delivery_address');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('customer_name');
            $table->integer('customer_mobile');
            $table->string('customer_alt_mobile');
            $table->double('actual_amount');
            $table->double('collection_amount');
            $table->double('discount');
            $table->double('cod_charge');
            $table->double('collection_charge');
            $table->double('delivery_charge');
            $table->double('return_charge');
            $table->dateTime('posted_on');
            $table->string('posted_by');
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
        Schema::dropIfExists('orders');
    }
};
