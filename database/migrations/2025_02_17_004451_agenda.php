<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('imgcard1')->nullable();
            $table->string('imgcard2')->nullable();
            $table->string('titlecard1');
            $table->string('titlecard2');
            $table->text('descriptioncard1');
            $table->text('descriptioncard2');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('agenda');
    }
};

