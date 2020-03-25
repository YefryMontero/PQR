<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Inconformidad;
use App\Models\Seguridad\Usuario;

class Respuesta extends Model
{
    protected $table = "respuestas";
    protected $fillable = ['usuario_id','inconformidad_id','descripcion'];
    protected $guarded = ['id'];
    public $timestamps = true;


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
   public function inconformidad_respuestas()
    {
        return $this->belongsTo(Inconformidad::class, 'inconformidad_id');
    }
    
}
