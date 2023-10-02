<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['cpf_cnpj', 'nome', 'nome_social', 'data_nascimento', 'image'];
}
