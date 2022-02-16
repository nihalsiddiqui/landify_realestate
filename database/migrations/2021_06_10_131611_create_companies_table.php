<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description")->nullable();
            $table->unsignedBigInteger("town_id")->index();
            $table->string("address_line_1")->nullable();
            $table->string("address_line_2")->nullable();
            $table->unsignedBigInteger("company_role_id")->index();
            $table->timestamps();
            $table->foreign("town_id")
                ->references("id")->on("towns")
                ->onDelete("CASCADE");
            $table->foreign("company_role_id")
                ->references("id")->on("company_roles")
                ->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
