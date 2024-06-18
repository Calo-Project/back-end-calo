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
        Schema::create('waktu_event', function (Blueprint $table) {
            $table->increments('id_waktu_event');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('waktu_mulai', 8);
            $table->string('waktu_akhir', 8);
            $table->integer('event_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();

            $table->foreign('event_id')->references('id_event')->on('event')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_event');
    }
};
