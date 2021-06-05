<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lendings extends Model
{
    use HasFactory;

    protected $fillable = [
          'book_id','user','lend_date','return_date'
      ];
}
