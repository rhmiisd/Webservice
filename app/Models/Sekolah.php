<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Sekolah extends Model
{
    use HasFactory; 

    protected $fillable = [ 
        'namasekolah', 'kepsek', 'akre', 'visi', 'misi', 'npsn', 'ekskul', 'nohp', 'lokasi',  'berdiri', 'logo'
    ];


    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($logo) => asset('/storage/sekolahs/' . $logo),
        );
    }
}
