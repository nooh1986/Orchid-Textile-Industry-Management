<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strings', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('color');
            $table->integer('count');
            $table->decimal('long','8','2');
            $table->boolean('status');
            $table->decimal('price','8','2')->nullable()->default(0);
            $table->decimal('long_aw','8','2')->nullable()->default(0);
            $table->date('date_on')->nullable();
            $table->date('date_off')->nullable();
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('strings');
    }
}
