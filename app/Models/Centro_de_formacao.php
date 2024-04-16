<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro_de_formacao extends Model
{
    use HasFactory;

  public $table = 'centros_de_formacaos';
    protected $fillable = [
        'nome',
        'localizacao',
        'vagas',
        'imglink',
    ];

    
      public function cursos()
    {
        return $this->hasMany(Curso::class);
    }

}
