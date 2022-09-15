<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskamar extends Model
{
    use HasFactory;

    protected $table = 'jeniskamars';
    protected $fillable = [
        'jeniskamar',
        'fasilitaskamar',
        'reservasi',
        'harga',
    ];
}
