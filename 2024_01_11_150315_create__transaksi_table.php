<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('email');
            $table->string('Alamat');
            $table->string('Notelp');
            $table->enum('product&paket',['paket 1 jawa&bali','paket 2 jawa&bali','paket 3 jawa&bali','paket 4 jawa&bali','paket 1 jabodetabek','paket 2 jabodetabek','paket 3 jabodetabek','paket 4 jabodetabek','paket 1 sumatera&kalimantan','paket 2 sumatera&kalimantan','paket 3 sumatera&kalimantan','paket 4 sumatera&kalimantan','paket 1 indonesia timur','paket 2 indonesia timur','paket 3 indonesia timur','paket 4 indonesia timur','ott diamond','paket basic','paket medium','paket premium']);
            $table->enum('harga',['212.000','230.000','336.000','563.000','207.000','225.000','297.000','427.000','250.000','265.000','395.000','635.000','287.000','290.000','414.000','679.000','149.000','425.000','700.000','1.750.000']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_transaksi');
    }
};
