<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use App\Models\Book;
use DB;
use View;

class Books extends Component
{
    public $book_id, $bookname, $author_id, $catagory_id, $ISBN, $price;

    public function render() {
      $books = DB::table('books')
      ->join('catagories', 'books.catagory_id','=','catagories.id')
      ->join('authors', 'books.author_id','=','authors.id')
      ->select('books.*','catagories.catagory','authors.author')
      ->get();

      return view('livewire.books')->with('books', $books);
    }
    public function destroy($id)
    {
    if ($id) {
        $record = Book::where('id', $id);
        $record->delete();
        $this->emit('alert', ['type' => 'success', 'message' => 'Book deleted successfully']);
        // return redirect('/Books');
    }
  }

  // public function edit($id)
  // {
  //   $record = Book::findOrFail($id);
  //   $book_id = $id;
  //   $bookname = $record->name;
  //   $author_id = $record->author_id;
  //   $catagory_id = $record->catagory_id;
  //   $ISBN = $record->isbn;
  //   $price = $record->price;
  //   return view('livewire.edit-books')->with('book', $record);
  // }
}
