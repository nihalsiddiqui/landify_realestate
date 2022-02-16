<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string('slug')->unique();
            $table->integer("no_of_floors")->nullable();
            $table->text("description")->nullable();
            $table->double("min_price")->nullable();
            $table->double("max_price")->nullable();
            $table->string("address_line_1");
            $table->string("address_line_2")->nullable();
            $table->double("latitude")->nullable();
            $table->double("longitude")->nullable();
            $table->text("radius")->nullable()->comment("for storing the area in google maps of the property");
            $table->foreignId("category_id")->index()->constrained('categories')->restrictOnDelete();
            $table->foreignId("sub_category_id")->index()->nullable()->constrained('categories')->restrictOnDelete();
            $table->foreignId("town_id")->index()->constrained()->restrictOnDelete();
            $table->foreignId("created_by")->index()->constrained('admins')->cascadeOnDelete();
            $table->foreignId("updated_by")->index()->nullable()->constrained('admins')->cascadeOnDelete();
            $table->timestamps();

//            $table->foreign("category_id")->references("id")
//                  ->on("categories")->cascadeOnDelete();
//            $table->foreign("sub_category_id")->references("id")
//                  ->on("categories")->cascadeOnDelete();

//            $table->foreign("town_id")->references("id")
//                ->on("towns")->cascadeOnDelete();

//            $table->foreign("created_by")->references("id")
//                ->on("admins")->cascadeOnDelete();
//            $table->foreign("updated_by")->references("id")
//                ->on("admins")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
