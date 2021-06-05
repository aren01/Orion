<?php

namespace App\Http\Livewire;
use App\Models\Book;
use App\Models\Inventories;
use Livewire\Component;

class AddInventory extends Component
{
    public $inve;
    public $inventoryarray = [];
    public $bookname, $quantity;
    public function render()
    {
        if (!empty($this->inve))
        {
            $this->inventoryarray = Book::where('id', $this->inve)
                ->get();
        }
        return view('livewire.add-inventory')
            ->withBooks(Book::orderBy('name')
            ->get());
    }

    private function resetInputFields()
    {
        $this->bookname = '';
        $this->quantity = '';
    }

    public function store()
    {
        $this->validate(['bookname' => 'required', 'quantity' => 'required', ]);
        Book::updateOrCreate(['id' => $this->bookname],
        [
          'total' => $this->quantity,
          'current' => $this->quantity,
          'incirculation' => '0'
        ]);
        $this->resetInputFields();
        $this->emit('alert', ['type' => 'success', 'message' => 'Inventory created successfully']);

    }

    public function back()
    {
      return redirect('Inventory');
    }
}
