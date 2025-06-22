<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'nama', 'kategori', 'lokasi', 'status', 'dibuat_pada', 'diperbarui_pada'
    ];

    public $timestamps = false; // Jika tidak memakai created_at/updated_at Laravel


}
