<?php

namespace sistemaDeCadastro;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //O laravel ja reconhece pegando o nome da classe com letra minuscula e no plural, caso queira redefinir:	
    protected $table = "types";
    public $timestamps = true;

    //DADOS QUE ESTÃO DISPONÍVEIS PARA TRAZER DA VIU E PEGAR VIA POST
    protected $fillable = [
    	'name'
    ];

    // protected $guarded = ['id'];
    
    public function users(){
        return $this->hasMany('sistemaDeCadastro\User');
    }
}
