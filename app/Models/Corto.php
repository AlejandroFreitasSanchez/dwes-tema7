<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corto extends Model
{

    use HasFactory;

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
    
    public function usuario(){
        //el modelo, al no llamarse usuario, hay que indicarle las columnas, ya que por defecto seria usuario_id
        return $this->belongsTo(User::class, 'user_id');
    }

}
