<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama extends Model
{
    use HasFactory;

    protected $table = 'nama';

    protected $fillable = [
        'nama',
        'alamat',
        'hobi',
        'prodi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
