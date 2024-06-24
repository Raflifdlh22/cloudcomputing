<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_menu extends Model
{
    use HasFactory;
    protected $table = 'Kategori_menus';

    protected $fillable = [
        'nama_kategori',
    ];
}
