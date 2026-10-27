<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {

            $table->text('diagnosa')->nullable();
            $table->text('tindakan')->nullable();
            $table->string('obat')->nullable();
            $table->text('catatan_dokter')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {

            $table->dropColumn([
                'diagnosa',
                'tindakan',
                'obat',
                'catatan_dokter'
            ]);

        });
    }
};