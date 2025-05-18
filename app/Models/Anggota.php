<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Anggota extends Model
    
{
    protected $table = 'anggota';
    protected $fillable = [
    'nama',
    'nim',
    'jurusan',
    'angkatan',
    'jabatan',
    'divisi_id',
     'foto'
];


    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}
