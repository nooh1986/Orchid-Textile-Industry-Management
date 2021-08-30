<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('gear');
            $table->integer('quantity');
            $table->decimal('price','8','2');
            $table->decimal('total','8','2');
            $table->foreignId('machine_id')->references('id')->on('machines')->onDelete('cascade');
            $table->foreignId('string_id')->references('id')->on('strings')->onDelete('cascade');
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
        Schema::dropIfExists('outputs');
    }
}
