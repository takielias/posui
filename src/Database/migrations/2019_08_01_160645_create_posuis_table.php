<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posuis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->double('product_price', 9, 2);
            $table->string('product_image')->nullable();
            $table->integer('product_quantity')->default(1);
            $table->string('product_description')->nullable();
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
        Schema::dropIfExists('posuis');
    }
}
