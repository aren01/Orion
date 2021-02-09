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

  public static function getCatagories() {
  return DB::table('catagories')->get();
  }

  public static function getAuthors() {
  return DB::table('authors')->get();
  }

}
