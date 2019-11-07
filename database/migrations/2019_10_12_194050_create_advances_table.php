<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_Id');
            $table->integer('control_Id')->unsigned();
            $table->foreign('control_Id')->references('id')->on('controls')->onDelete('cascade');

            $table->string('type');
            $table->string('nroOrder');
            $table->string('nroInvoice');
            $table->date('date');
            $table->string('description');
            $table->integer('status');
            $table->unsignedDecimal('totalAmount', 30, 2);
            $table->unsignedDecimal('DRSE', 30, 2);
            $table->unsignedDecimal('DEPS', 30, 2);
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
        Schema::dropIfExists('advances');
    }
}
