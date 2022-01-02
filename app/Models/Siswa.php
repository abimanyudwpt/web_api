<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $primarykey = 'id';
    protected $fillable = [
        'nisn', 'nama', 'kelas', 'tmp_lahir', 'tgl_lahir', 'foto'
    ];
}