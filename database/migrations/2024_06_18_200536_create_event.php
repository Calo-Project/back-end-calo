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
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id_event');
            $table->string('slug');
            $table->string('nama_event');
            $table->text('deskripsi_event')->nullable();
            $table->string('tempat');
            $table->string('provinsi');
            $table->string('kota');
            $table->integer('harga');
            $table->text('detail_alamat')->nullable();
            $table->text('link_alamat')->nullable();
            $table->integer('maks_tiket')->nullable();
            $table->integer('tiket_tersedia')->nullable();
            $table->string('poster', 100)->nullable();
            $table->string('link_sosmed')->nullable();
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_berakhir')->nullable();
            $table->date('tanggal');
            $table->integer('vendor_id')->unsigned();
            $table->integer('kategori_event_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('vendor_id')->references('id_vendor')->on('vendor')->onDelete('cascade');
            $table->foreign('kategori_event_id')->references('id_kategori_event')->on('kategori_event')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
