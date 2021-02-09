<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catagory;

class AddCatagory extends Component
{

    public $catagory_id, $catagoryname, $catagorydescription;


    public function render()
    {
        return view('livewire.add-catagory');
    }

    private function resetInputFields(){
    $this->catagory_id = '';
    $this->catagoryname = '';
    $this->catagorydescription = '';
  }

  public function store()
  {
    $this->validate([
      'catagoryname' => 'required',
      'catagorydescription' => 'required',
]);
      Catagory::updateOrCreate(['id' => $this->catagory_id], [
      'catagory' => $this->catagoryname,
      'description' => $this->catagorydescription
]);
     // $this->closeModal();
     $this->resetInputFields();
     $this->emit('alert', ['type' => 'success', 'message' => 'Catagory added successfully']);


     // return redirect('/books');
  }
}
