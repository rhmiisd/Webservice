<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dftrjurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'idsekolah',
        'idjurusan',
    ];
}
