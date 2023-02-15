<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustBranchProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table branch
        Schema::create("branchs", function (Blueprint $table) {
            $table->id();
            $table->string("name", 30);
            $table->timestamps();
        });

        // Create table product_branch
        Schema::create("product_branch", function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("branch_id");
            $table->unsignedBigInteger("product_id");
            $table->float("price", 8, 2)->default(1);
            $table->integer("stock_min")->default(1);
            $table->integer("stock_max")->default(1);
            $table->timestamps();

            $table->foreign("branch_id")->references("id")->on("branchs");
            $table->foreign("product_id")->references("id")->on("products");
        });

        // Remove columns table product
        Schema::table("products", function(Blueprint $table) {
            $table->dropColumn(["price", "stock_min", "stock_max"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Create columns table product
         Schema::table("products", function(Blueprint $table) {
            $table->float("price", 8, 2)->default(0.01);
            $table->integer("stock_min")->default(1);
            $table->integer("stock_max")->default(1);
        });

        // Remove table product_branch
        Schema::dropIfExists("product_branch");

        // Remove table branch
        Schema::dropIfExists("branchs");
    }
}
