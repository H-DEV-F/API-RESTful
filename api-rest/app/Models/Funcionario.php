<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome', 
        'sobrenome', 
        'idade',
        'sexo'
    ];

    public function rules(){
        return [
            'nome' => 'required',
            'sobrenome' => 'required',
            'idade' => 'required',
            'sexo' => 'required'
        ];
    }


}
