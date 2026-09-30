<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulatorDdc extends Model
{
    // Mengizinkan penyimpanan data secara masal
    protected $fillable = ['subjek', 'nomor', 'detail'];
}