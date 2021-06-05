<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operations;
use DB;
use App\Models\Catagories;
use View;

class Catagory extends Component
{
    public function render()
    {
        $catagory = Operations::getCatagories();
        return view('livewire.catagory')->with('catagory', $catagory);
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = Catagories::where('id', $id);
            $record->delete();
            $this->emit('alert', ['type' => 'success', 'message' => 'Catagory deleted successfully']);

        }
    }
}
