<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PengurusKabinet extends Model
{
    protected $table = 'pengurus_kabinet';
    protected $fillable = ['nama', 'jabatan', 'anggota_id'];

    public function anggota()
        {
        return $this->belongsTo(Anggota::class);
         }

}