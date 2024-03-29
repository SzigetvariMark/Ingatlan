<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    use HasFactory;

    protected $table = 'ingatlanok';
    protected $fillable = [
        'Kategoriald',
        'KategoriaNev',
        'Leiras',
        'HirdetesDatuma',
        'Tehermentes',
        'KepUri'
    ];
}
