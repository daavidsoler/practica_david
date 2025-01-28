<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->timestamps();
        });

        Schema::create('detalles_coche', function (Blueprint $table) {
            $table->id();
            $table->float('peso');
            $table->integer('caballos');
            $table->string('tipo_traccion');
            $table->timestamps();
        });

        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_coche');
            $table->foreignId('id_detallescoche')->constrained('detalles_coche')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('detalles_circuito', function (Blueprint $table) {
            $table->id();
            $table->float('longitud');
            $table->string('ubicacion');
            $table->timestamps();
        });

        Schema::create('circuitos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_circuito');
            $table->foreignId('id_detalles_circuito')->constrained('detalles_circuito')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('usuario_coche', function (Blueprint $table) {
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('coche_id')->constrained('coches')->onDelete('cascade');
            $table->primary(['usuario_id', 'coche_id']);
            $table->timestamps();
        });

        Schema::create('usuario_circuito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('circuito_id')->constrained('circuitos')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('usuario_circuito_coche', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('circuito_id')->constrained('circuitos')->onDelete('cascade');
            $table->foreignId('coche_id')->constrained('coches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('usuario_circuito_coche');
        Schema::dropIfExists('usuario_circuito');
        Schema::dropIfExists('usuario_coche');
        Schema::dropIfExists('circuitos');
        Schema::dropIfExists('detalles_circuito');
        Schema::dropIfExists('coches');
        Schema::dropIfExists('detalles_coche');
        Schema::dropIfExists('usuarios');
    }
};
