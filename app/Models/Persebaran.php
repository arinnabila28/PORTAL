<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persebaran extends Model
{
    protected $fillable = ['daerah', 'posisi_x', 'posisi_y', 'pekerjaan'];
}
