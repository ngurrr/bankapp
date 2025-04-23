<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik',
        'nomor_rekening',
        'bank',
        'saldo'
    ];
}
