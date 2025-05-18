<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['nama_kegiatan', 'deskripsi', 'tanggal', 'divisi_id','id'];

public function divisi()
{
    return $this->belongsTo(Divisi::class);
}

}
