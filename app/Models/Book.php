<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "book";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_buku',
        'deskripsi',
        'harga'
    ];
}
