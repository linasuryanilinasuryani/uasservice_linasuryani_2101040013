<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'guru';
    protected $fillable = ['code_guru', 'nidn', 'name', 'email', 'id'];



}
