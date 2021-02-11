<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catagories;
use Illuminate\Http\Request;

class EditCatagory extends Component
{
    public function render(Request $request, $id)
    {
        $record = Catagories::where('id', $id)->get();
        return view('livewire.edit-catagory')->with('catagories', $record);
    }

    public function update(Request $request, $id)
    {
      $update = Catagories::find($id);
      $update->catagory = $request->input('catagoryname');
      $update->description  = $request->input('catagorydescription');
      $update->save();
      return redirect('/Catagory');

    }
}
