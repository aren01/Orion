<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Catagories;
use App\Models\Authors;
use App\Models\Book;
use Illuminate\Http\Request;
use View;

class EditBooks extends Component
{
    public $cata;
    public $autha;

    public $catagoryarray=[];
    public $authorarray=[];
    public $book_id, $bookname, $author_id, $catagory_id, $ISBN, $price, $catagorypluck;
    public function render(Request $request, $id)
    {
      $this->bookid = $id;
      $record = Book::where('id', $id)->get();
      $catagorypluck = $record->pluck('catagory_id')->first();
      $authorpluck = $record->pluck('author_id')->first();
      $catagoryget = Catagories::where('id', $catagorypluck)->pluck('catagory')->first();
      $authorget = Authors::where('id', $authorpluck)->pluck('author')->first();
      // dd($record, $catagorypluck,$authorpluck,$catagoryget, $authorget);

      if(!empty($this->cata) && !empty($this->autha)) {
        $this->catagoryarray = Catagories::where('id', $this->cata)->get();
        $this->authorarray = Authors::where('id', $this->autha)->get();
      }

      return view('livewire.edit-books')->with('catagoryname', $catagoryget)->with('authorname', $authorget)->with('books', $record)->withCatagories(Catagories::orderBy('catagory')->get())->withAuthors(Authors::orderBy('author')->get());;
    }


    private function resetInputFields(){
    $this->book_id = '';
    $this->bookname = '';
    $this->authorname = '';
    $this->category = '';
    $this->ISBN = '';
    $this->price = '';


  }


    public function update(Request $request, $id)
    {
      $update = Book::find($id);
      $update->name = $request->input('bookname');
      $update->catagory_id  = $request->input('category');
      $update->author_id  = $request->input('authorname');
      $update->isbn = $request->input('isbn');
      $update->price = $request->input('price');
      $update->save();
      return redirect('/Books');

    }
}
