<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('valor', 10,2); 

            $table->timestamps(); //Create e Update TIMESTAMP é a hora exata da alteração 
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
