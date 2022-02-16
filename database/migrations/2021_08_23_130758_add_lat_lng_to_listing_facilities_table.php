<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatLngToListingFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing_facilities', function (Blueprint $table) {
            $table->string('lat')->after('rating');
            $table->string('lng')->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing_facilities', function (Blueprint $table) {
            $table->dropColumn(['lat', 'lng']);
        });
    }
}
