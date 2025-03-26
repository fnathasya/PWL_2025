<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('t_stok', function (Blueprint $table) {
            // Hapus foreign key lama dulu
            $table->dropForeign(['user_id']);
            
            // Tambahkan foreign key baru mengacu ke m_user.user_id
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    public function down(): void
    {
        Schema::table('t_stok', function (Blueprint $table) {
            // Rollback perubahan foreign key jika dibatalkan
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
