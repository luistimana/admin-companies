<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable = ['nombre', 'apellido','compania_id', 'correo', 'telefono'];

    public function companies() {
        return $this->belongsTo(Companies::class, 'compania_id');
    }
}
