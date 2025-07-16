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
        //
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('nama_role');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role', 'role_user')->references('id')->on('role');
        });

        Schema::create('pengantri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengantri');
            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user', 'akun_pengantri')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->timestamps();
        });

        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengantri');
            $table->unsignedBigInteger('id_layanan');
            $table->dateTime('antrian_dibuat');
            $table->datetime('antrian_ditutup')->nullable();
            $table->timestamps();
            $table->foreign('id_pengantri', 'pengantri_antrian')->references('id')->on('pengantri');
            $table->foreign('id_layanan', 'layanan_antrian')->references('id')->on('layanan');
        });
    }

    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('role_user');
            $table->dropColumn('id_role');
        });

        Schema::dropIfExists('pengantri');
        Schema::dropIfExists('antrian');
        Schema::dropIfExists('role');
        Schema::dropIfExists('layanan');
    }
};
