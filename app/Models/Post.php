<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'conteudo', 'imagem', 'categoria_id', 'user_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function autor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
