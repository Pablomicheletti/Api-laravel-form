<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    
    protected $primaryKey = 'id';
// Aca va la coneccion a la base de datos, en este caso mysql
    protected $connection = 'mysql';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'message'
    ];


}
