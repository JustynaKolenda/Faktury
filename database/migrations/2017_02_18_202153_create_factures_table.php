<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('name_of_service');
            $table->text('PKWiU');
            $table->text('unit');
            $table->string('quantity',100);
            $table->double('net_price',11,2);
            $table->double('discount',11,2);
            $table->integer('net_value');
            $table->integer('brutto_value');
            $table->integer('advance');
            $table->date('date_issue',8);
            $table->date('date_payment',8);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict');
            $table->integer('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')->on('payments')
                ->onDelete('restrict');
            $table->integer('vat_rate_id')->unsigned();
            $table->foreign('vat_rate_id')->references('id')->on('vat_rates')
                ->onDelete('restrict');
            $table->integer('firm_adress_id')->unsigned();
            $table->foreign('firm_adress_id')->references('id')->on('firm_adresses')
                ->onDelete('restrict');
            $table->integer('firm_sender_id')->unsigned();
            $table->foreign('firm_sender_id')->references('id')->on('firm_senders')
                ->onDelete('restrict');

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
        Schema::dropIfExists('factures');
    }
}
