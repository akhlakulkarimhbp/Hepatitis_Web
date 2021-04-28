<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataKriteria;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kecamatan', 'geometri'
    ];
    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';
    public function datakriteria() {
        return $this->hasMany(DataKriteria::class);
    }
}
