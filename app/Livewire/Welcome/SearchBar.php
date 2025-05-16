<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class SearchBar extends Component
{
    public $query = '';
    public function render()
    {
        return view('livewire.welcome.search-bar');
    }
}
