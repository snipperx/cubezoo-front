<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public string $searchQuery = '';
    public array $categories = [
        'Lifestyle',
        'Urban landscape',
        'Business',
        'People',
        'Technology'
    ];

    public function search()
    {
        return redirect()->route('browse', ['search' => $this->searchQuery]);
    }

    public function filterByCategory($category)
    {
        return redirect()->route('browse', ['category' => $category]);
    }

    public function render()
    {
        return view('livewire.home')
            ->layout('layouts.app');
    }
}
