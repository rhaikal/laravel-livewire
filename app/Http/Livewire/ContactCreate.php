<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    // public function mount($contacts)
    // {
    //     // dd($contacts);
    //     $this->contacts = $contacts;
    // }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
