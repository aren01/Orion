<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class Operations extends Model
{
  public static function getBooks() {
  return DB::table('books')->get();
  }

  public static function getStudents() {
  return DB::table('users')->get();
  }

}
