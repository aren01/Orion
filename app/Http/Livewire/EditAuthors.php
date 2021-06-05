<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Authors;
use Illuminate\Http\Request;

class EditAuthors extends Component
{
    public function render(Request $request, $id)
    {
        $record = Authors::where('id', $id)->get();
        return view('livewire.edit-authors')->with('authors', $record);
    }

    public function update(Request $request, $id)
    {
        $update = Authors::find($id);
        $update->author = $request->input('authorname');
        $update->description = $request->input('authordescription');
        $update->save();
        return redirect('/Author');

    }
}
