<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use App\Models\Book;
use DB;
use View;

class Books extends Component
{

    public function render() {
      $books = Operations::getBooks();
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
}
