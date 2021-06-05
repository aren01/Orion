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
        $totalLends = Operations::getTotalLends();
        return view('livewire.dashboard')->with('students', $totalStudents)->with('books', $totalBooks)->with('lends', $totalLends);
    }
}
