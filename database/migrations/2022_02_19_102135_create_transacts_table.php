<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacts', function (Blueprint $table) {
            $table->id('trano');

            $table->date('TraDate');
            $table->integer('VouNo')->unsigned();

            $table->integer('BillId')->unsigned();

            $table->string('TraDetails');
            $table->string('TraCurrency');
            $table->integer('CurP')->unsigned();
            $table->integer('Project')->unsigned();
            $table->integer('UserNo')->unsigned();

            $table->integer('typesales')->unsigned();
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
        Schema::dropIfExists('transacts');
    }
};
