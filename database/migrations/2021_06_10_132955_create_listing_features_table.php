<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_features', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("count")->default(1);

            $table->unsignedBigInteger("listing_id")->index();
            $table->unsignedBigInteger("feature_id")->index();
            $table->timestamps();
            $table->foreign("feature_id")
                ->references("id")->on("features")->cascadeOnDelete();
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
        Schema::dropIfExists('listing_features');
    }
}
