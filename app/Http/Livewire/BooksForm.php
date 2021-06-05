<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Catagories;
use App\Models\Authors;
use App\Models\Inventories;
class BooksForm extends Component
{
    public $cata;
    public $autha;
    public $updateMode = false;
    public $catagoryarray = [];
    public $authorarray = [];

    public $book_id, $bookname, $authorname, $category, $ISBN, $price;

    public function render()
    {
        if (!empty($this->cata) && !empty($this->autha))
        {
            $this->catagoryarray = Catagories::where('id', $this->cata)
                ->get();
            $this->authorarray = Authors::where('id', $this->autha)
                ->get();
        }
        return view('livewire.books-form')
            ->withCatagories(Catagories::orderBy('catagory')
            ->get())
            ->withAuthors(Authors::orderBy('author')
            ->get());
    }

    private function resetInputFields()
    {
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
          'price' => 'required'
        ]);
        Book::updateOrCreate(['id' => $this->book_id],
        [
          'name' => $this->bookname,
          'author_id' => $this->authorname,
          'catagory_id' => $this->category,
          'isbn' => $this->ISBN,
          'price' => $this->price,
          'total' => '0',
          'current' => '0',
          'incirculation' => '0'
        ]);

        $this->resetInputFields();
        $this->emit('alert', ['type' => 'success', 'message' => 'Book added successfully']);

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id', $id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;

    }
    public function update()
    {
        $validatedDate = $this->validate(
          [
            'name' => 'required',
            'email' => 'required|email',
          ]);

        if ($this->bookid)
        {
            $book = Book::find($this->bookid);
            $book->update(
              [
                'name' => $this->bookname,
                'author_id' => $this->authorname,
                'catagory_id' => $this->category,
                'isbn' => $this->ISBN,
                'price' => $this->price
                ]);
            $this->emit('alert', ['type' => 'success', 'message' => 'Book edited successfully']);
            $this->resetInputFields();

        }
    }

    public function back()
    {
      return redirect('Books');
    }
}
