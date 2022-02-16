<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('status');
            $table->unsignedBigInteger("town_id")->index();
            $table->unsignedDouble('price')->nullable();
            $table->text('address')->nullable();
            $table->integer('no_of_rooms')->nullable();
            $table->integer('no_of_beds')->nullable();
            $table->integer('no_of_baths')->nullable();
            $table->integer('no_of_kitchens')->nullable();
            $table->integer('no_of_living_rooms')->nullable();
            $table->integer('no_of_dinning_rooms')->nullable();
            $table->integer('no_of_laundry_rooms')->nullable();
            $table->integer('no_of_garages')->nullable();
            $table->double('square_feats')->nullable();
            $table->string('summary')->nullable();
            $table->date('built_year')->nullable();
            $table->integer('postal_code')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->integer('no_of_floors')->nullable();
            $table->double('amount_per_square_feet')->nullable();
            $table->text('thumbnail')->nullable();
            $table->double('cost_per_square_feet')->nullable();
            $table->double('installment_per_month')->nullable();
            $table->string('built_style')->nullable();
            $table->enum('purpose',['sale','rent','for_lease','mortgage', 'sold','listing_only']);
            $table->string('listing_source')->nullable();
            $table->enum('constructions_status',['foundation','grey_structure','under_construction','semi_finished','constructed']) ;
            $table->longText('description')->nullable();

            $table->foreign("town_id")
                ->references("id")->on("towns")->cascadeOnDelete();

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
        Schema::dropIfExists('listings');
    }
}
