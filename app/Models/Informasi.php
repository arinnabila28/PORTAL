<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasis';
    protected $fillable = ['judul', 'kategori', 'deskripsi', 'link_aksi'];
}
