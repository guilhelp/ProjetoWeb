<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Agendamentos extends Model
{
    use HasFactory, Notifiable;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Criando os campos para o banco de dados
    protected $fillable = [
        'nome',
        'telefone',
        'origem',
        'data_contato',
        'observacao',
        'acao',
    ];
}
