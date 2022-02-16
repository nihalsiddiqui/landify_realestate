<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_facilities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->double("distance")->nullable();
            $table->string("min_grade")->nullable();
            $table->string("max_grade")->nullable();
            $table->string("rating")->nullable();
            $table->string("map_location")->nullable();

            $table->unsignedBigInteger("listing_id")->index();
            $table->unsignedBigInteger("facility_id")->index();
            $table->timestamps();
            $table->foreign("facility_id")
                ->references("id")->on("facilities")->cascadeOnDelete();
            $table->foreign("listing_id")
                ->references("id")->on("listings")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_facilities');
    }
}
