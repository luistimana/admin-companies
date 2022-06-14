<?php

namespace App;

use App\Employees;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
    protected $fillable = ['nombre', 'correo', 'logo', 'pagina_web'];

    public function employees(){
        return $this->hasMany(Employees::class);
    }

}
