<?php

namespace App\Http\Livewire;
use App\Models\Authors;
use Livewire\Component;
use App\Operations;
use DB;
use View;

class Author extends Component
{
    public function render()
    {
        $author = Operations::getAuthors();
        return view('livewire.author')->with('authors', $author);
    }

    public function destroy($id)
    {
        if ($id)
        {
            $record = Authors::where('id', $id);
            $record->delete();
            $this->emit('alert', ['type' => 'success', 'message' => 'Author deleted successfully']);
        }
    }

}
