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
        if (!Schema::hasTable('m_penjualan')) {
            Schema::create('m_penjualan', function (Blueprint $table) {
                $table->bigIncrements('penjualan_id');
                $table->unsignedBigInteger('id_user')->index();
                $table->varchar('pembeli', 50);
                $table->varchar('penjualan_kode', 20);
                $table->dateTime('penjualan_tanggal');
                $table->timestamps();

                // Define foreign key constraint
                $table->foreign('id_user')->references('id_user')->on('m_user');
            });
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_penjualan', function (Blueprint $table){

        });
    }
};
