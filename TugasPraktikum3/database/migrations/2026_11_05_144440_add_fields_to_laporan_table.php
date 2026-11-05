<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->string('no_hp')->after('nama_pelapor');
            $table->string('kecamatan')->after('lokasi');
            $table->integer('tinggi_air')->nullable()->after('tinggi_genangan');
            $table->text('keterangan')->nullable()->after('tanggal_kejadian');
            $table->string('foto')->nullable()->after('keterangan');
            $table->string('status')->default('Menunggu')->after('foto');
        });
    }

    public function down(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->dropColumn([
                'no_hp',
                'kecamatan',
                'tinggi_air',
                'keterangan',
                'foto',
                'status',
            ]);
        });
    }
};