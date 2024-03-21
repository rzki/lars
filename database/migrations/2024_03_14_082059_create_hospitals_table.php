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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->uuid()->nullable();
            $table->string('nirs')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('kelas')->nullable();
            $table->string('unit_instalasi')->nullable();
            $table->string('no_telp')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('alamat_lengkap')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('direktur')->nullable();
            $table->string('email_direktur')->nullable()->unique();
            $table->string('no_telp_direktur')->nullable()->unique();
            $table->string('divisi_direktur')->nullable();
            $table->string('nib')->nullable()->unique();
            $table->string('nio')->nullable()->unique();
            $table->string('valid')->nullable();
            $table->string('history_acc')->nullable();
            $table->string('valid_acc')->nullable();
            $table->string('regist_status')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
