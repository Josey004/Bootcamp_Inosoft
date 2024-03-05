<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "item";
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'item_name',
        'item_type',
        'item_desc',
        'item_price',
        'created_at',
        'updated_at'
    ];
}
