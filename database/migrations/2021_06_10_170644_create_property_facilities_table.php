<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("property_id")->index();
            $table->unsignedBigInteger("facility_id")->index();
            $table->timestamps();
            $table->foreign("facility_id")
                ->references("id")->on("facilities")->cascadeOnDelete();
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
        Schema::dropIfExists('property_facilities');
    }
}
