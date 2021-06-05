<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    public $table = "lending";
    use HasFactory;

    protected $fillable = [
          'book_id','user','lend_date','return_date'
      ];
}
