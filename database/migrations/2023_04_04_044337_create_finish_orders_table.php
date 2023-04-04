<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finish_orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('cart_items')->default(null);
            $table->integer('total')->default(0);
            $table->integer('table_number');
            $table->boolean('dinein')->default(true);
            $table->boolean('takeaway')->default(false);
            $table->text('comment');
            $table->string('status')->default('pending');
            $table->string('product_id')->default(null)->nullable();
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
        Schema::dropIfExists('finish_orders');
    }
};
