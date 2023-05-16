<?php

namespace App\Models;

// Model ini digunakan untuk menghubungkan controller dengan database di mana dalam nya terdapat nama table dan fields

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otomotif extends Model
{
    // use HasFactory;
    protected $table = 'otomotifs';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tingkatan', 'telepon', 'alamat'];
}
