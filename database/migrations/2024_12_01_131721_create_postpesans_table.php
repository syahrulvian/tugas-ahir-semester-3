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
        Schema::create('postpesans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('No_barang');
            $table->string('alamat');
            $table->string('email');
            $table->string('No_HP');
            $table->string('Request');
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
        Schema::dropIfExists('postpesans');
    }
};
