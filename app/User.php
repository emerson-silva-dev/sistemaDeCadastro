<?php

namespace sistemaDeCadastro;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //DADOS QUE ESTÃO DISPONÍVEIS PARA TRAZER DA VIU E PEGAR VIA POST
    protected $fillable = [
        'name', 'email', 'password','type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //O laravel ja reconhece pegando o nome da classe com letra minuscula e no plural, caso queira redefinir:   
    protected $table = "users";

    public $timestamps = true;

    public function type(){
        return $this->belongsTo('sistemaDeCadastro\Type');
    }
}
