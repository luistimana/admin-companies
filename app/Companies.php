<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
    protected $fillable = ['nombre', 'correo', 'logo', 'pagina_web'];
}
