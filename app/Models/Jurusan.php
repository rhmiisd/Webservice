<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [ 
            'nmjurusan', 'idsekolah', 'deskripsi', 'prospek', 'tersedia'
        ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'idsekolah');
    }
}
