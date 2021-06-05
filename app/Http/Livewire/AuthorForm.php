<?php

namespace App\Http\Livewire;
use App\Models\Authors;
use Livewire\Component;

class AuthorForm extends Component
{

    public $author_id, $authorname, $authordescription;

    public function render()
    {
        return view('livewire.author-form');
    }

    private function resetInputFields()
    {
        $this->author_id = '';
        $this->authorname = '';
        $this->authordescription = '';
    }

    public function store()
    {
        $this->validate(['authorname' => 'required', 'authordescription' => 'required', ]);
        Authors::updateOrCreate(['id' => $this->author_id],
        [
          'author' => $this->authorname,
          'description' => $this->authordescription
        ]);
        $this->resetInputFields();
        $this->emit('alert', ['type' => 'success', 'message' => 'Author added successfully']);

    }

    public function back()
    {
      return redirect('Author');
    }
}
