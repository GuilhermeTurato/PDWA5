<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lutador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'nascimento','nacionalidade','peso','arte_marcial'];

}
