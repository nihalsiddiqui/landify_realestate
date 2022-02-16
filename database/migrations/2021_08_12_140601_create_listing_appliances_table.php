<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingAppliancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_appliances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("count")->default(1);
            $table->string("description")->nullable();
            $table->unsignedBigInteger("listing_id")->index();
            $table->unsignedBigInteger("appliance_id")->index();
            $table->foreign("appliance_id")
                ->references("id")->on("appliances")->cascadeOnDelete();
            $table->foreign("listing_id")
                ->references("id")->on("listings")->cascadeOnDelete();
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
        Schema::dropIfExists('listing_appliances');
    }
}
