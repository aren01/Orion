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

    public function render()
    {
        $books = DB::table('books')->join('catagories', 'books.catagory_id', '=', 'catagories.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.*', 'catagories.catagory', 'authors.author')
            ->get();

        return view('livewire.books')
            ->with('books', $books);
    }
    public function destroy($id)
    {
        if ($id)
        {
            $record = Book::where('id', $id);
            $record->delete();
            $this->emit('alert', ['type' => 'success', 'message' => 'Book deleted successfully']);
        }
    }
}
