<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    //Nama Table
    protected $table = 'jabatans';

    //Primary Key Table Jabatan
    protected $primaryKey = 'id';

    //Semua field yg berkaitan dengan table jabatan
    protected $fillable = ['name'];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
