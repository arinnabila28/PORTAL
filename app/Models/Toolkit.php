<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Toolkit extends Model
{
    protected $fillable = ['nama_aplikasi', 'mata_kuliah', 'deskripsi', 'link_download'];
}
