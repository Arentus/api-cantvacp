<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_Id');
            $table->unsignedInteger('budget_id');
            $table->unsignedInteger('control_id');
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');
             $table->foreign('control_id')->references('id')->on('controls')->onDelete('cascade');
            $table->string('description');
            $table->unsignedDecimal('amount',30,2);
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
        Schema::dropIfExists('expenses');
    }
}
