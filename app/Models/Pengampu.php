<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengampu extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'pengampu';
    protected $fillable = ['id_matapelajaran', 'id_guru', 'jumlah', 'kelas', 'semester', 'jurusan', 'tahun', 'id'];

    function matapelajaran() {
        return $this->belongsTo(matapelajaran::class, 'id', 'id',);

    }
    function guru() {
        return $this->belongsTo(guru::class, 'id', 'id',);

    }
}
