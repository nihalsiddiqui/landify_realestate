<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("property_id")->index();
            $table->unsignedBigInteger("listing_id")->index();
            $table->timestamps();
            $table->foreign("property_id")
                ->references("id")->on("properties")->cascadeOnDelete();
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
        Schema::dropIfExists('property_listings');
    }
}
