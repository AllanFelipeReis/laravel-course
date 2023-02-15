<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string("unit", 5); // cm, mm, kg
            $table->string("description", 30);
            $table->timestamps();
        });

        // Adicionar o relacionamento table products
        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");
        });

        // Adicionar o relacionamento table product_details
        Schema::table("product_details", function(Blueprint $table) {
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remover relacionamento table product_details
        Schema::table("product_details", function(Blueprint $table) {
            // Remove FK
            $table->dropForeign("product_details_unit_id_foreign"); // [table]_[column]_[foreign] (Nomenclatura padrão Laravel)
            // Remove column
            $table->dropColumn("unit_id");
        });

        // Remover relacionamento table products
        Schema::table("products", function(Blueprint $table) {
            // Remove FK
            $table->dropForeign("products_unit_id_foreign"); // [table]_[column]_[foreign] (Nomenclatura padrão Laravel)
            // Remove column
            $table->dropColumn("unit_id");
        });

        Schema::dropIfExists('units');
    }
}
