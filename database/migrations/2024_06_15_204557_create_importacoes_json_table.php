<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportacoesJsonTable extends Migration
{
    public function up()
    {
        Schema::create('importacoes_json', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nome_arquivo');
            $table->json('dados');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('importacoes_json');
    }
}
