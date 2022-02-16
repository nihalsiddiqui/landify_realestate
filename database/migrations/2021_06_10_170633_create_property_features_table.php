<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("property_id")->index();
            $table->unsignedBigInteger("feature_id")->index();
            $table->timestamps();
            $table->foreign("feature_id")
                ->references("id")->on("features")->cascadeOnDelete();
            $table->foreign("property_id")
                ->references("id")->on("properties")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_features');
    }
}
