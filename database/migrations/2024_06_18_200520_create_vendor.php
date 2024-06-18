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
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id_vendor');
            $table->string('slug');
            $table->text('deskripsi_vendor')->nullable();
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->text('detail_alamat')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_website')->nullable();
            $table->enum('status_vendor', ['belum verifikasi', 'sudah verifikasi', 'nonaktif'])->default('belum verifikasi');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
