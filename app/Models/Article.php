<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];      // ini boleh diisi
    protected $guarded = ['id'];         //ini yang gak boleh diisi
}
