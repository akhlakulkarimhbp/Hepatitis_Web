<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tahun;
use App\Models\Kecamatan;

class Datakriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tahun','id_kecamatan','rumah_sehat', 'air_bersih', 'penduduk','kasus','sanitasi'
    ];
    protected $table = 'datakriteria';
    protected $primaryKey = 'id_kriteria';
    public function tahun() {
        return $this->belongsTo(Tahun::class,'id_tahun');
    }

    public function kecamatan() {
        
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
