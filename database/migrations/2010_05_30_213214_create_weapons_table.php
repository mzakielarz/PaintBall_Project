<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 64)->notnull();
            $table->string('model', 64)->notnull();
            $table->string('type', 32)->notnull();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
