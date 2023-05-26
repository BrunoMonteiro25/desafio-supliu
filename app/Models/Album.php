<?php

namespace App\Models;
use App\Models\Faixa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'ano'];

    public function faixas()
    {
        return $this->hasMany(Faixa::class);
    }
}
