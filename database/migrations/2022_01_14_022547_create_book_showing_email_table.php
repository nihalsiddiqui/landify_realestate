<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookShowingEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_showing_email', function (Blueprint $table) {
            $table->id();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('email')->nullable();
            $table->text('phone_no')->nullable();
            $table->text('message')->nullable();
            $table->text('preference')->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->text('first_and_last_name')->nullable();
            $table->text('pre_approved')->nullable();
            $table->text('visits')->nullable();
            $table->text('favourites')->nullable();
            $table->text('photo_views')->nullable();
            $table->text('shares')->nullable();
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
        Schema::dropIfExists('book_showing_email');
    }
}
