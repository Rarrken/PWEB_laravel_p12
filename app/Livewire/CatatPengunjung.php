<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengunjung;

class CatatPengunjung extends Component
{
    public $pengunjung;

    public function mount()
    {
        Pengunjung::create([
            'ip_address' => request()->ip(),
        ]);
    }

    public function render()
    {
        $this->pengunjung = Pengunjung::latest()->get();
        return view('livewire.catat-pengunjung');
    }
}
