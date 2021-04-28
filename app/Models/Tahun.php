<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataKriteria;

class Tahun extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun'
    ];
    protected $table = 'tahun';
    protected $primaryKey = 'id_tahun';
    public function datakriteria() {
        return $this->hasMany(DataKriteria::class);
    }
}
