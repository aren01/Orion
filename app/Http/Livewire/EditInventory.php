<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use Illuminate\Http\Request;

class EditInventory extends Component
{
    public function render(Request $request, $id)
    {
        $record = Book::where('id', $id)->get();
        return view('livewire.edit-inventory')->with('inventories', $record);
    }

    public function update(Request $request, $id)
    {
        $update = Book::find($id);
        $update->incirculation = $request->input('incirculation');
        $update->current = $request->input('current');
        $update->total = $request->input('total');
        $update->save();
        return redirect('/Inventory');

    }
}
