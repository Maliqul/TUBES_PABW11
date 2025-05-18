<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nama', 'nim', 'jabatan', 'divisi_id'];

public function divisi()
{
    return $this->belongsTo(Divisi::class);
}
}
