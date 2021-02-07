<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Books;
class BooksForm extends Component
{
    public $book_id, $bookname, $authorname, $category, $ISBN, $price;


    public function render()
    {
        return view('livewire.books-form');
    }

    private function resetInputFields(){
    $this->book_id = '';
    $this->bookname = '';
    $this->authorname = '';
    $this->category = '';
    $this->ISBN = '';
    $this->price = '';


  }
    public function store()
    {
      $this->validate([
        'bookname' => 'required',
        'authorname' => 'required',
        'category' => 'required',
        'ISBN' => 'required',
        'price' => 'required',
]);
        Books::updateOrCreate(['id' => $this->book_id], [
        'name' => $this->bookname,
        'author' => $this->authorname,
        'catagory' => $this->category,
        'isbn' => $this->ISBN,
        'price' => $this->price
]);
       // $this->closeModal();
       $this->resetInputFields();
       $this->emit('alert', ['type' => 'success', 'message' => 'Book added successfully']);


       // return redirect('/books');
    }
}
