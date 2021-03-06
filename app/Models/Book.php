<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
          'name','catagory_id', 'author_id', 'isbn', 'price', 'total', 'incirculation', 'current'
      ];
}
