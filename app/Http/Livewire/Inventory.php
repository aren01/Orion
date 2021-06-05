<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use App\Models\Book;
use App\Models\Inventories;
use DB;
use View;

class Inventory extends Component
{
    public function render()
    {
        $inventory = DB::table('books')->get();
        return view('livewire.inventory')->with('inventories', $inventory);;
    }
}
