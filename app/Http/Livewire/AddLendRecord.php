<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Book;
use App\Models\Lending;
use Illuminate\Http\Request;

class AddLendRecord extends Component
{
    public $lend_id, $bookname, $user_id, $lend_date, $return_date, $book, $user;
    public $bookarray = [];
    public $userarray = [];
    public $invcurr, $invincir, $invtotal;

    public function render()
    {
        if (!empty($this->book) && !empty($this->user))
        {
            $this->bookarray = Book::where('id', $this->book)
                ->get();
            $this->userarray = User::where('id', $this->user)
                ->get();
        }
        return view('livewire.add-lend-record')
            ->withBooks(Book::orderBy('name')
            ->get())
            ->withUsers(User::orderBy('name')
            ->get());
    }

    private function resetInputFields()
    {
        $this->lend_id = '';
        $this->user_id = '';
        $this->bookname = '';
        $this->lend_date = '';
        $this->return_date = '';
    }

    public function store()
    {
        $this->invcurr = Book::where('id', $this->bookname)->value('current');
        $this->invincir = Book::where('id', $this->bookname)->value('incirculation');
        if ($this->invcurr != 0)
        {
            $this->validate([
              'user_id' => 'required',
              'bookname' => 'required',
              'lend_date' => 'required',
              'return_date' => 'required',
            ]);

            Lending::updateOrCreate(['id' => $this->lend_id],
            [
              'book_id' => $this->bookname,
              'user' => $this->user_id,
              'lend_date' => $this->lend_date,
              'return_date' => $this->return_date

            ]);

            Book::updateOrCreate(['id' => $this->bookname],
            [
              'current' => $this->invcurr - 1,
              'incirculation' => $this->invincir + 1
            ]);
            $this->resetInputFields();
            $this->emit('alert', ['type' => 'success', 'message' => 'Book lend record added successfully']);
        }
        else
        {
            $this->emit('alert', ['type' => 'error', 'message' => 'Book not available']);
        }

    }

    public function back()
    {
      return redirect('Lendings');
    }
}
