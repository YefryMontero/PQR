<?php

namespace App\Models;

use App\Models\Seguridad\Usuario;
use App\Models\Admin\Pqrs;
use Illuminate\Database\Eloquent\Model;

class inconformidad extends Model
{
    protected $table = "inconformidades";
    protected $fillable = ['usuario_id','pqrs_id','motivo','descripcion','estado'];
    protected $guarded = ['id'];
    public $timestamps = true;


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function pqrs()
    {
        return $this->belongsTo(Pqrs::class, 'pqrs_id');
    }

}
