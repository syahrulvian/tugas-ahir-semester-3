<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postpesan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'No_barang',
        'alamat',
        'email',
        'No_HP',
        'Request'
        ];
}
