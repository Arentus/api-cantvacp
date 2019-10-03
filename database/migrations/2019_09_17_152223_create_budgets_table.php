<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {

            $table->increments('id');
            $table->string('user_Id');
            $table->string('control_Id');

            $table->unsignedInteger('nroOrder');
            $table->unsignedInteger('nroInvoice');

            $table->string('description');
            $table->date('date');
            $table->string('status');
        
            $table->string('type');
            
            $table->unsignedDecimal('totalAmount', 30, 2);
            $table->unsignedDecimal('DRSE', 30, 2);
            $table->unsignedDecimal('DEPS', 30, 2);
            $table->unsignedDecimal('totalIncome', 30, 2);

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
        Schema::dropIfExists('budgets');
    }
}
