<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportacoesJson extends Model
{
    use HasFactory;

    protected $table = 'importacoes_json';

    protected $fillable = ['user_id', 'nome_arquivo', 'dados'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
