<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    // Alterando o nome da tabela que o framework define por padrão
    protected $table = 'fornecedores';
    protected $fillable =['nome', 'site', 'uf', 'email'];
}
