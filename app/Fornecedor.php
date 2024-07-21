<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

    // Alterando o nome da tabela que o framework define por padrão
    protected $table = 'fornecedores';
    protected $fillable =['nome', 'site', 'uf', 'email'];
}
