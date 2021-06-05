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

  public static function getTotalAuthors() {
  return DB::table('authors')->count();
  }

  public static function getTotalCatagories() {
  return DB::table('catagories')->count();
  }

  public static function getTotalStudents() {
  return DB::table('users')->count();
  }

  public static function getTotalBooks() {
  return DB::table('books')->count();
  }

  public static function getTotalLends() {
  return DB::table('lending')->count();
  }

}
