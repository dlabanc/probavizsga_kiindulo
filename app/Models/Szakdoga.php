<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szakdoga extends Model
{
    use HasFactory;
    protected $table = 'szakdoga';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'id', 'szakdoga_nev', 'githublink', 'oldallink', 'tagokneve'
    ];
}
