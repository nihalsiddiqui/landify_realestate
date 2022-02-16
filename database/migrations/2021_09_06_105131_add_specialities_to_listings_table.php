<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecialitiesToListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->boolean('featured')->default(false)->after('meta_tag');
            $table->boolean('hot_offer')->default(false)->after('featured');
            $table->boolean('open_house')->default(false)->after('hot_offer');
            $table->boolean('foreclosure')->default(false)->after('open_house');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn(['featured', 'hot_offer', 'open_house', 'foreclosure']);
        });
    }
}
