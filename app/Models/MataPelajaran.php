<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'matapelajaran';
    protected $fillable = ['code_matapelajaran', 'nama', 'semester', 'sks', 'type', 'id'];

   
}
