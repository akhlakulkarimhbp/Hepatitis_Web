<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kecamatan;

class Datakriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kecamatan','tahun','rumah_sehat', 'air_bersih', 'penduduk','kasus','sanitasi'
    ];
    protected $table = 'datakriteria';
    protected $primaryKey = 'id_kriteria';

    public function kecamatan() {
        
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
