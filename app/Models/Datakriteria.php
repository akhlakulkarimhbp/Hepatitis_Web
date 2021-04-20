<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'rumah_sehat', 'air_bersih', 'penduduk','kasus','sanitasi'
    ];
    protected $table = 'datakriteria';
    protected $primaryKey = 'id_kriteria';
}
