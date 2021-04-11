<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoHepas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_info', 'isi_info'
    ];
    protected $table = 'infohepas';
    protected $primaryKey = 'id_info';
}
