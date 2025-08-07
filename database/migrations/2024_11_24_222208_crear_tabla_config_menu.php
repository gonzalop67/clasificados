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
        Schema::create('config_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('config_menu_id')->nullable();
            $table->foreign('config_menu_id', 'fk_configmenu_configmenu')->references('id')->on('config_menu')->onDelete('set null')->onUpdate('restrict');
            $table->string('nombre', 150);
            $table->string('url', 150);
            $table->integer('orden')->default(1);
            $table->string('icono', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_menu');
    }
};
