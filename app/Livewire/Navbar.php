<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $menuOpen = false;
    public $annuaireOpen = false;
    public $serviceOpen = false;

    public function toggleMenu()
    {
        $this->menuOpen = !$this->menuOpen;
    }

    public function toggleAnnuaire()
    {
        $this->annuaireOpen = !$this->annuaireOpen;
    }
    
    public function toggleService()
    {
        $this->serviceOpen = !$this->serviceOpen;
    }


    public function render()
    {
        return view('livewire.navbar');
    }
}
