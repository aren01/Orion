<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use DB;
use View;

class Books extends Component
{

    public function render() {
      $books = Operations::getBooks();
      return view('livewire.books')->with('books', $books);
}
}
