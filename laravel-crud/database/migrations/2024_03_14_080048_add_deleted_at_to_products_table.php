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
        Schema::table('products', function (Blueprint $table) {
            $table->softDeletes(); 
            //soft delete ile biz veriyi silmiyoruz, sadece deleted_at kolonunu dolduruyoruz, arayüzde silinmiş gibi gözüküyor ama veri tabanında duruyor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropSoftDeletes(); //soft delete işlemi geri alınır ve deleted_at kolonu silinir
        });
    }
};
