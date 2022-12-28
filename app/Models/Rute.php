<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'rute';
    protected $guarded = ['id'];

    public function bus()
    {
        return $this->hasOne(Bus::class, 'id', 'id_bus');
    }
    
    public function pemberangkatan()
    {
        return $this->hasOne(Lokasi::class, 'id', 'id_pemberangkatan');
    }

    public function pemberhentian()
    {
        return $this->hasOne(Lokasi::class, 'id', 'id_pemberhentian');
    }
}
