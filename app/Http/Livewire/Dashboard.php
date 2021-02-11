<?php

namespace App\Http\Livewire;
use App\Operations;
use DB;
use View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalStudents = Operations::getTotalStudents();
        $totalBooks = Operations::getTotalBooks();
        return view('livewire.dashboard')->with('students', $totalStudents)->with('books', $totalBooks);
    }
}
