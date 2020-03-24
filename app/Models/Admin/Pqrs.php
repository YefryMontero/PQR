<?php

namespace App\models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\seguridad\Usuario;
use App\Models\inconformidad;
class Pqrs extends Model
{
    protected $table = "pqrs";
    protected $fillable = ['nombre', 'prioridad'];
    protected $guarded = ['id'];


    public function inconfor()
    {
        return $this->HasMany(inconformidad::class);
    }
   
}
