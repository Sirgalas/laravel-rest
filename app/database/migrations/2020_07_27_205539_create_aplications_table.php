<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comment', 1000)->nullable();
            $table->unsignedBigInteger('freelancer_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->index('freelancer_id','idx_applications_freelancer_id');
            $table->foreign('freelancer_id','fk_applications_to_freelancers')->references('id')->on('freelancers');
            $table->index('order_id','idx_applications_order_id');
            $table->foreign('order_id','fk_applications_to_orders')->references('id')->on('orders');
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
        Schema::dropIfExists('aplications');
    }
}
