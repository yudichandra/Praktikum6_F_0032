<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=[
        'nama_depan',
        'nama_belakang',
        'email',
        'no_telp',
        'tempat_lahir',
        'tanggal_lahir'
    ];
}
