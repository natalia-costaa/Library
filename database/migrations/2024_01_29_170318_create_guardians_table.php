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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
	        $table->timestamps();
	        $table->string('cpf');
	        $table->unsignedBigInteger('user_id');
		$table->foreign('user_id')
			->references('id')
			->on('users')
			->constrained()
			->onUpdate('cascade')
			->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
