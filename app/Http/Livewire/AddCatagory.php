<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catagories;

class AddCatagory extends Component
{

    public $catagory_id, $catagoryname, $catagorydescription;

    public function render()
    {
        return view('livewire.add-catagory');
    }

    private function resetInputFields()
    {
        $this->catagory_id = '';
        $this->catagoryname = '';
        $this->catagorydescription = '';
    }

    public function store()
    {
        $this->validate(['catagoryname' => 'required', 'catagorydescription' => 'required', ]);
        Catagories::updateOrCreate(['id' => $this->catagory_id],
        [
          'catagory' => $this->catagoryname,
          'description' => $this->catagorydescription
        ]);
        $this->resetInputFields();
        $this->emit('alert', ['type' => 'success', 'message' => 'Catagory added successfully']);

    }

    public function back()
    {
      return redirect('Catagory');
    }
}
