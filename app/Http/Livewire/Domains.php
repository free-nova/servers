<?php

namespace App\Http\Livewire;

use App\Domain;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Domains extends Component
{
    use WithPagination;

    public $perPage = 25;
    public $sortField;
    public $sortAsc = true;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.domains', [
            'domains' => \App\Domain::search($this->search)
                ->orderBy('name', 'Asc')
                ->paginate($this->perPage),
        ]);
    }
}
