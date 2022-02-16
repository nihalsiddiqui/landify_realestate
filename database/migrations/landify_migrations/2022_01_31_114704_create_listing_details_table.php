<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_details', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->text('others')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('city')->nullable();
            $table->text('nationality')->nullable();
            $table->text('area_of_Property')->nullable();
            $table->text('nature_of_query')->nullable();
            $table->text('province')->nullable();
            $table->text('district')->nullable();
            $table->text('tehsil')->nullable();
            $table->text('union_council')->nullable();
            $table->text('khewat')->nullable();
            $table->text('khasra')->nullable();
            $table->text('khetoni')->nullable();
            $table->string('registry_file')->nullable();
            $table->string('list_one')->nullable();
            $table->string('list_two')->nullable();
            $table->string('list_three')->nullable();
            $table->string('list_four')->nullable();
            $table->string('list_five')->nullable();
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
        Schema::dropIfExists('listing_details');
    }
}
