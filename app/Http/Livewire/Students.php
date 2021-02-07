<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use DB;
use View;


class Students extends Component
{
    public function render()
    {
      $students = Operations::getStudents();
      return view('livewire.students')->with('students', $students);
    }
}
