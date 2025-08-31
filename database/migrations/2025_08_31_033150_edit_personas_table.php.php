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
        Schema::table('personas', function (Blueprint $table) {
            $table->string('nro_documento')->unique()->after('email');
            $table->foreignId('direccion_id')->constrained('direcciones')->onDelete('cascade')->after('fecha_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('personas', function (Blueprint $table) {
            $table->dropColumn('nro_documento');
            $table->dropForeign(['direccion_id']);
            $table->dropColumn('direccion_id');
        });
    }
};
