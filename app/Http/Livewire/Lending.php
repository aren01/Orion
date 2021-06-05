<?php

namespace App\Http\Livewire;
use DB;
use View;
use App\Models\Lendings;
use App\Models\Book;
use Livewire\Component;

class Lending extends Component
{
    public $book_id, $invcurr, $invincir;
    public function render()
    {
        $lend = DB::table('lending')
            ->join('books', 'books.id', '=', 'lending.book_id')
            ->join('users', 'users.id', '=', 'lending.user')
            ->select('lending.*', 'books.name as bookname', 'users.name as username')
            ->get();
        return view('livewire.lending')->with('lends', $lend);
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = DB::table('lending')->where('id', $id);
            $this->book_id = DB::table('lending')->where('id', $id)->value('book_id');
            $this->invcurr = Book::where('id', $this->book_id)->value('current');
            $this->invincir = Book::where('id', $this->book_id)->value('incirculation');



            Book::updateOrCreate(['id' => $this->book_id],
            [
              'current' => $this->invcurr + 1,
              'incirculation' => $this->invincir - 1
            ]);
            $record->delete();
            $this->emit('alert', ['type' => 'success', 'message' => 'Book Returned successfully']);

        }
    }
}
