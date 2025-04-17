<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('t_penjualan', function (Blueprint $table) {
            // Hapus foreign key lama dulu
            $table->dropForeign(['user_id']);

            // Tambahkan foreign key baru ke m_user(user_id)
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('t_penjualan', function (Blueprint $table) {
            // Kembalikan ke foreign key sebelumnya jika perlu
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
